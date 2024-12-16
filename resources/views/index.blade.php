<x-layout>
    <section>
        <div class="flex mt-16 justify-between">
            <div class="flex items-center justify-center">
                <h1 class="text-3xl md:text-3xl lg:text-4xl  text-white mr-4 leading-none fontpersonalizada font-light">
                    Seu Planos</h1>
                <span class="w-9 h-9 rounded-full bg-white font-bold text-xl flex items-center justify-center">
                    <svg width="20" height="20" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.1208 8.448H8.94484V12.72H5.05684V8.448H0.880844V4.776H5.05684V0.48H8.94484V4.776H13.1208V8.448Z"
                            fill="#010030" />
                    </svg>


                </span>
            </div>
            <div class="flex items-center justify-between relative flex-row-reverse animation-edit">
                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"
                    fill="#fff" class="cursor-pointer">
                    <path
                        d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z" />
                </svg>
                <div class="h-full flex items-center">
                    <p class="text-neutral-400 text-sm cursor-pointer hover:text-white fontpersonalizada">EDITAR</p>
                </div>
            </div>
        </div>

        <div class="flex my-4 items-center">
            <span class="w-1 h-6 bg-purple-600 mr-2 shadow-lg shadow-purple"></span>
            <p class="text-purple-600 italic fontpersonalizada">quem anota tem o direito de esquecer</p>
        </div>

        <x-planejamento>
            @if ($fourItems)

                @foreach ($fourItems as $notes)
                    @php
                        $i = 1;
                    @endphp
                    <x-cardplanejamento id_card='{{ $i }}' img_banner="{{ $notes->image }}"
                        nomeanotacao="{{ $notes->name }}" infos="{{ $notes->hour }},{{ $notes->data }},{{ $notes->type->name }}"></x-cardplanejamento>
                    @php
                        $i++;
                    @endphp
                @endforeach
            @endif
        </x-planejamento>

    </section>
    <hr class="mt-8 border-lightpurplecolor">
    <h2 class="text-2xl text-white mt-8">Lista de item</h2>

    <x-list-item :options="$allTypes">
        <form action="{{ route('note.index') }}" method="GET" class="w-full">
            <input type="text" name="search" value="{{ $search }}" placeholder="Buscar notas"
                class="bg-transparent outline-none border-b text-white p-1">
            <button type="submit" class="ml-4">
                <?xml version="1.0" encoding="utf-8"?>

                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg height="16px" width="16px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #fff;
                        }
                    </style>
                    <g>
                        <path class="st0" d="M312.069,53.445c-71.26-71.26-187.194-71.26-258.454,0c-71.261,71.26-71.261,187.206,0,258.466
                        c71.26,71.26,187.194,71.26,258.454,0S383.329,124.705,312.069,53.445z M286.694,286.536
                        c-57.351,57.34-150.353,57.34-207.704-0.011s-57.351-150.353,0-207.693c57.351-57.351,150.342-57.351,207.693,0
                        S344.045,229.174,286.694,286.536z" />
                        <path class="st0" d="M101.911,112.531c-29.357,37.725-31.801,89.631-7.321,129.702c1.877,3.087,5.902,4.048,8.978,2.182
                        c3.065-1.888,4.037-5.903,2.16-8.978c-21.666-35.456-19.506-81.538,6.469-114.876c2.226-2.837,1.713-6.938-1.135-9.154
                        C108.227,109.193,104.125,109.695,101.911,112.531z" />
                        <path class="st0" d="M498.544,447.722l-132.637-129.2c-7.255-7.07-18.84-6.982-26.008,0.174l-21.033,21.033
                        c-7.156,7.156-7.234,18.742-0.153,25.986l129.19,132.636c14.346,17.324,35.542,18.35,51.917,1.964
                        C516.216,483.951,515.857,462.068,498.544,447.722z" />
                    </g>
                </svg>
            </button>
        </form>
        {{ $allNotes->appends(['search' => request('search')])->links() }}

        <x-itemlist>
            @if ($allNotes)
                @foreach ($allNotes as $notes)
                    <tr>
                        <td class="py-2">{{ $notes->name }}</td>
                        <td class="py-2">{{ $notes->hour }}</td>
                        <td class="py-2">{{ $notes->data }}</td>
                        <td class="py-2 flex items-center justify-center">
                            <form action="{{ route('note.destroy', $notes->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Tem certeza que deseja deletar esta nota?')">
                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg width="16px" height="16px" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 2H1V4H15V2H12V0H4V2Z" fill="#c1121f" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6H13V16H3V6ZM7 9H9V13H7V9Z"
                                            fill="#c1121f" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

        </x-itemlist>
    </x-list-item>
</x-layout>

