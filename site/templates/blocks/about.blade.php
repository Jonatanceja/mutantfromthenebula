<section class="relative py-16 md:py-28" id="about">
    <div class="max-w-7xl mx-auto px-5 md:flex items-stretch">
        <div class="w-full md:w-1/2 reveal">
            @if ($image = $page->picture()->toFile())
            <div class="relative h-full">
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img class="w-full h-full object-cover grayscale contrast-125 transition duration-700 hover:grayscale-0" src="{{ $image->url() }}" alt="{{ $site->title() }}" style="clip-path: polygon(0 0, 100% 0, 100% calc(100% - 28px), calc(100% - 28px) 100%, 0 100%)">
                </picture>
                <span class="absolute -top-2 -left-2 w-10 h-10 border-t-2 border-l-2 border-accent"></span>
            </div>
            @endif
        </div>
        <div class="w-full md:w-1/2 md:pl-16 pt-10 md:pt-0 flex flex-col justify-center reveal">
            <div class="tag mb-5">01 · Banda</div>
            <div class="copy prose prose-invert max-w-none">
                @kt($page->bio())
            </div>
        </div>
    </div>
</section>
