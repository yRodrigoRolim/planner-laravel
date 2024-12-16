<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Type;

use Illuminate\Http\Request;

use Carbon\Carbon;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $notesQuery = Note::query();

        if ($search) {
            $notesQuery->where('name', 'like', '%' . $search . '%')
                ->orWhere('data', 'like', '%' . $search . '%');
        }

        $types = Type::all();

        $notesAll = $notesQuery->paginate(6);

        $now = Carbon::now();

        $fourItems = Note::orderByRaw('ABS(julianday(data) - julianday(?))', [$now])
            ->limit(4)
            ->get();

        return view('index', [
            'fourItems' => $fourItems,
            'allNotes' => $notesAll,
            'search' => $search,
            'allTypes' => $types,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'name' => 'required|string|max:255',
            'date' => 'required|date', 
            'time' => 'required',
            'createItem' => 'required|string', 
            'newtype' => 'nullable|string|max:255', 
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();

            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            if (!file_exists(public_path('img/events'))) {
                mkdir(public_path('img/events'), 0755, true);
            }

            $image->move(public_path('img/events'), $imageName);
        }

        $typeId = $request->createItem; 

        if ($typeId === 'outros') {
            $newType = Type::create([
                'name' => $request->newtype,
            ]);
            $typeId = $newType->id; 
        }

        Note::create([
            'name' => $request->name,
            'image' => $imageName,
            'data' => $request->date,
            'hour' => $request->time,
            'type_id' => $typeId,
        ]);

        return redirect()->route('note.index')->with('success', 'Nota criada com sucesso!');
    }




    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::findOrFail($id);
        $typeId = $note->type_id;
        $note->delete();
        $hasOtherNotes = Note::where('type_id', $typeId)->exists();
        if (!$hasOtherNotes) {
            Type::where('id', $typeId)->delete();
        }
        return redirect()->back()->with('success', 'Nota deletada com sucesso!');
    }
    
}
