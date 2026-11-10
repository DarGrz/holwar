<!-- Mobile Sidebar Menu -->
<div id="mobile-sidebar"
    class="fixed inset-0 z-[200] transform -translate-x-full transition-transform duration-300 md:hidden">
    <!-- Overlay -->
    <div id="mobile-menu-overlay"
        class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 pointer-events-none">
    </div>

    <!-- Sidebar Content -->
    <div class="relative w-[80%] max-w-xs h-full bg-card-dark border-r border-white/10 p-8 flex flex-col shadow-2xl">
        <div class="flex items-center justify-between mb-12">
            <div class="flex items-center">
                <img src="img/holwar-logo-wide.png" alt="HOLWAR Logo" class="h-8 w-auto object-contain" loading="lazy">
            </div>
            <button id="mobile-menu-close" class="text-slate-400 hover:text-white p-2 transition-colors">
                <span class="material-symbols-outlined text-3xl">close</span>
            </button>
        </div>

        <nav class="flex flex-col gap-6">
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="index.php#services">
                <span class="material-symbols-outlined text-primary">engineering</span> Usługi
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="index.php#how-it-works">
                <span class="material-symbols-outlined text-primary">help</span> Jak to działa
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="index.php#faq">
                <span class="material-symbols-outlined text-primary">quiz</span> FAQ
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="index.php#reviews">
                <span class="material-symbols-outlined text-primary">star</span> Opinie
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="index.php#about">
                <span class="material-symbols-outlined text-primary">info</span> O nas
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="autokasacja.php">
                <span class="material-symbols-outlined text-primary">car_crash</span> Autokasacja
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="pomoc-drogowa-tir.php">
                <span class="material-symbols-outlined text-primary">build</span> Serwis Mobilny TIR
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="pomoc-drogowa-bus.php">
                <span class="material-symbols-outlined text-primary">local_shipping</span> Pomoc Drogowa BUS
            </a>
            <a class="mobile-nav-link text-lg font-bold text-slate-300 hover:text-primary transition-colors flex items-center gap-4 py-2"
                href="wulkanizacja-mobilna.php">
                <span class="material-symbols-outlined text-primary">tire_repair</span> Wulkanizacja TIR &amp; BUS
            </a>
            <a class="mobile-nav-link text-lg font-bold text-primary flex items-center gap-4 py-2 mt-4"
                href="oferta.php">
                <span class="material-symbols-outlined">description</span> Pełna Oferta
            </a>
        </nav>

        <div class="mt-auto pt-8 border-t border-white/5">
            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Potrzebujesz pomocy?</p>
            <a href="tel:+48793960058"
                class="flex items-center gap-4 text-white hover:text-primary transition-colors mb-4">
                <div class="bg-primary/10 p-2 rounded-lg text-primary">
                    <span class="material-symbols-outlined">call</span>
                </div>
                <span class="font-800 text-lg">793 960 058</span>
            </a>
        </div>
    </div>
</div>

<script>
    const sidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('mobile-menu-overlay');
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');
    const navLinks = document.querySelectorAll('.mobile-nav-link');

    function toggleMenu(show) {
        if (show) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = '';
        }
    }

    if (openBtn) openBtn.addEventListener('click', () => toggleMenu(true));
    closeBtn.addEventListener('click', () => toggleMenu(false));
    overlay.addEventListener('click', () => toggleMenu(false));

    navLinks.forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });
</script>