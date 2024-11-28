
<x-head></x-head>

<body class="bg-darkblue overflow-y-visible">

    <x-banner>
        <img src="{{ asset('img/banner.jpg') }}" alt="banner" class="h-full w-full object-cover">
    </x-banner>

    <main class="lg:mx-8 mx-4">
        {{$slot}}
    </main>

</body>
</html>