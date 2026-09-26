@php
    $links = [
        ['#about', 'Banda', 'Ir a la sección de la banda'],
        ['#music', 'Música', 'Ir a la sección de Música'],
        ['#dates', 'Tour', 'Ver más fechas'],
        ['#book', 'Book', 'Agendar a la banda'],
    ];
@endphp
<div x-data="{ scrolled: false, open: false }" @click.away="open = false" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 10) })">
    <header class="fixed inset-x-0 top-0 z-50 border-b transition-colors duration-300" :class="(scrolled || open) ? 'border-white/10' : 'border-transparent'">
        <div class="absolute inset-0 -z-10 bg-[#08080a]/85 backdrop-blur-md transition-opacity duration-300" :class="(scrolled || open) ? 'opacity-100' : 'opacity-0'"></div>
        <nav class="max-w-7xl mx-auto flex items-center justify-between md:justify-center px-5 h-16 md:h-20">
            <ul class="hidden md:flex items-center gap-12 font-tech text-xs uppercase tracking-[.3em]">
                @foreach (array_slice($links, 0, 2) as [$href, $label, $aria])
                    <li><a href="{{ $site->url() }}{{ $href }}" class="group relative text-zinc-300 hover:text-white transition" aria-label="{{ $aria }}">{{ $label }}<span class="absolute -bottom-2 left-0 h-px w-0 bg-accent transition-all duration-300 group-hover:w-full"></span></a></li>
                @endforeach
                <li><a href="{{ $site->url() }}" aria-label="Ir a página de inicio"><img class="w-20 transition hover:drop-shadow-[0_0_12px_rgba(198,255,46,.5)]" src="/images/logo.png" alt="Mutant From The Nebula"></a></li>
                @foreach (array_slice($links, 2) as [$href, $label, $aria])
                    <li><a href="{{ $site->url() }}{{ $href }}" class="group relative text-zinc-300 hover:text-white transition" aria-label="{{ $aria }}">{{ $label }}<span class="absolute -bottom-2 left-0 h-px w-0 bg-accent transition-all duration-300 group-hover:w-full"></span></a></li>
                @endforeach
            </ul>

            <!-- Mobile -->
            <a class="md:hidden" href="{{ $site->url() }}" aria-label="Ir a página de inicio">
                <img class="w-14" src="/images/logo.png" alt="Mutant From The Nebula">
            </a>
            <button class="md:hidden text-accent focus:outline-none" aria-label="Menú" @click="open = !open">
                <svg x-show="!open" class="h-9 w-9" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm6 5h10v2H10v-2zm-6 5h16v2H4v-2z" fill="currentColor"/></svg>
                <svg x-show="open" x-cloak class="h-9 w-9" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 5.636a1 1 0 0 0-1.414 0L12 10.586 7.05 5.636a1 1 0 1 0-1.414 1.414L10.586 12l-4.95 4.95a1 1 0 1 0 1.414 1.414L12 13.414l4.95 4.95a1 1 0 0 0 1.414-1.414L13.414 12l4.95-4.95a1 1 0 0 0 0-1.414z" fill="currentColor"/></svg>
            </button>
        </nav>
        <div x-show="open" x-cloak x-transition class="md:hidden border-t border-white/10">
            <ul class="px-5 py-6 font-display text-3xl uppercase text-white space-y-1">
                @foreach ($links as $i => [$href, $label, $aria])
                    <li><a href="{{ $site->url() }}{{ $href }}" @click="open = false" class="flex items-baseline gap-3 py-2 hover:text-accent transition" aria-label="{{ $aria }}"><span class="font-tech text-xs text-accent">0{{ $i + 1 }}</span>{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>
    </header>
</div>
