<section class="py-16 md:py-28 px-5" id="blog">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-10 md:mb-14">
            <div class="tag mb-5">Blog</div>
            <h2 class="section-title">{{ $page->title() }}</h2>
        </div>
        @foreach ($page->children()->listed() as $article)
            @php
                \Carbon\Carbon::setLocale('es');
                $c = \Carbon\Carbon::createFromTimestamp($article->date()->toTimestamp());
            @endphp
            <div class="reveal grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 items-center border-t border-white/10 py-10">
                <div class="md:col-span-2">
                    @if ($image = $article->picture()->toFile())
                        <img class="w-full grayscale hover:grayscale-0 transition duration-700" src="{{ $image->crop(500, 500)->url() }}" alt="Imagen del articulo">
                    @endif
                </div>
                <div class="md:col-span-3 space-y-4">
                    <div class="tag">{{ $c->translatedFormat('d') }} {{ $c->translatedFormat('M') }} {{ $c->translatedFormat('Y') }}</div>
                    <h2 class="font-display text-3xl md:text-5xl text-white leading-none">{{ $article->title() }}</h2>
                    <div class="copy"><p>@kt($article->short())</p></div>
                    <a href="{{ $article->url() }}" class="btn btn-ghost" aria-label="Leer más del articulo">Leer más <span aria-hidden="true">→</span></a>
                </div>
            </div>
        @endforeach
    </div>
</section>
