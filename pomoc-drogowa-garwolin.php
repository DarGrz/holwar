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
    <link rel="stylesheet" href="/css/tailwind.css?v=1" />
    <?php require_once __DIR__ . '/hero.php'; render_holwar_hero_head(); ?>
    <title>Lokalna Pomoc Drogowa Garwolin | HOLWAR - S17 & Trasa Lubelska</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="https://www.holwar.pl/pomoc-drogowa-garwolin.php" />
    <style>
        @keyframes pulse-cta {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(238, 140, 43, 0.7);
            }

            70% {
                transform: scale(1.03);
                box-shadow: 0 0 0 15px rgba(238, 140, 43, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(238, 140, 43, 0);
            }
        }

        .animate-pulse-cta {
            animation: pulse-cta 2s infinite;
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
        <!-- Hero Section -->
        <?php render_holwar_hero(
            'POMOC DROGOWA GARWOLIN',
            'Potrzebujesz lawety? Zepsuł Ci się samochód w lokalizacji Garwolin? Jesteśmy najbliżej Ciebie! Oferujemy profesjonalne holowanie, wymianę koła, awaryjne odpalanie i dowóz paliwa.'
        ); ?>

        <!-- Stats Bar -->
        <section class="py-12 border-y border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark/50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">schedule</span>
                    <p class="text-3xl font-800">24/7</p>
                    <p class="text-sm text-slate-500 font-medium">Dyspozycyjność</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">speed</span>
                    <p class="text-3xl font-800">20 min</p>
                    <p class="text-sm text-slate-500 font-medium">Średni czas dojazdu</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">verified</span>
                    <p class="text-3xl font-800">100%</p>
                    <p class="text-sm text-slate-500 font-medium">Profesjonalizmu</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">distance</span>
                    <p class="text-3xl font-800">S17</p>
                    <p class="text-sm text-slate-500 font-medium">Obszar Priorytetowy</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-24 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Nasze Usługi w Garwolinie</h3>
                <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">Zapewniamy pełne wsparcie techniczne na
                    drodze, od drobnych awarii po profesjonalne holowanie pojazdów powypadkowych.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">auto_towing</span>
                    </div>
                    <h4 class="text-xl font-800 mb-3">Holowanie S17</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Błyskawiczny transport
                        aut osobowych i dostawczych z ekspresówki S17 Garwolin.</p>
                </div>
                <!-- Service 2 -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                    </div>
                    <h4 class="text-xl font-800 mb-3">Awaryjne Odpalanie</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Rozładowany akumulator?
                        Przyjedziemy i odpalimy Twoje auto w 15-20 minut.</p>
                </div>
                <!-- Service 3 -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">tire_repair</span>
                    </div>
                    <h4 class="text-xl font-800 mb-3">Wymiana Koła</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Mobilny serwis ogumienia
                        na trasie Lubelskiej. Szybka wymiana na zapas pod domem lub na drodze.</p>
                </div>
                <!-- Service 4 -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">minor_crash</span>
                    </div>
                    <h4 class="text-xl font-800 mb-3">Wyciąganie z Rowu</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Profesjonalna wyciągarka
                        do aut, które wypadły z trasy lub utknęły w błocie.</p>
                </div>
            </div>
        </section>

        <!-- SEO/Local Area Section -->
        <section class="py-20 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-4xl font-800 mb-6 italic uppercase">Obsługujemy cały Powiat Garwoliński</h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                            Nasza baza w Garwolinie pozwala nam na błyskawiczną reakcję w całym regionie. Nie
                            ograniczamy
                            się tylko do centrum miasta – jesteśmy wszędzie tam, gdzie potrzebujesz pomocy.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Garwolin
                                Centrum</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Miętne</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Sulbiny</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Wola
                                Rębkowska</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Pilawa</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">Parysów</span>
                            <span
                                class="px-5 py-2 bg-white dark:bg-card-dark border border-slate-200 dark:border-white/10 rounded-full text-sm font-bold shadow-sm">S17
                                MOP Kołbiel</span>
                            <span
                                class="px-5 py-2 bg-primary/10 border border-primary/20 text-primary rounded-full text-sm font-bold shadow-sm">Trasa
                                Lubelska</span>
                        </div>
                    </div>
                    <div class="relative group">
                        <div
                            class="absolute -inset-2 bg-gradient-to-r from-primary/50 to-orange-600/50 rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000">
                        </div>
                        <div
                            class="relative bg-slate-800 rounded-[2rem] overflow-hidden aspect-[16/10] shadow-2xl border border-white/10">
                            <img class="w-full h-full object-cover grayscale opacity-50" src="img/map_area.jpg"
                                alt="Mapa Garwolin" loading="lazy" />
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-primary p-4 rounded-full animate-pulse shadow-lg shadow-primary/50">
                                    <span
                                        class="material-symbols-outlined text-background-dark text-3xl">location_on</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-primary">
            <div class="max-w-4xl mx-auto px-6 text-center text-background-dark">
                <h3 class="text-4xl md:text-5xl font-800 mb-8 leading-tight italic uppercase">Potrzebujesz pomocy
                    natychmiast?</h3>
                <p class="text-background-dark/80 text-xl font-bold mb-12 italic uppercase">Nasi kierowcy czekają w
                    pełnej gotowości. Zadzwoń teraz, a pomoc wyślemy w 2 minuty!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a class="animate-pulse-cta bg-background-dark text-primary px-10 py-5 rounded-xl font-800 text-2xl flex items-center justify-center gap-3 hover:scale-105 transition-transform shadow-2xl"
                        href="tel:+48793960058">
                        <span class="material-symbols-outlined text-3xl">call</span>
                        793 960 058
                    </a>
                </div>
                <p class="mt-8 text-background-dark/60 text-sm font-bold uppercase tracking-widest">Pomoc drogowa
                    Garwolin • S17 • Trasa Lubelska • 24/7</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'cookie-consent.php'; ?>
    <?php include 'nav-mobile.php'; ?>
</body>

</html>