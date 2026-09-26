@if ($image = $page->picture()->tofile())
<section class="relative min-h-[100svh] bg-cover bg-center bg-fixed hidden md:flex items-end pb-16" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})">
    <div class="absolute inset-0 bg-gradient-to-t from-[#08080a] via-[#08080a]/30 to-black/40"></div>
    <div class="relative w-full max-w-6xl mx-auto px-5">
        <div class="tag mb-4">Mutant From The Nebula</div>
        @include('partials.hero-panel')
    </div>
</section>
@endif

<!-- Movil -->
@if ($image = $page->pictureMobile()->tofile())
<section class="relative min-h-[100svh] bg-cover bg-center flex md:hidden items-end pb-8" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})">
    <div class="absolute inset-0 bg-gradient-to-t from-[#08080a] via-[#08080a]/20 to-black/30"></div>
    <div class="relative w-full px-5">
        <div class="tag mb-3">Mutant From The Nebula</div>
        @include('partials.hero-panel')
    </div>
</section>
@endif
