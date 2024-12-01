@props(['banner' => ''])

<div class="banner h-48 md:h-72 lg:h-96 relative overflow-hidden">
    <div class="w-full h-full absolute z-10" 
         style="background: linear-gradient(0deg, rgba(1, 0, 48, 1) 0%, rgba(1, 0, 48, 0.375) 48%, rgba(97, 97, 97, 0) 100%)">
    </div>
    <img id="image_banner" src="{{ asset("$banner") }}" alt="banner" class="h-full w-full object-cover">
</div>


<div class="absolute w-12 h-12 top-[11.25rem] md:top-[16.875rem] lg:top-[22.5rem] z-20 bg-purple-600 ml-8 mb-[-32px] rounded-full shadow-lg shadow-purple lg:mx-8 mx-4 cursor-pointer transition hover:bg-white"></div>