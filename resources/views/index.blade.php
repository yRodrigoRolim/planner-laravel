<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu planner</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkblue: '#010030',
                    },
                    boxShadow: {
                        'purple': '0 0px 22px #8E5AC2',
                    }
                }
            }
        }
    </script>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        onload="this.rel='stylesheet'">

</head>

<body class="bg-darkblue overflow-y-visible">
    <div class="banner h-96 relative ">
        <img src="{{ asset('img/banner.jpg') }}" alt="banner" class="h-full w-full object-cover">
        <div
            class="absolute w-12 h-12 bottom-0 z-[2] bg-purple-600 ml-8 mb-[-32px] rounded-full shadow-lg shadow-purple">
        </div>
    </div>

    <main class="mx-8">
        <section class="mb-96">
            <div class="flex mt-16 justify-between">
                <div class="flex items-center justify-center">
                    <h1 class="lg:text-4xl md:text-3xl sm:text-3xl text-white mr-4 leading-none">Seu Planos</h1>
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

            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8">

                <div class="w-full">
                    <div class="relative h-46">
                        <div class="absolute flex items-center justify-center w-full h-full z-10">
                            <p class="text-2xl font-bold text-white">CAF</p>
                        </div>
                        <img src="{{ asset('img/banner.jpg') }}" alt="banner"
                            class="h-full w-full object-cover rounded">
                    </div>

                    <div class="text-white mt-4">
                        <ul>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Diáriamente</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Divertido</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">27/11/24</p>


                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative h-46">
                        <div class="absolute flex items-center justify-center w-full h-full z-10">
                            <p class="text-2xl font-bold text-white">CAF</p>
                        </div>
                        <img src="{{ asset('img/banner.jpg') }}" alt="banner"
                            class="h-full w-full object-cover rounded">
                    </div>

                    <div class="text-white mt-4">
                        <ul>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Diáriamente</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Divertido</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">27/11/24</p>


                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative h-46">
                        <div class="absolute flex items-center justify-center w-full h-full z-10">
                            <p class="text-2xl font-bold text-white">CAF</p>
                        </div>
                        <img src="{{ asset('img/banner.jpg') }}" alt="banner"
                            class="h-full w-full object-cover rounded">
                    </div>

                    <div class="text-white mt-4">
                        <ul>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Diáriamente</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Divertido</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">27/11/24</p>


                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative h-46">
                        <div class="absolute flex items-center justify-center w-full h-full z-10">
                            <p class="text-2xl font-bold text-white">CAF</p>
                        </div>
                        <img src="{{ asset('img/banner.jpg') }}" alt="banner"
                            class="h-full w-full object-cover rounded">
                    </div>

                    <div class="text-white mt-4">
                        <ul>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Diáriamente</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">Divertido</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-white rounded"></span>
                                <p class="ml-2 italic">27/11/24</p>


                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </section>

    </main>
</body>

</html>
