<section class="grid grid-cols-1 md:grid-cols-2 gap-px bg-white/10 border-y border-white/10" id="video">
    @foreach ($page->reels()->toStructure() as $item)
        @if ($image = $item->cover()->toFile())
        <a href="{{ $item->video() }}" data-fancybox class="group relative block overflow-hidden bg-[#08080a]" aria-label="Ver video">
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img class="w-full transition duration-700 group-hover:scale-105 group-hover:brightness-75" src="{{ $image->url() }}" alt="{{ $site->title() }}">
            </picture>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/40"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="flex items-center justify-center w-16 h-16 md:w-24 md:h-24 border border-accent text-accent text-2xl md:text-4xl bg-black/40 backdrop-blur-sm transition duration-300 group-hover:bg-accent group-hover:text-black" style="clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px))"><i class="lni lni-play"></i></span>
            </div>
            <h3 class="absolute bottom-4 left-4 right-4 font-display text-xl md:text-3xl text-white">{{ $item->title() }}</h3>
        </a>
        @endif
    @endforeach
</section>
