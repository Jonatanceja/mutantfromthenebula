<section class="py-16 md:py-28 px-5" id="merch">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-10 md:mb-14">
            <div class="tag mb-5">05 · Merch</div>
            <h2 class="section-title">{{ $page->title() }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            @foreach ($page->children()->listed()->index() as $product)
                <a href="{{ $product->url() }}" class="group reveal block border border-white/10 bg-[#101014] transition duration-300 hover:border-accent" aria-label="Ver producto">
                    @if ($image = $product->picture()->toFile())
                    <div class="overflow-hidden">
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                            <img class="w-full transition duration-700 group-hover:scale-105" src="{{ $image->url() }}" alt="{{ $product->title() }}">
                        </picture>
                    </div>
                    @endif
                    <div class="flex items-baseline justify-between gap-4 p-4">
                        <div class="font-display text-2xl uppercase text-white tracking-wide">{{ $product->title() }}</div>
                        <div class="font-tech text-sm text-accent whitespace-nowrap">$ {{ $product->price() }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
