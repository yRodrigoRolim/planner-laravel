<div class="text-white ml-0 lg:ml-4 bg-purplecolor p-4 rounded lg:mt-0 mt-2">
        <form action="{{ route('note.store') }}" method="POST" enctype="multipart/form-data" class="flex w-full flex-col">
            @csrf
            <input type="file" name="image" id="image" placeholder="Imagem">
            <input type="text" name="name" id="name" placeholder="Anotação" class="bg-darkblue p-2 mt-2 w-full rounded outline-none">
            <button type="submit" class="bg-darkblue p-2 mt-2 w-full rounded">Criar</button>
        </form>
    </div>