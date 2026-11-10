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
    <title>Pomoc Drogowa BUS Warszawa &amp; Dostawcze 24h | Holowanie Busów | HOLWAR</title>
    <meta name="description"
        content="Całodobowa pomoc drogowa dla busów i aut dostawczych w Warszawie i okolicach (S17, S8, A2, DK50). Holowanie busów maxi, plandek i kontenerów z ładunkiem, mobilny serwis. Tel: 793 960 058!" />
    <meta name="keywords"
        content="pomoc drogowa bus, holowanie busów, pomoc drogowa dostawcze, laweta bus warszawa, holowanie sprinter, holowanie master, mobilny serwis bus, wyciąganie busa z rowu" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="https://www.holwar.pl/pomoc-drogowa-bus.php" />

    <!-- Open Graph -->
    <meta property="og:title" content="Pomoc Drogowa BUS Warszawa &amp; Dostawcze 24h | Holowanie Busów | HOLWAR" />
    <meta property="og:description"
        content="Ekspresowa pomoc drogowa dla samochodów dostawczych i busów. Holujemy busy z ładunkiem, wersje maxi, plandeki i kontenery. Dojazd 15–20 min." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.holwar.pl/pomoc-drogowa-bus.php" />
    <meta property="og:image" content="https://www.holwar.pl/img/pomoc-drogowa-bus-hero.webp" />

    <!-- Product / Service Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Pomoc Drogowa BUS i Holowanie Samochodów Dostawczych - HOLWAR",
      "image": "https://www.holwar.pl/img/pomoc-drogowa-bus-hero.webp",
      "description": "Profesjonalna całodobowa pomoc drogowa dla busów i samochodów dostawczych do 7.5t DMC. Holowanie busów maxi, kontenerów, plandek z ładunkiem, mobilny serwis na trasie, Warszawa i trasy S17, S8, A2, DK50.",
      "brand": {
        "@type": "Brand",
        "name": "HOLWAR"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "bestRating": "5",
        "ratingCount": "942"
      }
    }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Czy holujecie busy załadowane towarem?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tak, dysponujemy wzmocnionymi platformami najazdowymi o podwyższonej ładowności (do 7.5t DMC) oraz mocnymi wciągarkami hydraulicznymi. Bez problemu holujemy busy z towarem, paletami czy zabudową specjalistyczną bez konieczności rozładunku na drodze."
        }
      }, {
        "@type": "Question",
        "name": "Czy na lawetę zmieści się bus w wersji MAXI (L4H3, plandeka, kontener)?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tak. Posiadamy długie najazdy przystosowane specjalnie do długich rozstawów osi busów typu Maxi (L3, L4, L5) oraz wysokich nadwozi H2, H3, plandek z firanką i kontenerów z windą załadowczą."
        }
      }, {
        "@type": "Question",
        "name": "Jaki jest czas dojazdu pomocy drogowej do busa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Średni czas dojazdu wynosi od 15 do 20 minut na terenie Warszawy oraz wzdłuż tras S17, S8, A2, S2 i DK50. Nasze patrole dyżurują w gotowości 24/7."
        }
      }, {
        "@type": "Question",
        "name": "Czy możliwa jest naprawa busa bezpośrednio na drodze?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tak. W wielu przypadkach usuwamy awarię na miejscu – wykonujemy diagnostykę komputerową OBD2, awaryjny rozruch z boosterów 12V/24V, dowóz i odpowietrzanie układu paliwowego, wymianę kół (w tym kół bliźniaczych) oraz usuwanie drobnych usterek elektrycznych."
        }
      }, {
        "@type": "Question",
        "name": "Jakie marki samochodów dostawczych obsługujecie?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Obsługujemy wszystkie popularne auta dostawcze: Mercedes-Benz Sprinter, Iveco Daily, Renault Master, Fiat Ducato, Peugeot Boxer, Citroën Jumper, Ford Transit, Volkswagen Crafter / Transporter, MAN TGE, Opel Movano i inne."
        }
      }, {
        "@type": "Question",
        "name": "Czy wystawiacie fakturę VAT 23% dla firm?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tak, wystawiamy pełną fakturę VAT 23%. Na miejscu akceptujemy karty płatnicze, BLIK oraz gotówkę, a dla stałych firm transportowych i kurierskich oferujemy rozliczenie przelewowe."
        }
      }]
    }
    </script>

    <!-- Breadcrumbs Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Strona Główna",
        "item": "https://www.holwar.pl/"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Pomoc Drogowa BUS",
        "item": "https://www.holwar.pl/pomoc-drogowa-bus.php"
      }]
    }
    </script>

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

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
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
                        href="pomoc-drogowa-tir.php">Serwis TIR</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="autokasacja.php">Autokasacja</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="oferta.php">Oferta</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#reviews">Opinie</a>
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
            'POMOC DROGOWA BUS & DOSTAWCZE 24H',
            'Ekspresowe holowanie busów i aut dostawczych, transport busów z ładunkiem, wyciąganie z rowu oraz mobilny serwis dostawczych na trasie.',
            '<p>S17 / S8 / A2 / DK50 / S2 · Warszawa, Garwolin, Kołbiel, Mińsk Maz., Otwock, Piaseczno, Ryki</p><p>Wzmocnione najazdy · BUSY MAXI i ładunek · Dyżur 24/7/365 · Faktura VAT 23% · Ubezpieczenie OCP</p>'
        ); ?>

        <!-- Stats Bar -->
        <section class="py-12 border-y border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark/50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">schedule</span>
                    <p class="text-3xl font-800">24/7</p>
                    <p class="text-sm text-slate-500 font-medium">Całodobowy dyżur</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">local_shipping</span>
                    <p class="text-3xl font-800">Do 7.5t</p>
                    <p class="text-sm text-slate-500 font-medium">DMC pojazdów i ładunku</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">speed</span>
                    <p class="text-3xl font-800">15–20 min</p>
                    <p class="text-sm text-slate-500 font-medium">Średni czas dojazdu</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">verified_user</span>
                    <p class="text-3xl font-800">100% OCP</p>
                    <p class="text-sm text-slate-500 font-medium">Ubezpieczony transport</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-24 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Profesjonalna pomoc na drodze
                </div>
                <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Usługi Pomocy Drogowej dla Busów i Dostawczych</h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">
                    Samochód dostawczy w firmie musi zarabiać. Wiemy, jak kosztowny jest każdy przestój w trasie, dlatego działamy natychmiast – oferujemy naprawę na miejscu lub bezpieczne holowanie busa wraz z towarem.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1: Holowanie Busów Maxi -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">auto_towing</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Holowanie Busów Maxi</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Długie platformy (do 6,5 m) przystosowane do wersji L3, L4, plandek z firanką, kontenerów, izoterm i busów ze spojlerem dachowym.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-primary inline-flex items-center gap-1 hover:underline">
                        Zamów holownik busa <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Service 2: Holowanie z Ładunkiem -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">inventory_2</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Transport z Ładunkiem</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Nie musisz rozładowywać towaru na poboczu! Nasze lawety bez trudu zabierają załadowane busy i palety. Pełne ubezpieczenie OCP przewoźnika.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                        Holowanie bez rozładunku <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Service 3: Mobilny Serwis BUS -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">build</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Mobilny Serwis na Drodze</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Usuwanie awarii osprzętu silnika, pasków, alternatorów, rozruszników, nieszczelności układu chłodzenia oraz komputerowa diagnostyka błędów OBD2.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-primary inline-flex items-center gap-1 hover:underline">
                        Wezwij mechanika <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>

                <!-- Service 4: Wyciąganie z Rowu i Pobocza -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">minor_crash</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Wyciąganie z Rowu</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Mocne wyciągarki linowe i hydrauliczne, zblocza kierunkowe oraz wózki manewrowe. Wyciągamy busy ze śliskich poboczy, zasp śnieżnych i rowów.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                        Pomoc w terenie <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Additional services row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <!-- Service 5: Odpalanie 12V / 24V -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Awaryjne Odpalanie (Booster)</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Rozruch rozładowanych akumulatorów w silnikach diesla o dużej pojemności za pomocą profesjonalnych boosterów rozruchowych 12V/24V.</p>
                </div>

                <!-- Service 6: Mobilna Wulkanizacja i Koła Bliźniacze -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">swap_driving_apps_wheel</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Wymiana Kół Bliźniaczych</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Wymiana kół na trasie, odkręcanie zapieczonych śrub kluczami dynamometrycznymi i przekładniowymi w autach z kołami pojedynczymi i bliźniakami.</p>
                </div>

                <!-- Service 7: Układ Paliwowy & Błędne Tankowanie -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Układ Paliwowy &amp; ON</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Ekspresowy dowóz oleju napędowego, odpowietrzanie układu Common Rail po braku paliwa, odsysanie benzyny po pomyłce na stacji paliw.</p>
                </div>

                <!-- Service 8: Transport Pasażerów i Przeładunek -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">groups</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Pasażerowie &amp; Przeładunek</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Przewóz pasażerów z uszkodzonego busa w kabinie naszej pomocy drogowej, a w razie potrzeby pomoc w przeładunku towaru do auta zastępczego.</p>
                </div>
            </div>

            <!-- Inter-section Emergency Call Banner -->
            <div class="mt-12 bg-gradient-to-r from-card-dark via-[#252525] to-card-dark p-8 rounded-3xl border border-primary/30 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl">
                <div class="flex items-center gap-5">
                    <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-4xl">emergency</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-800 text-white uppercase italic">Awaria busa w trasie? Zadzwoń od razu!</h4>
                        <p class="text-slate-400 text-sm">Podaj lokalizację, model auta i czy przewozisz towar. Dyspozytor natychmiast wysyła odpowiednio wyposażoną pomoc drogową.</p>
                    </div>
                </div>
                <a href="tel:+48793960058"
                    class="animate-pulse-cta bg-primary text-background-dark px-8 py-4 rounded-xl font-800 text-lg flex items-center gap-3 shrink-0 hover:scale-105 transition-transform shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-2xl">call</span>
                    793 960 058
                </a>
            </div>
        </section>

        <!-- Supported Vehicles Grid -->
        <section class="py-16 bg-slate-100 dark:bg-white/[0.02] border-y border-slate-200 dark:border-white/10">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-2xl lg:text-4xl font-800 uppercase italic mb-3">Obsługiwane Samochody Dostawcze i Busy</h3>
                    <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-sm">
                        Niezależnie od marki, długości rozstawu osi czy typu zabudowy – mamy sprzęt przystosowany do każdego vana i auta dostawczego:
                    </p>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Mercedes Sprinter</p>
                        <p class="text-xs text-slate-500 mt-1">L1-L4 / Blaszak &amp; Kontener</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Iveco Daily</p>
                        <p class="text-xs text-slate-500 mt-1">Pojedyncze koła &amp; Bliźniak</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Renault Master</p>
                        <p class="text-xs text-slate-500 mt-1">Furgon, Plandeka, Firanka</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Fiat Ducato</p>
                        <p class="text-xs text-slate-500 mt-1">Maxi L4H2 / L4H3</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Peugeot Boxer</p>
                        <p class="text-xs text-slate-500 mt-1">Dostawcze &amp; Skrzyniowe</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Citroën Jumper</p>
                        <p class="text-xs text-slate-500 mt-1">Izotermy &amp; Chłodnie</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Ford Transit</p>
                        <p class="text-xs text-slate-500 mt-1">Custom, Jumbo, Skrzynia</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">VW Crafter / T6</p>
                        <p class="text-xs text-slate-500 mt-1">Furgony &amp; Pasażerskie</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">MAN TGE</p>
                        <p class="text-xs text-slate-500 mt-1">Wszystkie warianty DMC</p>
                    </div>
                    <div class="bg-white dark:bg-card-dark p-4 rounded-xl border border-slate-200 dark:border-white/5 text-center shadow-sm">
                        <p class="font-800 text-base text-primary">Opel Movano</p>
                        <p class="text-xs text-slate-500 mt-1">Busy towarowe i vany</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO Content Section -->
        <section class="py-24 bg-white dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-800 mb-6 italic uppercase leading-tight">Profesjonalna Pomoc Drogowa BUS –
                            <span class="text-primary">Warszawa, S17, S8, A2, DK50</span></h2>
                        <div class="prose prose-lg dark:prose-invert max-w-none text-slate-600 dark:text-slate-400">
                            <p class="mb-6 leading-relaxed">
                                Samochody dostawcze i busy to konie pociągowe współczesnej logistyki, transportu kurierskiego oraz handlu. Każda godzina opóźnienia spowodowana awarią na trasie generuje straty finansowe i ryzyko utraty zaufania klientów. W firmie <strong>HOLWAR</strong> doskonale to rozumiemy, dlatego nasza <strong>pomoc drogowa dla busów</strong> działa na zasadzie natychmiastowej dyspozycji 24 godziny na dobę.
                            </p>
                            <p class="mb-6 leading-relaxed">
                                Standardowa autolaweta osobowa często nie jest w stanie zabrać dużego busa ze względu na przekroczony dopuszczalny nacisk na oś, zbyt krótki najazd (zwis tylny busa grozi uszkodzeniem podwozia) lub masę ładunku. Nasz tabor obejmuje <strong>wzmocnione autolawety z platformami o długości przekraczającej 6 metrów</strong>, wciągarki hydrauliczne oraz wózki serwisowe, dzięki którym bezpiecznie wciągamy nawet busy z zablokowanymi kołami, uszkodzoną osią czy zatartym mostem.
                            </p>
                            <p class="mb-6 leading-relaxed">
                                Jeżeli usterka na to pozwala, nasz mobilny mechanik podejmuje próbę <strong>naprawy busa na miejscu zdarzenia</strong>. Posiadamy testery diagnostyczne, zasilanie dużej mocy, części eksploatacyjne i narzędzia umożliwiające usunięcie awarii osprzętu silnika czy nieszczelności w układzie chłodzenia lub paliwowym.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 shadow-xl">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Dlaczego warto wybrać HOLWAR?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Holowanie busów z ładunkiem</strong> – przewozimy pojazdy wraz z towarem, paletami i narzędziami na pokładzie.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Platformy pod wersje Maxi</strong> – bez obaw o uszkodzenie spoilerów dachowych, firanek czy kontenerów.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Ekspresowy czas reakcji 15–20 min</strong> – stały dyżur w newralgicznych węzłach Warszawy, S17, S8, A2, S2 i DK50.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Pełna faktura VAT 23%</strong> – przejrzyste rozliczenia, płatności kartą, BLIK oraz przelewy dla firm transportowych.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Ubezpieczenie OCP</strong> – każdy transportowany pojazd i ładunek objęty jest pełną ochroną ubezpieczeniową.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-primary text-background-dark p-8 rounded-3xl shadow-xl shadow-primary/20">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Bus odmówił posłuszeństwa?</h3>
                            <p class="font-bold mb-6">Zadzwoń do naszego dyspozytora. Podaj model pojazdu, lokalizację i natychmiast wyślemy odpowiednią pomoc drogową.</p>
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

        <!-- Area Coverage Section -->
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Obsługiwane Obszary i Trasy</h2>
                    <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">Świadczymy usługi pomocy drogowej dla busów na terenie całego województwa mazowieckiego:</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <a href="index.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_city</span>
                        <p class="font-800 text-lg">Warszawa</p>
                        <p class="text-xs text-slate-500 mt-1">Wszystkie dzielnice</p>
                    </a>
                    <a href="pomoc-drogowa-otwock.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Otwock</p>
                        <p class="text-xs text-slate-500 mt-1">i okolice</p>
                    </a>
                    <a href="pomoc-drogowa-kolbiel.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Kołbiel</p>
                        <p class="text-xs text-slate-500 mt-1">Węzeł S17 / DK50</p>
                    </a>
                    <a href="pomoc-drogowa-garwolin.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Garwolin</p>
                        <p class="text-xs text-slate-500 mt-1">Trasa Lubelska S17</p>
                    </a>
                    <a href="pomoc-drogowa-piaseczno.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Piaseczno</p>
                        <p class="text-xs text-slate-500 mt-1">i okolice</p>
                    </a>
                    <a href="pomoc-drogowa-ryki.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Ryki</p>
                        <p class="text-xs text-slate-500 mt-1">Trasa S17</p>
                    </a>
                    <a href="pomoc-drogowa-minsk-mazowiecki.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Mińsk Maz.</p>
                        <p class="text-xs text-slate-500 mt-1">Autostrada A2 / DK92</p>
                    </a>
                    <div
                        class="bg-primary/10 dark:bg-primary/5 p-6 rounded-2xl border border-primary/20 text-center flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3">add_location_alt</span>
                        <p class="font-800 text-lg text-primary">Całe Mazowsze</p>
                        <p class="text-xs text-slate-500 mt-1">Trasy S2, S8, S17, A2, DK50</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Technical Section -->
        <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div
                    class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#ee8c2b_0,transparent_50%)]">
                </div>
            </div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <h2 class="text-3xl lg:text-5xl font-800 mb-10 uppercase italic text-center">Bezpieczne Holowanie i Mobilny Serwis Dostawczych</h2>
                <div class="text-lg text-slate-300 space-y-8 leading-relaxed mb-12">
                    <p>
                        Holowanie nowoczesnych samochodów dostawczych wymaga wiedzy technicznej i odpowiedniego wyposażenia. Próba ciągnięcia załadowanego busa na lince holowniczej przez inny pojazd dostawczy nie tylko łamie przepisy ruchu drogowego, ale grozi zerwaniem haka, uszkodzeniem skrzyni biegów (szczególnie w autach z automatyczną skrzynią lub napędem 4x4) oraz utratą siły hamowania przy wyłączonym silniku.
                    </p>
                    <p>
                        W <strong>HOLWAR</strong> stosujemy wyłącznie profesjonalny transport na platformie najazdowej. Nasze pojazdy posiadają niski kąt najazdu, co zapobiega szorowaniu zderzakiem lub zbiornikiem paliwa o asfalt. W przypadku zablokowanego hamulca ręcznego, uszkodzonego koła lub zatartego łożyska stosujemy specjalne wózki transportowe, które pozwalają na bezpieczny załadunek bez ryzyka dodatkowych zniszczeń.
                    </p>
                    <p>
                        Obsługujemy kluczowe trasy tranzytowe: drogę ekspresową <strong>S17</strong> łączącą Warszawę z Lublinem, autostradę <strong>A2</strong>, trasę <strong>S8</strong> w stronę Białegostoku i Wrocławia, Południową Obwodnicę Warszawy <strong>S2</strong> oraz obwodnicę towarową <strong>DK50</strong>. Jesteśmy w stanie szybko dotrzeć do każdego zjazdu, MOP-u czy parkingu leśnego.
                    </p>
                </div>
                <!-- CTA -->
                <div class="text-center">
                    <a href="tel:+48793960058"
                        class="inline-flex items-center gap-4 bg-primary text-background-dark px-12 py-6 rounded-2xl font-800 text-2xl hover:scale-110 active:scale-95 transition-all shadow-2xl shadow-primary/40">
                        <span class="material-symbols-outlined text-3xl">call</span>
                        793 960 058 – ZADZWOŃ TERAZ
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                        Pytania i odpowiedzi
                    </div>
                    <h2 class="text-3xl font-800 uppercase italic">Najczęstsze Pytania – Pomoc Drogowa BUS</h2>
                </div>
                <div class="space-y-4">
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy holujecie busy załadowane towarem?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Tak. Nasze platformy najazdowe posiadają podwyższoną ładowność i wzmocnione zawieszenie, co pozwala na bezpieczny przewóz aut dostawczych z pełnym ładunkiem na pace (do 7.5t DMC zestawu). Nie musisz martwić się przeładunkiem w deszczu czy na autostradzie.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy na lawetę zmieści się bus w wersji MAXI (L4H3, plandeka, kontener)?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Tak, dysponujemy wydłużonymi platformami o długości do 6,5 metra, na których bezpiecznie mieści się bus z długim rozstawem osi i znacznym zwisem tylnym, w tym także zabudowy kontenerowe z windą załadowczą oraz plandeki międzynarodowe.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Jaki jest czas dojazdu pomocy drogowej do busa?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Na terenie Warszawy oraz wzdłuż dróg ekspresowych S17, S8, S2, A2 i DK50 średni czas dotarcia wynosi 15–20 minut. O dokładnym czasie informujemy od razu podczas rozmowy telefonicznej.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy możliwa jest naprawa busa bezpośrednio na drodze?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Oczywiście! Jeśli usterka dotyczy akumulatora, koła, drobnej elektryki, zasilania paliwem czy diagnostyki błędów silnika, usuwamy problem na miejscu, oszczędzając Twój czas i koszty transportu.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Jakie marki samochodów dostawczych obsługujecie?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Obsługujemy wszystkie pojazdy dostawcze i busy obecne na rynku, w tym m.in. Mercedes-Benz Sprinter, Iveco Daily, Renault Master, Fiat Ducato, Peugeot Boxer, Citroën Jumper, Ford Transit, VW Crafter i MAN TGE.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy wystawiacie fakturę VAT i jakie formy płatności są dostępne?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Wystawiamy pełną fakturę VAT 23%. Kierowca może zapłacić na miejscu kartą płatniczą, telefonem (BLIK) lub gotówką. Dla stałych partnerów transportowych oferujemy rozliczenie fakturowe z odroczonym terminem płatności.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-primary">
            <div class="max-w-4xl mx-auto px-6 text-center text-background-dark">
                <h2 class="text-4xl md:text-5xl font-800 mb-8 leading-tight italic uppercase">Awaria Busa? Zadzwoń po Pomoc Drogową BUS!</h2>
                <p class="text-background-dark/80 text-xl font-bold mb-12 italic uppercase">Wzmocniona laweta i mobilny mechanik są w ciągłej gotowości 24/7. Odbieramy natychmiast!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a class="animate-pulse-cta bg-background-dark text-primary px-10 py-5 rounded-xl font-800 text-2xl flex items-center justify-center gap-3 hover:scale-105 transition-transform shadow-2xl"
                        href="tel:+48793960058">
                        <span class="material-symbols-outlined text-3xl">call</span>
                        793 960 058
                    </a>
                </div>
                <p class="mt-8 text-background-dark/80 text-sm font-bold uppercase tracking-widest">Pomoc Drogowa BUS • Holowanie Dostawczych • Busy Maxi z Ładunkiem • Warszawa • S17 • S8 • A2 • DK50 • 24/7</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'cookie-consent.php'; ?>
    <?php include 'nav-mobile.php'; ?>
</body>

</html>
