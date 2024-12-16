@props(['options2'])

<div class="text-white ml-0 lg:ml-4 bg-purplecolor p-4 rounded lg:mt-0 mt-2">
    <form action="{{ route('note.store') }}" method="POST" enctype="multipart/form-data" class="flex w-full flex-col">
        @csrf

        <div
            class="file-upload-container w-full flex justify-center items-center relative overflow-hidden cursor-pointer h-48 bg-darkblue rounded">
            <input type="file" id="fileInput" accept="image/*" name="image" id="image" onchange="previewFile()"
                class="absolute w-full h-full top-0 left-0 opacity-0 cursor-pointer">
            <div id="dropText" class="text-center"> Clique para selecionar<br> ou arraste uma imagem </div>
            <img id="preview" src="" alt="Preview da imagem"
                class="w-full h-full object-cover hidden cursor-pointer">

            <div class="absolute text-white rounded-full border-none hidden cursor-pointer font-bold text-3xl"
                id="textContent"> Contéudo </div>

            <button id="removeBtn" onclick="removeFile()" type="button"
                class="absolute bg-darkblue text-white rounded-full border-none w-8 h-8 hidden cursor-pointer top-2 right-2 hover:bg-red-800">
                ✕
            </button>
        </div>

        <input type="text" name="name" id="inputname" placeholder="Anotação"
            class="bg-darkblue p-2 mt-2 w-full rounded outline-none">

        <div class="flex mt-2 grid grid-cols-2 gap-2">
            <input type="date" name="date" id="date" placeholder="Anotação"
                class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">
            <input type="time" name="time" id="time" placeholder="Anotação"
                class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">
        </div>

        <div class="flex mt-2 grid grid-cols-1 gap-2" id="outroselect">
            <select name="createItem" id="createItem"
                class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">
                <option value="selecOption" class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">Selecione uma opção</option>
                @foreach ($options2 as $option)
                    <option value="{{ $option->id }}"
                        class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">
                        {{ Str::ucfirst($option->name) }}
                    </option>
                    @endforeach
                    <option value="outros" class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white">Outros</option>
            </select>
            <input type="text" name="newtype" id="newtype" class="text-neutral-400 bg-darkblue p-2 rounded outline-none valid:text-white hidden" placeholder="New type">
        </div>
        <button type="submit" class="bg-darkblue p-2 mt-2 w-full rounded text-neutral-400 hover:text-white">
            Criar
        </button>
    </form>
</div>
