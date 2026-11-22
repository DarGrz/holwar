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
    <title>Obszar Działania | Pomoc Drogowa i Laweta 24H | Wszystkie Miejscowości | HOLWAR</title>
    <meta name="description"
        content="Pełna lista 236 miast i miejscowości obsługiwanych przez pomoc drogową HOLWAR 24H. Szybki dojazd lawetą w 15–20 min, holowanie, mobilny serwis TIR i BUS. Zadzwoń: 793 960 058!" />
    <meta name="keywords"
        content="pomoc drogowa obszar działania, laweta warszawa miejscowości, holowanie s17 s8 a2, mobilny serwis tir mazowieckie, lista miast pomoc drogowa" />
    <link rel="canonical" href="https://www.holwar.pl/lokalizacje.php" />

    <!-- Open Graph -->
    <meta property="og:title" content="Obszar Działania | Pomoc Drogowa i Laweta 24H | HOLWAR" />
    <meta property="og:description"
        content="Całodobowa pomoc drogowa, holowanie i laweta na terenie 236 miast i miejscowości. Szybki dojazd w 15–20 minut." />
    <meta property="og:url" content="https://www.holwar.pl/lokalizacje.php" />
    <meta property="og:image" content="https://www.holwar.pl/img/holwar-hero-1360.webp" />
    <meta property="og:type" content="website" />

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,search,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.ico" />

    <!-- Structured Data Breadcrumbs -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Strona Główna",
          "item": "https://www.holwar.pl/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Obszar Działania",
          "item": "https://www.holwar.pl/lokalizacje.php"
        }
      ]
    }
    </script>

    <!-- Structured Data LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "HOLWAR - Pomoc Drogowa i Laweta 24H",
      "image": "https://www.holwar.pl/img/image_4.webp",
      "telephone": "+48793960058",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Al. Jerozolimskie 93",
        "addressLocality": "Warszawa",
        "postalCode": "02-001",
        "addressCountry": "PL"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 52.2274,
        "longitude": 20.9995
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "areaServed": [
        "Warszawa", "Garwolin", "Mińsk Mazowiecki", "Otwock", "Piaseczno", "Ryki", "Kołbiel", "Polska"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "bestRating": "5",
        "ratingCount": "768"
      }
    }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Jaki jest średni czas dojazdu lawety do obsługiwanych miejscowości?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "W rejonie Warszawy oraz wzdłuż kluczowych korytarzy S17, S8, A2 i DK50 czas dojazdu wynosi średnio od 15 do 25 minut. Do dalszych miejscowości docieramy w najkrótszym możliwym terminie dzięki strategicznie rozlokowanym patrolom dyżurującym."
          }
        },
        {
          "@type": "Question",
          "name": "Czy oferujecie pomoc drogową dla pojazdów ciężarowych TIR i dostawczych BUS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tak, dysponujemy ciężkim sprzętem holowniczym, wzmocnionymi platformami hydraulicznymi dla busów Maxi oraz mobilnym warsztatem TIR z mobilną wulkanizacją na trasie."
          }
        },
        {
          "@type": "Question",
          "name": "Czy pomoc drogowa HOLWAR działa w trybie całodobowym 24/7?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tak, działamy nieprzerwanie 24 godziny na dobę, 7 dni w tygodniu, 365 dni w roku, wliczając niedziele i święta."
          }
        }
      ]
    }
    </script>
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
                    <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain"
                        width="504" height="152" loading="eager">
                </a>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#services"
                        data-i18n="nav.services">Usługi</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#how-it-works"
                        data-i18n="nav.how_it_works">Jak to działa</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#faq"
                        data-i18n="nav.faq">FAQ</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#reviews"
                        data-i18n="nav.reviews">Opinie</a>
                    <a class="text-sm font-semibold text-primary" href="lokalizacje.php">Lokalizacje</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#about"
                        data-i18n="nav.about">O nas</a>
                </nav>
                <div class="flex items-center gap-2 sm:gap-4">
                    <!-- Language Switcher (Desktop) -->
                    <div class="lang-switch hidden md:inline-flex items-center p-0.5 rounded-xl bg-white/5 border border-slate-200 dark:border-white/10 text-xs font-bold"
                        role="group" aria-label="Wybór języka / Language selection">
                        <button type="button" onclick="setLanguage('pl')" data-lang-btn="pl"
                            class="px-2.5 py-1 rounded-lg text-xs font-bold transition-all bg-primary text-background-dark shadow-sm">PL</button>
                        <button type="button" onclick="setLanguage('en')" data-lang-btn="en"
                            class="px-2.5 py-1 rounded-lg text-xs font-semibold transition-all text-slate-400 hover:text-white">EN</button>
                    </div>
                    <a href="tel:+48793960058"
                        class="bg-primary text-background-dark px-3 sm:px-6 py-2.5 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-1.5 sm:gap-2 hover:scale-105 transition-transform active:scale-95 shadow-lg shadow-primary/20 flex-shrink-0">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>793 960 058</span>
                    </a>
                    <button id="mobile-menu-open" type="button" aria-label="Otwórz menu"
                        data-i18n-attr="aria-label:nav.menu_open"
                        class="md:hidden flex items-center justify-center text-slate-900 dark:text-white shrink-0">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Breadcrumbs -->
        <nav aria-label="Nawigacja okruszkowa"
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-2 text-xs text-slate-500">
            <ol class="flex items-center flex-wrap gap-2">
                <li><a href="index.php" class="hover:text-primary transition-colors">Strona Główna</a></li>
                <li><span class="text-slate-600">/</span></li>
                <li class="text-primary font-semibold" aria-current="page">Obszar Działania i Miejscowości</li>
            </ol>
        </nav>

        <!-- Hero Section -->
        <?php render_holwar_hero(
            'Obszar Działania Pomoc Drogowa 24H',
            'Całodobowa pomoc drogowa, holowanie i laweta w 236 miastach i miejscowościach. Szybki dojazd w 15–20 minut: Warszawa (wszystkie dzielnice), Garwolin, Mińsk Mazowiecki, Otwock, Piaseczno, Ryki oraz wzdłuż tras S17, S8, A2, DK50 i w całej Polsce.'
        ); ?>

        <?php
        $locations_db = require __DIR__ . '/data/locations.php';
        $totalLocations = count($locations_db);

        // Sort alphabetically using Polish collation
        $collator = class_exists('Collator') ? new Collator('pl_PL') : null;
        $items = array_values($locations_db);
        if ($collator) {
            usort($items, function ($a, $b) use ($collator) {
                return $collator->compare($a['name'], $b['name']);
            });
        } else {
            usort($items, function ($a, $b) {
                return strcoll($a['name'], $b['name']);
            });
        }

        // Group by first letter
        $alphabetical = [];
        foreach ($items as $loc) {
            $letter = mb_strtoupper(mb_substr($loc['name'], 0, 1, 'UTF-8'), 'UTF-8');
            $alphabetical[$letter][] = $loc;
        }

        // Warsaw districts
        $warsawDistricts = [
            'bemowo', 'bialoleka', 'bielany', 'mokotow', 'ochota',
            'praga-poludnie', 'praga-polnoc', 'rembertow', 'srodmiescie',
            'targowek', 'ursus', 'ursynow', 'wawer', 'wesola',
            'wilanow', 'wlochy', 'wola', 'zoliborz'
        ];

        // Key highway / transit corridor towns
        $corridorTowns = [
            'garwolin' => 'Trasa S17 • Węzeł Garwolin',
            'minsk-mazowiecki' => 'Autostrada A2 • DK50',
            'otwock' => 'Trasa S17 • DK50',
            'piaseczno' => 'Trasa S7 • Południe Warszawy',
            'ryki' => 'Trasa S17 • Węzeł Ryki',
            'kolbiel' => 'Rondo Kołbiel • S17 / DK50',
            'jozefow' => 'Linia Otwocka • S17',
            'gora-kalwaria' => 'Trasa DK50 • Most na Wiśle',
            'sulejowek' => 'Trasa A2 / Wschodnia Obwodnica'
        ];
        ?>

        <!-- Stats Bar -->
        <section class="py-12 border-y border-slate-200 dark:border-white/5 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div class="p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 shadow-sm">
                        <div class="text-3xl lg:text-4xl font-800 text-primary mb-1"><?php echo $totalLocations; ?></div>
                        <div class="text-xs uppercase font-bold text-slate-500 tracking-wider">Obsługiwanych Miejscowości</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 shadow-sm">
                        <div class="text-3xl lg:text-4xl font-800 text-primary mb-1">15–20 min</div>
                        <div class="text-xs uppercase font-bold text-slate-500 tracking-wider">Średni Czas Dojazdu</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 shadow-sm">
                        <div class="text-3xl lg:text-4xl font-800 text-primary mb-1">24/7/365</div>
                        <div class="text-xs uppercase font-bold text-slate-500 tracking-wider">Dyżur Całodobowy</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 shadow-sm">
                        <div class="text-3xl lg:text-4xl font-800 text-primary mb-1">TIR • BUS • OSOBOWE</div>
                        <div class="text-xs uppercase font-bold text-slate-500 tracking-wider">Kompleksowa Flota</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search and Filter Bar -->
        <section class="py-10 bg-background-light dark:bg-background-dark sticky top-20 z-40 backdrop-blur-md bg-opacity-95 dark:bg-opacity-95 border-b border-slate-200 dark:border-white/10 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="relative w-full md:max-w-xl">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input type="search" id="loc-search" placeholder="Wpisz nazwę miejscowości, gminy lub powiatu (np. Garwolin, Mokotów, Otwock)..."
                            class="w-full pl-12 pr-10 py-3.5 rounded-2xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-primary text-sm font-medium transition-colors"
                            autocomplete="off" />
                        <button type="button" id="loc-clear" aria-label="Wyczyść wyszukiwanie"
                            class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white p-1">
                            <span class="material-symbols-outlined text-lg">close</span>
                        </button>
                    </div>

                    <div class="flex items-center gap-3 text-xs text-slate-500">
                        <span>Wyświetlanie:</span>
                        <span id="loc-counter" class="font-extrabold text-primary text-sm bg-primary/10 px-3 py-1 rounded-full"><?php echo $totalLocations; ?></span>
                        <span>z <?php echo $totalLocations; ?> lokalizacji</span>
                    </div>
                </div>

                <!-- Alphabet Quick Jump -->
                <div class="flex items-center flex-wrap gap-1.5 mt-5 pt-4 border-t border-slate-200 dark:border-white/5">
                    <span class="text-xs font-bold uppercase text-slate-400 mr-2">Skocz do litery:</span>
                    <?php foreach (array_keys($alphabetical) as $let): ?>
                        <a href="#letter-<?php echo $let; ?>"
                            class="w-7 h-7 flex items-center justify-center rounded-lg bg-slate-200 dark:bg-white/5 text-slate-700 dark:text-slate-300 hover:bg-primary hover:text-background-dark font-bold text-xs transition-colors">
                            <?php echo $let; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Featured Hub 1: Warsaw Districts -->
        <section class="py-16 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-2">
                            <span class="material-symbols-outlined text-sm">location_city</span> Stolica
                        </div>
                        <h2 class="text-2xl lg:text-4xl font-800 uppercase italic">Dzielnice Warszawy (18)</h2>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold hidden sm:inline">Dojazd 15–20 minut</span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                    <?php foreach ($warsawDistricts as $dSlug):
                        if (!isset($locations_db[$dSlug])) continue;
                        $dLoc = $locations_db[$dSlug];
                    ?>
                        <a href="pomoc-drogowa-<?php echo $dSlug; ?>.php"
                            class="p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 hover:border-primary hover:shadow-lg transition-all group flex flex-col justify-between">
                            <span class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors flex items-center justify-between">
                                <?php echo htmlspecialchars($dLoc['name'], ENT_QUOTES, 'UTF-8'); ?>
                                <span class="material-symbols-outlined text-xs text-primary opacity-0 group-hover:opacity-100 transition-opacity">arrow_forward</span>
                            </span>
                            <span class="text-[11px] text-slate-400 mt-2 font-medium">Pomoc Drogowa 24H</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Featured Hub 2: Key Corridor Towns (S17, S8, A2, DK50) -->
        <section class="py-16 bg-background-light dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-2">
                            <span class="material-symbols-outlined text-sm">distance</span> Trasy Tranzytowe
                        </div>
                        <h2 class="text-2xl lg:text-4xl font-800 uppercase italic">Kluczowe Miasta i Korytarze S17 / S8 / A2 / DK50</h2>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold hidden sm:inline">Całodobowy dyżur</span>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($corridorTowns as $cSlug => $routeDesc):
                        if (!isset($locations_db[$cSlug])) continue;
                        $cLoc = $locations_db[$cSlug];
                    ?>
                        <a href="pomoc-drogowa-<?php echo $cSlug; ?>.php"
                            class="p-6 rounded-3xl bg-slate-100 dark:bg-card-dark border border-slate-200 dark:border-white/5 hover:border-primary hover:shadow-xl transition-all group flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-800 text-slate-900 dark:text-white group-hover:text-primary transition-colors mb-1">
                                    Pomoc Drogowa <?php echo htmlspecialchars($cLoc['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </h3>
                                <p class="text-xs text-primary font-bold"><?php echo htmlspecialchars($routeDesc, ENT_QUOTES, 'UTF-8'); ?></p>
                                <p class="text-xs text-slate-400 mt-2">Laweta • Serwis TIR • Holowanie BUS</p>
                            </div>
                            <span class="w-10 h-10 rounded-full bg-white dark:bg-white/5 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-all shrink-0">
                                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Complete Alphabetical Directory -->
        <section class="py-16 bg-slate-100 dark:bg-white/[0.02]" id="directory-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-12">
                    <h2 class="text-2xl lg:text-4xl font-800 uppercase italic mb-3">Wszystkie Miejscowości Alfabetycznie (A–Z)</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-sm max-w-3xl">
                        Wybierz swoją miejscowość z poniższego spisu, aby sprawdzić szczegółowy zakres pomocy drogowej, czas dojazdu lawety oraz dedykowany numer telefonu.
                    </p>
                </div>

                <div id="no-results" class="hidden py-16 text-center">
                    <span class="material-symbols-outlined text-5xl text-slate-500 mb-4">search_off</span>
                    <h3 class="text-xl font-bold mb-2">Nie znaleziono miejscowości</h3>
                    <p class="text-slate-400 text-sm mb-6">Nie znaleźliśmy miejscowości pasującej do wpisanego hasła. Mimo to obsługujemy całą Polskę!</p>
                    <a href="tel:+48793960058" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-background-dark font-extrabold text-sm uppercase">
                        <span class="material-symbols-outlined">call</span>
                        Zadzwoń teraz: 793 960 058
                    </a>
                </div>

                <div id="locations-list" class="space-y-12">
                    <?php foreach ($alphabetical as $letter => $locGroup): ?>
                        <div class="letter-group" id="letter-<?php echo $letter; ?>" data-letter="<?php echo $letter; ?>">
                            <div class="flex items-center gap-4 mb-6 pb-2 border-b border-slate-200 dark:border-white/10">
                                <span class="w-12 h-12 rounded-2xl bg-primary text-background-dark font-800 text-2xl flex items-center justify-center shadow-md shadow-primary/20">
                                    <?php echo $letter; ?>
                                </span>
                                <div>
                                    <h3 class="text-xl font-bold uppercase tracking-wider text-slate-900 dark:text-white">Miejscowości na literę <?php echo $letter; ?></h3>
                                    <span class="text-xs text-slate-500 font-medium"><?php echo count($locGroup); ?> lokalizacji</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3.5">
                                <?php foreach ($locGroup as $l):
                                    $s = $l['slug'];
                                    $n = $l['name'];
                                    $d = (!empty($l['district']) && $l['district'] !== 'Pozostałe' && $l['district'] !== 'Inne') ? $l['district'] : null;
                                    $c = (!empty($l['commune']) && $l['commune'] !== 'Pozostałe' && $l['commune'] !== 'Inne') ? $l['commune'] : null;
                                    $searchBlob = mb_strtolower("$n $s " . ($d ?? '') . ' ' . ($c ?? ''), 'UTF-8');
                                ?>
                                    <a href="pomoc-drogowa-<?php echo $s; ?>.php"
                                        class="loc-card p-4 rounded-2xl bg-white dark:bg-card-dark border border-slate-200 dark:border-white/5 hover:border-primary hover:shadow-lg transition-all group flex flex-col justify-between"
                                        data-search="<?php echo htmlspecialchars($searchBlob, ENT_QUOTES, 'UTF-8'); ?>">
                                        <div>
                                            <div class="flex items-start justify-between gap-2 mb-1">
                                                <h4 class="text-base font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                                    <?php echo htmlspecialchars($n, ENT_QUOTES, 'UTF-8'); ?>
                                                </h4>
                                                <span class="material-symbols-outlined text-sm text-primary opacity-0 group-hover:opacity-100 transition-opacity shrink-0">arrow_forward</span>
                                            </div>
                                            <?php if ($d || $c): ?>
                                                <p class="text-[11px] text-slate-400">
                                                    <?php
                                                    if ($c && $d && $c !== $d) {
                                                        echo "gm. $c, pow. $d";
                                                    } elseif ($d) {
                                                        echo "pow. $d";
                                                    } elseif ($c) {
                                                        echo "gm. $c";
                                                    }
                                                    ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="mt-3 pt-3 border-t border-slate-100 dark:border-white/5 flex items-center justify-between text-[11px]">
                                            <span class="text-primary font-semibold">Pomoc Drogowa 24H</span>
                                            <span class="text-slate-500">Laweta</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SEO Article & FAQ -->
        <section class="py-20 bg-background-light dark:bg-background-dark">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 uppercase italic mb-4">Kompleksowa Pomoc Drogowa w Każdej Lokalizacji</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        Od centrum Warszawy, przez trasy ekspresowe Mazowsza i Lubelszczyzny, aż po małe miejscowości gminne – jesteśmy gotowi nieść pomoc 24 godziny na dobę.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    <div class="p-8 rounded-3xl bg-slate-100 dark:bg-card-dark border border-slate-200 dark:border-white/5">
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-2xl">speed</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Ekspresowy Czas Reakcji</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Dzięki dyslokacji autolawet w newralgicznych węzłach tranzytowych przy S17, S8, A2, DK50 i obwodnicy S2 docieramy na miejsce zdarzenia średnio w 15–20 minut.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-slate-100 dark:bg-card-dark border border-slate-200 dark:border-white/5">
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-2xl">local_shipping</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Flota dla TIR i BUS</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Specjalistyczne holowniki ciężarowe, naczepy niskopodwoziowe i wzmocnione najazdy dla busów o przedłużonym rozstawie osi i pojazdów dostawczych pod pełnym ładunkiem.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-slate-100 dark:bg-card-dark border border-slate-200 dark:border-white/5">
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-2xl">tire_repair</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Mobilny Warsztat i Opony</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Wymiana kół na autostradzie, dowóz nowych opon ciężarowych, naprawa pneumatyki, awaryjne odpalanie 12V/24V oraz dowóz paliwa prosto na pobocze drogi.
                        </p>
                    </div>
                </div>

                <!-- Call to action block -->
                <div class="bg-gradient-to-r from-primary to-amber-500 rounded-3xl p-8 sm:p-12 text-background-dark flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl shadow-primary/20">
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-800 uppercase italic mb-2">Potrzebujesz Pomocy na Drodze?</h3>
                        <p class="font-bold text-sm sm:text-base opacity-90">Dyspozytor przyjmuje zgłoszenia 24/7. Podaj swoją lokalizację i model pojazdu.</p>
                    </div>
                    <a href="tel:+48793960058"
                        class="px-8 py-4 rounded-2xl bg-background-dark text-white font-800 text-lg hover:scale-105 active:scale-95 transition-transform flex items-center gap-3 shrink-0 shadow-xl">
                        <span class="material-symbols-outlined">call</span>
                        +48 793 960 058
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Instant search and filter for 236 locations
        (function () {
            const searchInput = document.getElementById('loc-search');
            const clearBtn = document.getElementById('loc-clear');
            const counter = document.getElementById('loc-counter');
            const noResults = document.getElementById('no-results');
            const cards = Array.from(document.querySelectorAll('.loc-card'));
            const letterGroups = Array.from(document.querySelectorAll('.letter-group'));
            const totalCount = <?php echo $totalLocations; ?>;

            if (!searchInput) return;

            function doFilter() {
                const query = searchInput.value.trim().toLowerCase();
                if (query.length > 0) {
                    clearBtn.classList.remove('hidden');
                } else {
                    clearBtn.classList.add('hidden');
                }

                let visibleCount = 0;

                letterGroups.forEach(group => {
                    const groupCards = group.querySelectorAll('.loc-card');
                    let groupVisibleCount = 0;

                    groupCards.forEach(card => {
                        const blob = card.getAttribute('data-search') || '';
                        if (!query || blob.includes(query)) {
                            card.classList.remove('hidden');
                            groupVisibleCount++;
                            visibleCount++;
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    if (groupVisibleCount === 0) {
                        group.classList.add('hidden');
                    } else {
                        group.classList.remove('hidden');
                    }
                });

                counter.textContent = visibleCount;

                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            }

            searchInput.addEventListener('input', doFilter);
            clearBtn.addEventListener('click', function () {
                searchInput.value = '';
                doFilter();
                searchInput.focus();
            });
        })();
    </script>

    <?php include 'footer.php'; ?>
    <?php include 'nav-mobile.php'; ?>
</body>

</html>
