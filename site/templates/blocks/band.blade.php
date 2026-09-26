@php $n = 0; @endphp
<section class="grid grid-cols-2 md:grid-cols-3 gap-px bg-white/10 border-y border-white/10">
    @foreach ($page->children()->listed() as $member)
        @if ($image = $member->picture()->toFile())
        <div class="group relative overflow-hidden bg-[#08080a]">
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400, 'height' => 600,])->url() }}" type="image/webp">
                <img class="w-full grayscale contrast-125 transition duration-700 group-hover:grayscale-0 group-hover:scale-105" src="{{ $image->crop(400, 600, 'top')->url() }}" alt="{{ $member->title() }}">
            </picture>
            @if ($member->instrument()->isNotEmpty())
            @php $n++; @endphp
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/10 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 p-4 md:p-6">
                <div class="font-tech text-[10px] text-accent tracking-[.3em]">0{{ $n }}</div>
                <div class="font-display text-2xl md:text-4xl uppercase text-white leading-none mt-1">{{ $member->title() }}</div>
                <div class="font-tech text-[10px] md:text-xs uppercase tracking-[.25em] text-zinc-400 mt-2">{{ $member->instrument() }}</div>
                <span class="block h-px w-8 bg-accent mt-3 transition-all duration-500 group-hover:w-full"></span>
            </div>
            @endif
        </div>
        @endif
    @endforeach
</section>
