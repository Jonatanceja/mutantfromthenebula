@extends('layouts.default')
@section('content')
    <main class="py-10 md:py-16 min-h-screen">
        <div class="space-y-3 max-w-4xl mx-auto mt-24 px-5">
            @if ($image = $page->picture()->toFile())
            <img class="mx-auto md:pb-7" src="{{ $image->url() }}" alt="Imagen de articulo">
            @endif
            <h1 class="font-display text-white text-4xl md:text-6xl leading-none pt-4">{{ $page->title() }}</h1>
            @php
                // Cargar las traducciones de Carbon para español
                Carbon\Carbon::setLocale('es');
            
                // Crear instancia de Carbon
                $dateTimestamp = $page->date()->toTimestamp();
                $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);
            
                // Obtener los nombres traducidos
                $dayOfWeek = ucfirst($carbonDate->translatedFormat('l'));
                $dayOfMonth = $carbonDate->translatedFormat('d');
                $month = ucfirst($carbonDate->translatedFormat('F'));
                $year = $carbonDate->translatedFormat('Y');
                @endphp
                <div class="tag">{{ $dayOfMonth }} de {{ $month }} {{ $year }}</div>

                @if ($user = $page->author()->toUser())
                   <div class="font-tech text-xs text-zinc-400 uppercase tracking-widest">Por: {{ $user->username() }}</div> 
                @endif
        </div>
        @foreach ($page->layout()->toLayouts() as $layout)
        <section class="max-w-4xl mx-auto px-5" id="{{ $layout->id() }}">
            @foreach ($layout->columns() as $column)
                <div class="copy prose prose-invert text-left prose-blockquote:text-xl prose-h2:text-3xl prose-hr:w-32 min-w-full" style="--span:{{ $column->span(6) }}">
                    <div class="blocks">
                        @foreach ($column->blocks() as $block)
                            <div class="min-w-full block block-type-{{ $block->type() }} @if($block->type() == 'video') video-block @endif">
                                {!! $block !!}
                            </div>
                        @endforeach
                    </div>
                    <div><a href="{{ $site->url() }}#blog" aria-label="Regresar al inicio">Volver</a></div>
                </div>
            @endforeach
        </section>
    @endforeach
    </main>
@endsection