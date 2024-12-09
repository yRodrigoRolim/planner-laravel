<?php

namespace App\Http\Controllers;

use App\Models\Note;

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
    
        $notes = $notesQuery->orderBy('data', 'asc')->orderBy('name', 'asc')->first();
        $notesAll = $notesQuery->paginate(6);
    
        $now = Carbon::now();
    
        $fourItems = Note::orderByRaw('ABS(julianday(data) - julianday(?))', [$now])
                         ->limit(4)
                         ->get();
    
        return view('index', [
            'fourItems' => $fourItems,
            'allNotes' => $notesAll,
            'search' => $search, 
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
            'date' => 'date',
            'time' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $requestImage = $request->file('image');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
        }

        Note::create([
            'name' => $request->name,
            'image' => $imageName,
            'data' => $request->date,
            'hour' => $request->time,
            'type_id' => "1",
        ]);


        return redirect()->route('note.index');
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

        $note->delete();

        return redirect()->back()->with('success', 'Nota deletada com sucesso!');
    }
}
