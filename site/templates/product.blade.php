@extends('layouts.default')
@section('content')
    <main class="py-10 md:py-16 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-6xl mx-auto px-5 mt-8 md:mt-16">
            <div>
                @if ($image = $page->picture()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img src="{{ $image->url() }}" alt="Imagen de producto">
                </picture>
                @endif
            </div>
            <div class="copy prose prose-invert space-y-5">
                <div class="tag">Merch</div>
                <h1>{{ $page->title() }}</h1>
                <div class="font-tech text-2xl text-accent">$ {{ $page->price() }}</div>
                <p class="pt-3 border-t border-t-white/10">{{ $page->description() }}</p>
                <div class="flex items-center">
                    Tallas: 
                    <ul class="list-none flex space-x-2 items-center">
                        @foreach ($page->tallas()->split() as $talla)
                            <li class="font-tech text-xs border border-white/20 px-3 py-1">{{ $talla }}</li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ $site->whatsapp() }}">
                    <span class="btn">Comprar</span>
                </a>
                <div class="text-sm"><a href="{{ $site->url() }}" aria-label="Regresar al inicio"><span><i class="lni lni-arrow-left"></i></span> Volver</a></div>
            </div>
        </div>
    </main>
@endsection