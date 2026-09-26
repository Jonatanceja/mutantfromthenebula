<section class="py-16 md:py-28 px-5" id="dates">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-10 md:mb-14">
            <div class="tag mb-5">03 · Tour</div>
            <h2 class="section-title">Próximos eventos</h2>
        </div>
        @php
            // Solo eventos de hoy en adelante, del más próximo al más lejano
            $today = strtotime('today');
            $upcoming = $page->dates()->toStructure()
                ->filter(fn ($d) => $d->date()->toTimestamp() >= $today)
                ->sortBy('date', 'asc');
        @endphp
        @if ($upcoming->isNotEmpty())
            <div class="border-t border-white/10">
            @foreach ($upcoming as $date)
                @php
                    \Carbon\Carbon::setLocale('es');
                    $c = \Carbon\Carbon::createFromTimestamp($date->date()->toTimestamp());
                @endphp
                <div class="group reveal grid grid-cols-[auto_1fr] md:grid-cols-[auto_1fr_auto] gap-x-6 md:gap-x-10 gap-y-4 items-center py-6 md:py-8 border-b border-white/10 transition duration-300 hover:bg-white/[.03] md:px-4">
                    <div class="text-center leading-none min-w-[4.5rem]">
                        <div class="font-display text-5xl md:text-7xl text-white group-hover:text-accent transition">{{ $c->translatedFormat('d') }}</div>
                        <div class="font-tech text-xs uppercase tracking-[.3em] text-accent mt-1">{{ $c->translatedFormat('M') }} {{ $c->translatedFormat('Y') }}</div>
                    </div>
                    <div>
                        <div class="font-tech text-[11px] uppercase tracking-[.25em] text-zinc-500">{{ ucfirst($c->translatedFormat('l')) }}</div>
                        <div class="font-display text-2xl md:text-3xl uppercase text-white tracking-wide mt-1">{{ $date->place() }}</div>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <a href="{{ $date->tickets() }}" class="btn" target="_blank" rel="noopener" aria-label="Conseguir Boletos">Conseguir boletos <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            @endforeach
            </div>
        @else
            <div class="reveal border border-dashed border-white/20 p-10 text-center">
                <div class="font-display text-3xl md:text-4xl text-white uppercase">Fechas por anunciar</div>
                <div class="tag mt-3 justify-center">Sigue nuestras redes</div>
            </div>
        @endif
    </div>
</section>
