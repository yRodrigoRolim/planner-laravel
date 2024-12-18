@props(['options'])

<div class="w-full grid lg:grid-cols-[8fr_4fr] grid-cols-1 mt-8 mb-96">
    <div class="lg:mr-4 mr-0 overflow-x-auto">
        <table class="w-full text-sm text-left  text-gray-400 w-full">
            {{ $slot }}
        </table>

    </div>

    <x-createitem :options2="$options">
        
    </x-createitem>

</div>
