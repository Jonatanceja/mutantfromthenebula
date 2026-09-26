<section class="py-16 md:py-28 px-5" id="music">
    <div class="max-w-6xl mx-auto space-y-10 md:space-y-16">
        <div class="reveal">
            <div class="tag mb-5">02 · Música</div>
            <div class="copy prose prose-invert max-w-3xl">
                @kt($page->intro())
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-14 gap-10 items-start reveal">
            <div class="copy prose prose-invert">
                @kt($page->music())
            </div>
            <div class="p-2 border border-white/10 bg-[#101014] [&_iframe]:w-full" style="clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%)">
                {!! $page->embed()->value() !!}
            </div>
        </div>
    </div>
</section>
