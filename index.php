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
            function gtag() { dataLayer.push(arguments); }
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
    <title>HOLWAR | Pomoc Drogowa Warszawa</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="canonical" href="https://www.holwar.pl/" />
</head>

<body
    class="holwar-page bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRPSNQ38" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <?php include 'preloader.php'; ?> -->
    <header
        class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-white/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">
                <a href="index.php" class="flex items-center">
                    <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain"
                        width="504" height="152" loading="eager">
                </a>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#services" data-i18n="nav.services">Usługi</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#how-it-works" data-i18n="nav.how_it_works">Jak to
                        działa</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#faq" data-i18n="nav.faq">FAQ</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#reviews" data-i18n="nav.reviews">Opinie</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#about" data-i18n="nav.about">O nas</a>
                </nav>
                <div class="flex items-center gap-2 sm:gap-4">
                    <!-- Language Switcher -->
                    <div class="lang-switch inline-flex items-center p-0.5 rounded-xl bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-bold" role="group" aria-label="Wybór języka / Language selection">
                        <button type="button" onclick="setLanguage('pl')" data-lang-btn="pl" class="px-2.5 py-1 rounded-lg text-xs font-bold transition-all bg-primary text-background-dark shadow-sm">PL</button>
                        <button type="button" onclick="setLanguage('en')" data-lang-btn="en" class="px-2.5 py-1 rounded-lg text-xs font-semibold transition-all text-slate-400 hover:text-white">EN</button>
                    </div>
                    <a href="tel:+48793960058"
                        class="bg-primary text-background-dark px-3 sm:px-6 py-2.5 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-1.5 sm:gap-2 hover:scale-105 transition-transform active:scale-95 shadow-lg shadow-primary/20 flex-shrink-0">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>793 960 058</span>
                    </a>
                    <button id="mobile-menu-open" type="button" aria-label="Otwórz menu" data-i18n-attr="aria-label:nav.menu_open"
                        class="md:hidden flex items-center justify-center text-slate-900 dark:text-white shrink-0">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php render_holwar_hero(
            'Pomoc Drogowa Warszawa 24H',
            'Szybka pomoc drogowa na terenie Warszawy i okolic: Otwock, Garwolin, Ryki, Mińsk Mazowiecki. Holowanie, transport i pomoc przy awarii.'
        ); ?>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]" id="services">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase" data-i18n="services.title">NASZE USŁUGI</h2>
                    <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto" data-i18n="services.subtitle">Niezależnie od problemu, mamy sprzęt
                        i zespół gotowy do pomocy dokładnie tam, gdzie nas potrzebujesz.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">auto_towing</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3" data-i18n="services.towing_title">Holowanie 24/7</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="services.towing_desc">Holowanie lokalne i na
                            długich dystansach samochodów osobowych, motocykli i busów przy użyciu bezpiecznych platform
                            hydraulicznych.</p>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-accent-blue/10 text-accent-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">tire_repair</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3" data-i18n="services.tires_title">Wymiana Koła &amp; Wulkanizacja</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4" data-i18n="services.tires_desc">Przebita opona? Wymienimy
                            ją na Twoje koło zapasowe lub pomożemy z mobilną wulkanizacją na miejscu, również dla aut TIR i BUS.
                        </p>
                        <a href="wulkanizacja-mobilna.php" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                            <span data-i18n="services.tires_link">Mobilna wulkanizacja TIR &amp; BUS</span> <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3" data-i18n="services.jump_title">Odpalanie Auta</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="services.jump_desc">Rozładowany akumulator w
                            zimie? Nasze mocne boostery działają ze wszystkimi silnikami, w tym dieslami o dużej
                            pojemności.</p>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-accent-blue/10 text-accent-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3" data-i18n="services.fuel_title">Dowóz Paliwa</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="services.fuel_desc">Zabrakło benzyny lub ropy?
                            Dowieziemy paliwo, które pozwoli Ci bezpiecznie dojechać do najbliższej stacji.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24" id="how-it-works">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="bg-background-dark text-white rounded-[3rem] p-12 lg:p-20 relative overflow-hidden border border-white/10">
                    <div class="absolute inset-0 lg:left-1/2 opacity-20 pointer-events-none grayscale brightness-50 bg-center bg-cover"
                        style='background-image: url("img/image_2.jpg");'></div>
                    <div class="relative z-10 lg:w-2/3">
                        <h2 class="text-4xl lg:text-6xl font-800 mb-12 italic uppercase leading-tight" data-i18n="hiw.title">POMOC W 3 <br />
                            PROSTYCH KROKACH</h2>
                        <div class="space-y-12">
                            <div class="flex gap-6 items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center font-800 text-xl">
                                    1</div>
                                <div>
                                    <h4 class="text-2xl font-bold mb-2" data-i18n="hiw.step1_title">Zadzwoń do dyspozytora</h4>
                                    <p class="text-slate-400" data-i18n="hiw.step1_desc">Zadzwoń pod numer <a href="tel:+48793960058"
                                            class="text-primary font-bold hover:underline">+48 793 960 058</a>. Jesteśmy
                                        dostępni 24/7.
                                        Podaj swoją lokalizację i model pojazdu.</p>
                                </div>
                            </div>
                            <div class="flex gap-6 items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center font-800 text-xl">
                                    2</div>
                                <div>
                                    <h4 class="text-2xl font-bold mb-2" data-i18n="hiw.step2_title">Poczekaj chwilę</h4>
                                    <p class="text-slate-400" data-i18n="hiw.step2_desc">Najbliższa jednostka zostaje natychmiast wysłana.
                                        Otrzymasz link GPS, aby śledzić nasz dojazd na żywo w telefonie.</p>
                                </div>
                            </div>
                            <div class="flex gap-6 items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center font-800 text-xl">
                                    3</div>
                                <div>
                                    <h4 class="text-2xl font-bold mb-2" data-i18n="hiw.step3_title">Problem rozwiązany</h4>
                                    <p class="text-slate-400" data-i18n="hiw.step3_desc">Naprawimy auto na miejscu lub odholujemy do zaufanego
                                        warsztatu. Zapłacisz kartą, gotówką lub bezgotówkowo z ubezpieczenia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16">
                            <a href="tel:+48793960058" data-i18n="hiw.save_number"
                                class="bg-primary text-background-dark px-10 py-5 rounded-xl font-800 text-xl hover:scale-105 transition-transform inline-block">
                                Zapisz nasz numer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">12k+</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs" data-i18n="stats.rescued">Uratowanych Aut</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">20min</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs" data-i18n="stats.arrival">Średni Dojazd</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">4.9/5</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs" data-i18n="stats.rating">Ocena Google</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">24/7</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs" data-i18n="stats.avail">Dostępność</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]" id="reviews">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase" data-i18n="reviews.title">Co mówią kierowcy</h2>
                        <p class="text-slate-600 dark:text-slate-400" data-i18n="reviews.subtitle">Zaufały nam tysiące kierowców z Warszawy i okolic.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <button
                            class="w-12 h-12 rounded-full border border-slate-300 dark:border-white/10 flex items-center justify-center hover:bg-white dark:hover:bg-white/5 transition-colors">
                            <span class="material-symbols-outlined">arrow_back</span>
                        </button>
                        <button
                            class="w-12 h-12 rounded-full bg-primary text-background-dark flex items-center justify-center hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-white/5">
                        <div class="flex text-primary mb-4">
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                        </div>
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed" data-i18n="reviews.r1_text">
                            "Utknąłem w centrum o 3 rano. Pomoc przyjechała w 15 minut! Kierowca był super
                            profesjonalny i miły. Bardzo polecam!"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm" data-i18n="reviews.r1_author">Marek W.</p>
                                <p class="text-xs text-slate-500" data-i18n="reviews.r1_loc">Warszawa, Śródmieście</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-white/5">
                        <div class="flex text-primary mb-4">
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                        </div>
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed" data-i18n="reviews.r2_text">
                            "Świetna obsługa przy wymianie koła na S8. Szybka reakcja i bardzo rozsądne ceny. Najlepsza
                            pomoc drogowa w mieście."
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm" data-i18n="reviews.r2_author">Anna K.</p>
                                <p class="text-xs text-slate-500" data-i18n="reviews.r2_loc">Warszawa, Bemowo</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-white/5">
                        <div class="flex text-primary mb-4">
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                            <span class="material-symbols-outlined fill-1">star</span>
                        </div>
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed" data-i18n="reviews.r3_text">
                            "Korzystałem z odpalania auta w mroźny poranek. Uratowali mi dzień, dzięki nim nawet nie
                            spóźniłem się do pracy. 5 gwiazdek!"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm" data-i18n="reviews.r3_author">Tomasz R.</p>
                                <p class="text-xs text-slate-500" data-i18n="reviews.r3_loc">Warszawa, Ursynów</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl lg:text-5xl font-800 mb-8 italic uppercase" data-i18n="coverage.title">W WARSZAWIE I OKOLICY</h2>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8" data-i18n="coverage.desc">Obsługujemy całą Warszawę oraz
                            miejscowości wzdłuż tras wylotowych. Jesteśmy do Twojej dyspozycji 24/7, zapewniając szybki
                            dojazd tam, gdzie nas potrzebujesz.</p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="index.php" class="font-bold hover:text-primary transition-colors">Warszawa</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-otwock.php"
                                    class="font-bold hover:text-primary transition-colors">Otwock</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-garwolin.php"
                                    class="font-bold hover:text-primary transition-colors">Garwolin</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-minsk-mazowiecki.php"
                                    class="font-bold hover:text-primary transition-colors">Mińsk Mazowiecki</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-kolbiel.php"
                                    class="font-bold hover:text-primary transition-colors">Kołbiel</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-jozefow.php"
                                    class="font-bold hover:text-primary transition-colors">Józefów</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-gora-kalwaria.php"
                                    class="font-bold hover:text-primary transition-colors">Góra Kalwaria</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <a href="pomoc-drogowa-ryki.php"
                                    class="font-bold hover:text-primary transition-colors">Ryki</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-slate-200 dark:bg-white/5 rounded-3xl h-96 w-full relative overflow-hidden grayscale hover:grayscale-0 transition-all cursor-crosshair">
                        <div class="absolute inset-0 bg-center bg-cover opacity-60"
                            style='background-image: url("img/image_1.jpg");'></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-primary text-background-dark p-3 rounded-full animate-pulse">
                                <span class="material-symbols-outlined text-4xl">location_on</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]" id="seo-content">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-3xl lg:text-5xl font-800 mb-8 italic uppercase leading-tight" data-i18n="seo.heading">Profesjonalna
                            Pomoc
                            Drogowa Warszawa</h2>
                        <div class="prose prose-slate dark:prose-invert max-w-none">
                            <p class="text-lg text-slate-600 dark:text-slate-400 mb-6 leading-relaxed" data-i18n="seo.p1">
                                Każdy kierowca może napotkać nagłe problemy na drodze – awaria samochodu, kolizja czy
                                inne
                                nieprzewidziane sytuacje. W takich momentach niezawodna <strong>pomoc drogowa
                                    Warszawa</strong> jest kluczowa. HOLWAR oferuje profesjonalne i ekspresowe usługi w
                                zakresie <strong>holowania Warszawa</strong> oraz transportu pojazdów <strong>lawetą
                                    Warszawa</strong>, zapewniając bezpieczne przewiezienie auta do wyznaczonego
                                miejsca.
                            </p>
                            <h3 class="text-xl font-bold mb-4 text-primary uppercase tracking-wider" data-i18n="seo.why_title">Dlaczego warto
                                wybrać HOLWAR?</h3>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span data-i18n="seo.why_1"><strong>Całodobowa obsługa</strong> – oferujemy pomoc drogową w Warszawie 24
                                        godziny na dobę, 7 dni w tygodniu.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span data-i18n="seo.why_2"><strong>Błyskawiczny czas reakcji</strong> – nasza laweta Warszawa dociera na
                                        miejsce zdarzenia tak szybko, jak to możliwe.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span data-i18n="seo.why_3"><strong>Bezpieczne holowanie</strong> – nasze usługi realizowane są przez
                                        doświadczonych specjalistów.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span data-i18n="seo.why_4"><strong>Nowoczesny sprzęt</strong> – dysponujemy flotą pojazdów klasy premium,
                                        co
                                        pozwala nam obsługiwać auta osobowe, dostawcze i luksusowe.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div
                            class="bg-white dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 shadow-xl">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase" data-i18n="seo.card_title">Holowanie Warszawa - Szybko i
                                Bezpiecznie</h3>
                            <p class="text-slate-600 dark:text-slate-400 mb-6" data-i18n="seo.card_desc">
                                Awaria pojazdu? Potrzebujesz transportu samochodu po kolizji? Nasza usługa holowania
                                Warszawa jest dostępna całodobowo. Oferujemy transport do warsztatu, pod dom lub w
                                dowolne
                                wskazane miejsce na terenie miasta i okolic.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div data-i18n="seo.veh_cars"
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Auta Osobowe
                                </div>
                                <div data-i18n="seo.veh_vans"
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Dostawcze i Busy
                                </div>
                                <div data-i18n="seo.veh_moto"
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Motocykle i Quady
                                </div>
                                <div data-i18n="seo.veh_mach"
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Maszyny Rolnicze
                                </div>
                            </div>
                        </div>

                        <div class="bg-primary text-background-dark p-8 rounded-3xl shadow-xl shadow-primary/20">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase" data-i18n="seo.cta_title">Zawsze Gotowi do Działania</h3>
                            <p class="font-bold mb-6" data-i18n="seo.cta_desc">Bez względu na porę dnia czy nocy, pomoc drogowa HOLWAR to Twój
                                zaufany partner na stołecznych drogach.</p>
                            <a href="tel:+48793960058"
                                class="inline-flex items-center gap-2 bg-background-dark text-white px-6 py-3 rounded-xl font-800 transition-transform hover:scale-105">
                                <span class="material-symbols-outlined">call</span>
                                +48 793 960 058
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24" id="faq">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 data-i18n="faq.title" class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Najczęściej Zadawane Pytania (FAQ)
                    </h2>
                    <p data-i18n="faq.subtitle" class="text-slate-600 dark:text-slate-400 uppercase tracking-widest font-bold text-xs">Wszystko,
                        co musisz wiedzieć o naszej pomocy drogowej</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q1" class="text-lg font-800 pr-8">Holowanie Warszawa – jak szybko dojeżdżacie na
                                miejsce?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a1"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                W większości przypadków nasza laweta dociera na miejsce w ciągu 20–30 minut od
                                zgłoszenia. Oferujemy błyskawiczne holowanie w Warszawie 24/7, niezależnie od pory dnia
                                czy nocy oraz panujących warunków atmosferycznych.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q2" class="text-lg font-800 pr-8">Czy Wasza pomoc drogowa w Warszawie jest
                                całodobowa?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a2"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Tak, HOLWAR operuje w trybie 24/7. Jesteśmy do dyspozycji kierowców 365 dni w roku,
                                wliczając w to niedziele oraz wszystkie dni ustawowo wolne od pracy i święta.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q3" class="text-lg font-800 pr-8">Kiedy warto skorzystać z usługi lawety zamiast holowania
                                na lince?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a3"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Transport lawetą jest wymagany w przypadku aut z automatyczną skrzynią biegów, napędem
                                4x4, uszkodzonym układem kierowniczym lub zawieszeniem. Jest to również
                                najbezpieczniejsza forma transportu, wykluczająca ryzyko dodatkowych uszkodzeń podczas
                                holowania.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q4" class="text-lg font-800 pr-8">Jakie lokalizacje obsługujecie poza samą
                                Warszawą?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a4"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Obsługujemy całą aglomerację warszawską oraz trasy wylotowe. Regularnie pomagamy
                                kierowcom w miejscowościach takich jak: Otwock, Garwolin, Ryki, Mińsk Mazowiecki,
                                Piaseczno, Pruszków, Legionowo czy Wołomin.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q5" class="text-lg font-800 pr-8">Czy oferujecie pomoc dla aut na zagranicznych numerach
                                rejestracyjnych?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a5"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Oczywiście. Pomagamy wszystkim kierowcom, niezależnie od kraju rejestracji pojazdu.
                                Obsługujemy obcokrajowców przejeżdżających przez Polskę, oferując profesjonalny
                                transport lawetą w dowolne miejsce w Europie.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q6" class="text-lg font-800 pr-8">Jakie pojazdy możecie przewieźć na Waszej
                                lawecie?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a6"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Nasza flota jest przystosowana do transportu szerokiej gamy pojazdów: od motocykli i
                                quadów, przez samochody osobowe i luksusowe (niski kąt wjazdu), aż po ciężkie auta
                                dostawcze, busy i niewielkie maszyny budowlane.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span data-i18n="faq.q7" class="text-lg font-800 pr-8">Jakie informacje przygotować przy zgłoszeniu potrzeby
                                pomocy?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div data-i18n="faq.a7"
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Przy kontakcie z dyspozytorem podaj: dokładną lokalizację (lub charakterystyczne
                                punkty), markę i model pojazdu, rodzaj usterki/zdarzenia (np. urwane koło, błąd silnika)
                                oraz miejsce docelowe transportu. To pozwoli nam wysłać odpowiedni sprzęt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            document.querySelectorAll('.faq-trigger').forEach(trigger => {
                trigger.addEventListener('click', () => {
                    const content = trigger.nextElementSibling;
                    const icon = trigger.querySelector('.material-symbols-outlined');

                    // Toggle visibility
                    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                        content.style.maxHeight = '0px';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        // Close other open items (optional, but good UX)
                        document.querySelectorAll('.faq-content').forEach(c => c.style.maxHeight = '0px');
                        document.querySelectorAll('.faq-trigger span.material-symbols-outlined').forEach(i => i.style.transform = 'rotate(0deg)');

                        content.style.maxHeight = content.scrollHeight + 'px';
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        </script>

    </main>
    <?php include 'footer.php'; ?>
    <?php include 'cookie-consent.php'; ?>
    <?php include 'nav-mobile.php'; ?>
</body>

</html>