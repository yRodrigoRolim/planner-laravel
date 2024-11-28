<x-layout>
        <section class="mb-96">
            <div class="flex mt-16 justify-between">
                <div class="flex items-center justify-center">
                    <h1 class="text-3xl md:text-3xl lg:text-4xl  text-white mr-4 leading-none">Seu Planos</h1>
                    <span class="w-9 h-9 rounded-full bg-white font-bold text-xl flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.1208 8.448H8.94484V12.72H5.05684V8.448H0.880844V4.776H5.05684V0.48H8.94484V4.776H13.1208V8.448Z"
                                fill="#010030" />
                        </svg>


                    </span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"
                        fill="#fff">
                        <path
                            d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z" />
                    </svg>
                </div>
            </div>

            <div class="flex my-4 items-center">
                <span class="w-1 h-6 bg-purple-600 mr-2 shadow-lg shadow-purple"></span>
                <p class="text-purple-600 italic">quem anota tem o direito de esquecer</p>
            </div>

            <x-planejamento></x-planejamento>

        </section>
</x-layout>
