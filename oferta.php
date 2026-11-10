<?php include 'config.php'; ?>
<!DOCTYPE html>
<html class="dark" lang="pl">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WRPSNQ38');</script>
    <!-- End Google Tag Manager -->

    <?php if (!empty($gtag_enabled)): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16538232843"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-16538232843/mJSlCPCBhtQcEIvQhc49', {
            'phone_conversion_number': '793960058'
        });
    </script>
    <?php endif; ?>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <?php require_once __DIR__ . '/hero.php'; render_holwar_hero_head(); ?>
    <title>Oferta | HOLWAR - Pomoc Drogowa Warszawa</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="https://www.holwar.pl/oferta.php" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ee8c2b",
                        "background-light": "#f8f7f6",
                        "background-dark": "#121212",
                        "card-dark": "#1e1e1e",
                        "accent-blue": "#3b82f6",
                        "charcoal": "#262626"
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            .fill-1 { font-variation-settings: 'FILL' 1; }
        }
    </style>
</head>

<body
    class="holwar-page bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRPSNQ38" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'preloader.php'; ?>
    <header
        class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-white/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">
                <a href="index.php" class="flex items-center">
                    <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain" width="504" height="152" loading="eager">
                </a>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#services">Usługi</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#how-it-works">Jak to
                        działa</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#reviews">Opinie</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#about">O
                        nas</a>
                </nav>
                <div class="flex items-center gap-2 sm:gap-4">
                    <a href="tel:+48793960058"
                        class="bg-primary text-background-dark px-3 sm:px-6 py-2.5 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-1.5 sm:gap-2 hover:scale-105 transition-transform active:scale-95 shadow-lg shadow-primary/20 flex-shrink-0">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>793 960 058</span>
                    </a>
                    <button id="mobile-menu-open" type="button" aria-label="Otwórz menu"
                        class="md:hidden flex items-center justify-center text-slate-900 dark:text-white shrink-0">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php render_holwar_hero(
            'PEŁNY ZAKRES USŁUG',
            'Zapewniamy kompleksową pomoc drogową dla pojazdów osobowych, dostawczych oraz ciężarowych. Jesteśmy tam, gdzie nas potrzebujesz, o każdej porze dnia i nocy.'
        ); ?>
        <section class="py-8 bg-primary">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-center gap-4 text-center">
                    <span class="text-xl lg:text-2xl font-800 text-background-dark">Nie widzisz usługi której
                        potrzebujesz?</span>
                    <a class="inline-flex items-center gap-3 bg-background-dark text-white px-8 py-3 rounded-full font-800 text-xl hover:scale-105 transition-transform shadow-xl"
                        href="tel:793960058">
                        <span class="material-symbols-outlined">call</span>
                        Zadzwoń: 793 960 058
                    </a>
                </div>
            </div>
        </section>
        <section class="py-24 bg-white dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">auto_towing</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Holowanie</h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">Profesjonalny transport pojazdów w każdych
                            warunkach:</p>
                        <ul class="space-y-2 text-sm font-semibold">
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined text-primary text-lg">check_circle</span> Samochody
                                osobowe</li>
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined text-primary text-lg">check_circle</span> Samochody
                                dostawcze</li>
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined text-primary text-lg">check_circle</span> Ciężarowe
                                do 20t</li>
                        </ul>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-accent-blue transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-accent-blue/10 text-accent-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">verified_user</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Z OC Sprawcy</h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">Darmowe holowanie i auto zastępcze po kolizji
                            nie z Twojej winy. Rozliczamy się bezpośrednio z ubezpieczycielem.</p>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-accent-blue/10 text-accent-blue text-xs font-bold uppercase">0
                            PLN kosztów własnych</span>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">precision_manufacturing</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Transport Specjalistyczny</h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">Przewozimy nietypowe ładunki i pojazdy:</p>
                        <ul class="grid grid-cols-2 gap-2 text-xs font-bold uppercase text-slate-500">
                            <li class="bg-white dark:bg-white/5 p-2 rounded">Quady</li>
                            <li class="bg-white dark:bg-white/5 p-2 rounded">Motocykle</li>
                            <li class="bg-white dark:bg-white/5 p-2 rounded">Maszyny bud.</li>
                            <li class="bg-white dark:bg-white/5 p-2 rounded">Konstrukcje</li>
                        </ul>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">battery_charging_full</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Uruchamianie Akumulatora</h3>
                        <p class="text-slate-600 dark:text-slate-400">Problemy z odpalaniem rano? Przyjedziemy z
                            profesjonalnym boosterem i uruchomimy Twoje auto w kilka minut.</p>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">local_gas_station</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Dowóz Paliwa</h3>
                        <p class="text-slate-600 dark:text-slate-400">Pusta bak w najmniej odpowiednim momencie?
                            Dowieziemy benzynę lub olej napędowy pod wskazany adres.</p>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">tire_repair</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Wymiana Koła</h3>
                        <p class="text-slate-600 dark:text-slate-400">Wymiana koła na trasie, odkręcanie zapieczonych
                            śrub lub mobilny serwis opon w razie potrzeby.</p>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">minor_crash</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4">Wyciąganie z Rowu</h3>
                        <p class="text-slate-600 dark:text-slate-400">Specjalistyczne wyciąganie aut z trudnodostępnych
                            miejsc: rowy, błoto, śnieg oraz ciasne garaże podziemne.</p>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group lg:col-span-2">
                        <div class="flex flex-col md:flex-row gap-8 items-center">
                            <div
                                class="w-16 h-16 flex-shrink-0 rounded-2xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-4xl">car_rental</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-800 mb-2">Auta Zastępcze i Wynajem</h3>
                                <p class="text-slate-600 dark:text-slate-400">Zapewniamy komfortowe auta zastępcze na
                                    czas naprawy oraz wynajem profesjonalnych lawet dla osób prywatnych i firm.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Dlaczego my?</h2>
                    <div class="w-24 h-1.5 bg-primary mx-auto rounded-full"></div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl shadow-xl shadow-slate-200/50 dark:shadow-none text-center">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">schedule</span>
                        <h4 class="text-xl font-bold mb-2">Pomoc 24/7</h4>
                        <p class="text-sm text-slate-500">Działamy w święta, niedziele i w nocy. Zawsze pod telefonem.
                        </p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl shadow-xl shadow-slate-200/50 dark:shadow-none text-center">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">near_me</span>
                        <h4 class="text-xl font-bold mb-2">Szybki dojazd</h4>
                        <p class="text-sm text-slate-500">Średni czas dojazdu w Warszawie to tylko 15 minut.</p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl shadow-xl shadow-slate-200/50 dark:shadow-none text-center">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">construction</span>
                        <h4 class="text-xl font-bold mb-2">Profesjonalny sprzęt</h4>
                        <p class="text-sm text-slate-500">Nowoczesne lawety i narzędzia diagnostyczne.</p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl shadow-xl shadow-slate-200/50 dark:shadow-none text-center">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">payments</span>
                        <h4 class="text-xl font-bold mb-2">Atrakcyjne ceny</h4>
                        <p class="text-sm text-slate-500">Jasne zasady rozliczeń bez ukrytych kosztów.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-800 mb-8 italic uppercase leading-tight">Obsługiwane <span
                                class="text-primary">lokalizacje</span></h2>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">Nasz zespół stacjonuje w
                            strategicznych punktach Warszawy, co pozwala nam na błyskawiczną reakcję również w
                            okolicznych miejscowościach.</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10 text-sm font-bold">
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Warszawa</div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Otwock</div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Garwolin</div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Mińsk Maz.
                            </div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Kołbiel</div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Józefów</div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Góra Kalwaria
                            </div>
                            <div><span class="w-2 h-2 inline-block rounded-full bg-primary mr-2"></span> Ryki</div>
                        </div>
                        <div class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border-l-4 border-primary">
                            <h5 class="font-bold text-primary uppercase text-xs tracking-widest mb-3">Zasięg pomocy:
                            </h5>
                            <p class="text-slate-600 dark:text-slate-300 font-medium">Obsługujemy całą Warszawę oraz
                                miejscowości wzdłuż tras wylotowych (S17, DK50, DK17).</p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary/20 rounded-[3rem] rotate-3 blur-2xl"></div>
                        <div
                            class="relative bg-slate-200 dark:bg-white/5 rounded-[3rem] h-[500px] w-full overflow-hidden border border-slate-300 dark:border-white/10 group">
                            <div class="absolute inset-0 bg-center bg-cover opacity-80 grayscale group-hover:grayscale-0 transition-all duration-700"
                                style='background-image: url("img/map_area.jpg");'></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
                            <div
                                class="absolute bottom-8 left-8 right-8 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                                <div class="flex items-center gap-4">
                                    <div class="bg-primary p-3 rounded-full animate-pulse">
                                        <span class="material-symbols-outlined text-background-dark">location_on</span>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold">Obszar działania</p>
                                        <p class="text-white/70 text-sm">Cała aglomeracja warszawska</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-background-dark text-white pt-20 pb-10 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <img src="img/holwar-logo-wide.png" alt="HOLWAR Logo" class="h-8 w-auto object-contain" loading="lazy">
                    </div>
                    <?php include 'footer.php'; ?>
                    <?php include 'cookie-consent.php'; ?>
                    <?php include 'nav-mobile.php'; ?>
</body>

</html>