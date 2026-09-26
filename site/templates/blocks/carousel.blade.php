<section class="py-16 md:py-28 overflow-hidden" id="gallery">
    <div class="max-w-5xl mx-auto px-5">
        <div class="reveal flex items-end justify-between gap-6 mb-10 md:mb-14">
            <div>
                <div class="tag mb-5">06 · Archivo</div>
                <h2 class="section-title">Noches de <span class="text-accent">caos</span></h2>
                <p class="font-tech text-xs uppercase tracking-[.2em] text-zinc-500 mt-4">Carteles de los shows que ya destruimos</p>
            </div>
            <div class="hidden md:flex gap-2 shrink-0">
                <button class="flyers-prev btn btn-ghost !px-4 disabled:opacity-30 disabled:pointer-events-none" aria-label="Anterior"><i class="lni lni-arrow-left"></i></button>
                <button class="flyers-next btn btn-ghost !px-4 disabled:opacity-30 disabled:pointer-events-none" aria-label="Siguiente"><i class="lni lni-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <div>
        <div class="swiper mySwiper !pt-10 !pb-16">
            <div class="swiper-wrapper">
                @foreach ($page->gallery()->toFiles() as $item)
                    <div class="swiper-slide !w-40 md:!w-60">
                        <a href="{{ $item->url() }}" data-fancybox="gallery" aria-label="Ver flyer">
                            <img src="{{ $item->resize(800)->url() }}" alt="{{ $site->title() }}" class="w-full h-auto" />
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
