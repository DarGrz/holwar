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
    <title>HOLWAR | Pomoc Drogowa Warszawa</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="canonical" href="https://www.holwar.pl/" />
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
                        "accent-blue": "#3b82f6"
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
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
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
                    <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain" loading="lazy">
                </a>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#services">Usługi</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#how-it-works">Jak to
                        działa</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#faq">FAQ</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#reviews">Opinie</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#about">O nas</a>
                </nav>
                <div class="flex items-center gap-2 sm:gap-4">
                    <a href="tel:+48793960058"
                        class="bg-primary text-background-dark px-3 sm:px-6 py-2.5 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-1.5 sm:gap-2 hover:scale-105 transition-transform active:scale-95 shadow-lg shadow-primary/20 flex-shrink-0">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>793 960 058</span>
                    </a>
                    <button id="mobile-menu-open"
                        class="md:hidden flex items-center justify-center text-slate-900 dark:text-white shrink-0">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="relative pt-12 pb-24 lg:pt-20 lg:pb-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="z-10 text-center lg:text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-6">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                            </span>
                            Dostępni 24/7
                        </div>
                        <h1 class="text-5xl lg:text-7xl font-800 tracking-tight leading-[1.1] mb-4">
                            Laweta Warszawa 24H
                        </h1>
                        <p class="text-xl lg:text-2xl font-700 text-primary mb-3 tracking-tight">
                            Dojazd nawet w 15–20 minut
                        </p>
                        <p
                            class="text-lg text-slate-600 dark:text-slate-400 max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed">
                            Szybka pomoc drogowa na terenie Warszawy i&nbsp;okolic: Otwock, Garwolin,
                            Ryki, Mińsk Mazowiecki. Holowanie, transport i&nbsp;pomoc przy awarii.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                            <a href="tel:+48793960058"
                                class="bg-primary text-background-dark px-8 py-5 rounded-xl font-800 text-lg sm:text-xl flex items-center justify-center gap-3 hover:shadow-xl hover:shadow-primary/30 hover:scale-[1.03] active:scale-[0.97] transition-all">
                                <span class="material-symbols-outlined text-2xl">call</span>
                                Zadzwoń teraz – 793 960 058
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-2 justify-center lg:justify-start">
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-200 dark:bg-white/5 border border-slate-300 dark:border-white/10 text-[10px] font-800 uppercase tracking-widest text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-[14px] text-primary">local_shipping</span>
                                TIR
                            </div>
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-200 dark:bg-white/5 border border-slate-300 dark:border-white/10 text-[10px] font-800 uppercase tracking-widest text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-[14px] text-primary">airport_shuttle</span>
                                BUS
                            </div>
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-200 dark:bg-white/5 border border-slate-300 dark:border-white/10 text-[10px] font-800 uppercase tracking-widest text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-[14px] text-primary">directions_car</span>
                                Osobowe
                            </div>
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-200 dark:bg-white/5 border border-slate-300 dark:border-white/10 text-[10px] font-800 uppercase tracking-widest text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-[14px] text-primary">construction</span>
                                Maszyny
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/20 blur-[100px] rounded-full"></div>
                        <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-accent-blue/20 blur-[100px] rounded-full">
                        </div>
                        <div
                            class="relative bg-slate-200 dark:bg-white/5 border border-slate-300 dark:border-white/10 rounded-[2.5rem] p-4 aspect-[4/3] overflow-hidden group">
                            <div class="w-full h-full rounded-[2rem] bg-center bg-cover"
                                style='background-image: url("img/image_4.webp");'></div>
                            <div
                                class="absolute bottom-10 left-10 bg-background-dark/80 backdrop-blur-md p-4 rounded-2xl border border-white/10 flex items-center gap-4 animate-bounce-slow">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">timer</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Czas dojazdu
                                    </p>
                                    <p class="text-xl font-800">~15-20 Min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]" id="services">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">NASZE USŁUGI</h2>
                    <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Niezależnie od problemu, mamy sprzęt
                        i zespół gotowy do pomocy dokładnie tam, gdzie nas potrzebujesz.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">auto_towing</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3">Holowanie 24/7</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Holowanie lokalne i na
                            długich dystansach samochodów osobowych, motocykli i busów przy użyciu bezpiecznych platform
                            hydraulicznych.</p>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-accent-blue/10 text-accent-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">tire_repair</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3">Wymiana Koła</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Przebita opona? Wymienimy
                            ją na Twoje koło zapasowe lub pomożemy z naprawą na miejscu, abyś mógł kontynuować podróż.
                        </p>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3">Odpalanie Auta</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Rozładowany akumulator w
                            zimie? Nasze mocne boostery działają ze wszystkimi silnikami, w tym dieslami o dużej
                            pojemności.</p>
                    </div>
                    <div
                        class="bg-background-light dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group">
                        <div
                            class="w-14 h-14 rounded-xl bg-accent-blue/10 text-accent-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                        </div>
                        <h3 class="text-xl font-800 mb-3">Dowóz Paliwa</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Zabrakło benzyny lub ropy?
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
                        <h2 class="text-4xl lg:text-6xl font-800 mb-12 italic uppercase leading-tight">POMOC W 3 <br />
                            PROSTYCH KROKACH</h2>
                        <div class="space-y-12">
                            <div class="flex gap-6 items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center font-800 text-xl">
                                    1</div>
                                <div>
                                    <h4 class="text-2xl font-bold mb-2">Zadzwoń do dyspozytora</h4>
                                    <p class="text-slate-400">Zadzwoń pod numer <a href="tel:+48793960058"
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
                                    <h4 class="text-2xl font-bold mb-2">Poczekaj chwilę</h4>
                                    <p class="text-slate-400">Najbliższa jednostka zostaje natychmiast wysłana.
                                        Otrzymasz link GPS, aby śledzić nasz dojazd na żywo w telefonie.</p>
                                </div>
                            </div>
                            <div class="flex gap-6 items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center font-800 text-xl">
                                    3</div>
                                <div>
                                    <h4 class="text-2xl font-bold mb-2">Problem rozwiązany</h4>
                                    <p class="text-slate-400">Naprawimy auto na miejscu lub odholujemy do zaufanego
                                        warsztatu. Zapłacisz kartą, gotówką lub bezgotówkowo z ubezpieczenia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16">
                            <a href="tel:+48793960058"
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
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs">Uratowanych Aut</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">20min</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs">Średni Dojazd</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">4.9/5</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs">Ocena Google</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl lg:text-6xl font-800 text-primary mb-2">24/7</p>
                        <p class="text-slate-500 font-semibold uppercase tracking-widest text-xs">Dostępność</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]" id="reviews">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Co mówią kierowcy</h2>
                        <p class="text-slate-600 dark:text-slate-400">Zaufały nam tysiące kierowców z Warszawy i okolic.
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
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                            "Utknąłem w centrum o 3 rano. Pomoc przyjechała w 15 minut! Kierowca był super
                            profesjonalny i miły. Bardzo polecam!"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm">Marek W.</p>
                                <p class="text-xs text-slate-500">Warszawa, Śródmieście</p>
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
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                            "Świetna obsługa przy wymianie koła na S8. Szybka reakcja i bardzo rozsądne ceny. Najlepsza
                            pomoc drogowa w mieście."
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm">Anna K.</p>
                                <p class="text-xs text-slate-500">Warszawa, Bemowo</p>
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
                        <p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                            "Korzystałem z odpalania auta w mroźny poranek. Uratowali mi dzień, dzięki nim nawet nie
                            spóźniłem się do pracy. 5 gwiazdek!"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-300"></div>
                            <div>
                                <p class="font-bold text-sm">Tomasz R.</p>
                                <p class="text-xs text-slate-500">Warszawa, Ursynów</p>
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
                        <h2 class="text-3xl lg:text-5xl font-800 mb-8 italic uppercase">W WARSZAWIE I OKOLICY</h2>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">Obsługujemy całą Warszawę oraz
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
                        <h2 class="text-3xl lg:text-5xl font-800 mb-8 italic uppercase leading-tight">Profesjonalna
                            Pomoc
                            Drogowa Warszawa</h2>
                        <div class="prose prose-slate dark:prose-invert max-w-none">
                            <p class="text-lg text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                                Każdy kierowca może napotkać nagłe problemy na drodze – awaria samochodu, kolizja czy
                                inne
                                nieprzewidziane sytuacje. W takich momentach niezawodna <strong>pomoc drogowa
                                    Warszawa</strong> jest kluczowa. HOLWAR oferuje profesjonalne i ekspresowe usługi w
                                zakresie <strong>holowania Warszawa</strong> oraz transportu pojazdów <strong>lawetą
                                    Warszawa</strong>, zapewniając bezpieczne przewiezienie auta do wyznaczonego
                                miejsca.
                            </p>
                            <h3 class="text-xl font-bold mb-4 text-primary uppercase tracking-wider">Dlaczego warto
                                wybrać HOLWAR?</h3>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span><strong>Całodobowa obsługa</strong> – oferujemy pomoc drogową w Warszawie 24
                                        godziny na dobę, 7 dni w tygodniu.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span><strong>Błyskawiczny czas reakcji</strong> – nasza laweta Warszawa dociera na
                                        miejsce zdarzenia tak szybko, jak to możliwe.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span><strong>Bezpieczne holowanie</strong> – nasze usługi realizowane są przez
                                        doświadczonych specjalistów.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary">verified</span>
                                    <span><strong>Nowoczesny sprzęt</strong> – dysponujemy flotą pojazdów klasy premium,
                                        co
                                        pozwala nam obsługiwać auta osobowe, dostawcze i luksusowe.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div
                            class="bg-white dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 shadow-xl">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Holowanie Warszawa - Szybko i
                                Bezpiecznie</h3>
                            <p class="text-slate-600 dark:text-slate-400 mb-6">
                                Awaria pojazdu? Potrzebujesz transportu samochodu po kolizji? Nasza usługa holowania
                                Warszawa jest dostępna całodobowo. Oferujemy transport do warsztatu, pod dom lub w
                                dowolne
                                wskazane miejsce na terenie miasta i okolic.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Auta Osobowe
                                </div>
                                <div
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Dostawcze i Busy
                                </div>
                                <div
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Motocykle i Quady
                                </div>
                                <div
                                    class="bg-slate-100 dark:bg-white/5 p-4 rounded-xl text-xs font-bold uppercase tracking-tight text-center">
                                    Maszyny Rolnicze
                                </div>
                            </div>
                        </div>

                        <div class="bg-primary text-background-dark p-8 rounded-3xl shadow-xl shadow-primary/20">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Zawsze Gotowi do Działania</h3>
                            <p class="font-bold mb-6">Bez względu na porę dnia czy nocy, pomoc drogowa HOLWAR to Twój
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
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Najczęściej Zadawane Pytania (FAQ)
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 uppercase tracking-widest font-bold text-xs">Wszystko,
                        co musisz wiedzieć o naszej pomocy drogowej</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-white dark:hover:bg-white/10">
                            <span class="text-lg font-800 pr-8">Holowanie Warszawa – jak szybko dojeżdżacie na
                                miejsce?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Czy Wasza pomoc drogowa w Warszawie jest
                                całodobowa?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Kiedy warto skorzystać z usługi lawety zamiast holowania
                                na lince?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Jakie lokalizacje obsługujecie poza samą
                                Warszawą?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Czy oferujecie pomoc dla aut na zagranicznych numerach
                                rejestracyjnych?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Jakie pojazdy możecie przewieźć na Waszej
                                lawecie?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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
                            <span class="text-lg font-800 pr-8">Jakie informacje przygotować przy zgłoszeniu potrzeby
                                pomocy?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
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