@if ($image = $page->picture()->toFile())
    <section class="relative bg-cover bg-fixed bg-top md:min-h-screen flex items-center px-5 py-24" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }}), url({{ $image->url() }})" id="book">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="panel reveal relative w-full max-w-4xl mx-auto p-6 md:p-12 grid grid-cols-1 md:grid-cols-5 gap-8 items-center">
            <div class="md:col-span-3 space-y-4">
                <div class="tag">04 · Book</div>
                <h2 class="section-title">{{ $page->heading() }}</h2>
                <a class="inline-block font-tech text-sm tracking-widest text-accent hover:underline underline-offset-4 break-all" href="mailto:{{ $site->email() }}">{{ $site->email() }}</a>
            </div>
            <div class="md:col-span-2 md:text-right">
                <a href="{{ $page->button() }}" class="btn" aria-label="Contacto para presentaciones">Contacto <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>
@endif
