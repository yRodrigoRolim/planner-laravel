@props(['infos' => '','nomeanotacao' => ""])


@php

    $infomacoescard = explode(',', $infos);

@endphp

@if ($nomeanotacao != '')
<div class="w-full">
    <div class="relative h-46">
        <div class="absolute flex items-center justify-center w-full h-full z-10">
            <p class="text-2xl font-bold text-white">{{$nomeanotacao}}</p>
        </div>
        <img src="{{ asset('img/banner.jpg') }}" alt="banner" class="h-full w-full object-cover rounded">
    </div>

    @if ($infos != '')
        <div class="text-white mt-4">
            <ul>
                @foreach ($infomacoescard as $cards)
                    <x-infocard>{{ $cards }}</x-itemcard>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endif