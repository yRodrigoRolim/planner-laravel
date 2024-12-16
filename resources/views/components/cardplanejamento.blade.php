@props(['infos' => '','nomeanotacao' => "",'img_banner' => "img/banner.jpg", 'id_card' => 1])


@php

    $infomacoescard = explode(',', $infos);

@endphp

@if ($nomeanotacao != '')
<div class="mx-auto my-0 w-10/12 md:w-10/12 lg:w-full card cursor-grab select-none" data-id="{{$id_card}}">
    <div class="relative h-48 gallery-image-cards">
        <div class="absolute flex items-center justify-center w-full h-full z-10">
            <p class="text-2xl font-bold text-white fontpersonalizada">{{$nomeanotacao}}</p>
        </div>
        <img src="{{ asset("img/events/$img_banner") }}" alt="banner" class="h-full w-full object-cover rounded cards_planejamento_imgs">
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