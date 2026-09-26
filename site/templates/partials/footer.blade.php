<footer class="mt-10">
    <div class="ruler"></div>
    <div class="max-w-6xl mx-auto px-5 py-12 md:py-16 flex flex-col items-center gap-8 text-center">
        <img class="w-24 opacity-90" src="/images/logo.png" alt="Mutant From The Nebula">
        <div class="flex gap-8 text-2xl text-zinc-400 md:hidden">
            <a href="{{ $site->instagram() }}" class="hover:text-accent" target="_blank" rel="noopener" aria-label="Instagram"><i class="lni lni-instagram-original"></i></a>
            <a href="{{ $site->facebook() }}" class="hover:text-accent" target="_blank" rel="noopener" aria-label="Facebook"><i class="lni lni-facebook-original"></i></a>
            <a href="{{ $site->youtube() }}" class="hover:text-accent" target="_blank" rel="noopener" aria-label="YouTube"><i class="lni lni-youtube"></i></a>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="max-w-6xl mx-auto px-5 py-5 flex flex-col md:flex-row items-center justify-center md:justify-between gap-3 font-tech text-[11px] uppercase tracking-[.25em] text-zinc-500">
            <div>© {{ date('Y') }} Mutant From The Nebula · Todos los derechos reservados</div>
            <a href="https://webxpress.website" target="_blank" rel="noopener" class="flex items-center gap-3 transition hover:text-white" aria-label="Diseño y desarrollo por WebXpress">
                <span>Diseño y desarrollo por WebXpress</span>
                <img class="h-6 w-auto" src="/images/webxpress.svg" alt="WebXpress">
            </a>
        </div>
    </div>
</footer>
