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
    <?php require_once __DIR__ . '/hero.php'; render_holwar_hero_head('pomoc-drogowa-tir-hero'); ?>
    <title>Mobilny Serwis TIR &amp; Naprawa TIR 24h | Holowanie Ciężarowe | HOLWAR</title>
    <meta name="description"
        content="Mobilny serwis TIR 24/7 – szybka naprawa TIR na drodze, serwis tir ciężarowe oraz profesjonalne holowanie ciężarowe. Warszawa, S17, S8, A2, DK50 i okolice. Zadzwoń: 793 960 058!" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="https://www.holwar.pl/pomoc-drogowa-tir.php" />

    <!-- Product / Service Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Mobilny Serwis TIR, Naprawa TIR i Holowanie Ciężarowe - HOLWAR",
      "image": "https://www.holwar.pl/img/image_4.webp",
      "description": "Mobilny serwis TIR 24/7. Naprawa TIR na drodze, serwis tir ciężarowe, usuwanie awarii pneumatyki, elektryki, diagnostyka oraz holowanie ciężarowe. Warszawa, drogi S17, S8, A2, DK50.",
      "brand": {
        "@type": "Brand",
        "name": "HOLWAR"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "bestRating": "5",
        "ratingCount": "1284"
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
        "name": "Jakie awarie usuwa mobilny serwis TIR bezpośrednio na drodze?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Nasz mobilny serwis TIR usuwa na miejscu m.in. awarie układu pneumatycznego (zawory Wabco, Knorr, siłowniki, nieszczelności przewodów tecalan), układu hamulcowego (zaciski, klocki), wymianę poduszek zawieszenia, awarie elektryki 24V (alternatory, rozruszniki), układu paliwowego (odpowietrzanie, filtry), diagnostykę komputerową błędów silnika i naczep, a także mobilną wulkanizację i wymianę kół TIR."
        }
      }, {
        "@type": "Question",
        "name": "Co w sytuacji, gdy naprawa TIR na miejscu nie jest możliwa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Jeśli usterka wymaga interwencji stacjonarnej (np. zatarta skrzynia, uszkodzony most), natychmiast organizujemy holowanie ciężarowe naszym ciężkim holownikiem z widłami i wysięgnikiem do wybranej bazy, warsztatu lub serwisu partnerskiego."
        }
      }, {
        "@type": "Question",
        "name": "Jaki jest czas dojazdu serwisu mobilnego TIR i pomocy drogowej?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Czas dojazdu wynosi średnio od 15 do 20 minut na terenie Warszawy oraz wzdłuż tras ekspresowych i autostrad S17, S8, A2, S2 i DK50. Dysponujemy jednostkami dyżurującymi 24/7 w strategicznych punktach regionu."
        }
      }, {
        "@type": "Question",
        "name": "Czy serwis tir ciężarowe działa całodobowo w nocy i święta?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tak, dyżurujemy 24 godziny na dobę, 7 dni w tygodniu, 365 dni w roku. Niezależnie od pory dnia czy nocy możesz zadzwonić pod 793 960 058."
        }
      }, {
        "@type": "Question",
        "name": "Jakie marki pojazdów ciężarowych i naczep obsługujecie?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Obsługujemy wszystkie wiodące marki ciągników siodłowych i ciężarówek: Scania, DAF, MAN, Volvo, Mercedes-Benz, Renault Trucks, Iveco oraz naczepy i przyczepy marek Schmitz Cargobull, Krone, Wielton, Kögel, Schwarzmüller z układami Wabco, Knorr-Bremse i Haldex."
        }
      }, {
        "@type": "Question",
        "name": "Czy wystawiacie fakturę VAT i jakie są formy płatności?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Wystawiamy pełną fakturę VAT 23%. Na miejscu akceptujemy płatności kartą, BLIK, gotówką, a dla stałych firm transportowych i spedycyjnych oferujemy możliwość rozliczenia przelewem."
        }
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
                        href="index.php#services" data-i18n="nav.services">Usługi</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#how-it-works" data-i18n="nav.how_it_works">Jak to działa</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="index.php#reviews" data-i18n="nav.reviews">Opinie</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#about" data-i18n="nav.about">O nas</a>
                </nav>
                <div class="flex items-center gap-2 sm:gap-4">
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
        <!-- Hero Section -->
        <?php render_holwar_hero(
            'Holowanie Laweta TIR & CIĘŻAROWE',
            'Ekspresowa pomoc TIR na trasie, kompleksowy serwis tir ciężarowe oraz profesjonalne holowanie ciężarowe 24/7. Diagnozujemy i usuwamy usterki bezpośrednio na drodze lub parkingu.',
            '<p>S17 / S8 / A2 / DK50 · Warszawa, Garwolin, Kołbiel, Mińsk Maz., Otwock, Piaseczno, Ryki</p><p>Mobilny warsztat · Telefon 24/7 · Faktura VAT 23%</p>',
            'pomoc-drogowa-tir-hero',
            'Ciężka laweta przewożąca biały bus na słonecznej, jesiennej drodze.'
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
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">local_shipping</span>
                    <p class="text-3xl font-800">TIR</p>
                    <p class="text-sm text-slate-500 font-medium">Pojazdy ciężarowe</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">verified</span>
                    <p class="text-3xl font-800">100%</p>
                    <p class="text-sm text-slate-500 font-medium">Profesjonalizmu</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">distance</span>
                    <p class="text-3xl font-800">S17 / S8</p>
                    <p class="text-sm text-slate-500 font-medium">Obsługiwane trasy</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-24 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Kompleksowa obsługa w trasie
                </div>
                <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Serwis TIR Ciężarowe &amp; Naprawa TIR</h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">
                    Aż 85% awarii na drodze usuwamy na miejscu bez konieczności holowania. Gdy usterka jest poważniejsza, nasz ciężki sprzęt zapewnia natychmiastowe holowanie ciężarowe.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1: Naprawa TIR -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">build</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Naprawa TIR na Drodze</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Mobilna naprawa pneumatyki, zacisków, zaworów Wabco/Knorr, miechów zawieszenia, przewodów powietrznych i&nbsp;hydrauliki siłowej.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-primary inline-flex items-center gap-1 hover:underline">
                        Zadzwoń po mechanika <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Service 2: Serwis TIR Ciężarowe -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">terminal</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Serwis TIR Ciężarowe</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Komputerowa diagnostyka ciągników i&nbsp;naczep, kasowanie błędów, diagnostyka AdBlue/DPF, serwis elektryki 24V, alternatory i&nbsp;rozruszniki.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                        Szybka diagnoza <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Service 3: Holowanie Ciężarowe -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">auto_towing</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Holowanie Ciężarowe</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Ciężki holownik z&nbsp;widłami i&nbsp;wysięgnikiem do holowania ciągników siodłowych, naczep, zestawów tandem, solówek i&nbsp;autobusów.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-primary inline-flex items-center gap-1 hover:underline">
                        Zamów holownik TIR <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Service 4: Wyciąganie z Rowu -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">minor_crash</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Wyciąganie z&nbsp;Rowu</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Mocne wyciągarki hydrauliczne o&nbsp;uciągu do kilkudziesięciu ton. Bezpieczne stawianie ciężarówek na koła i&nbsp;wyciąganie z&nbsp;błota.</p>
                    <a href="tel:+48793960058" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                        Pomoc w terenie <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Additional services row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <!-- Service 5: Odpalanie Silnika 24V -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Odpalanie 24V (Booster)</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Awaryjne uruchamianie silników ciężarowych z&nbsp;profesjonalnych boosterów 24V dużej mocy. Test ładowania i&nbsp;akumulatorów.</p>
                </div>
                <!-- Service 6: Mobilna Wymiana Koła TIR -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">swap_driving_apps_wheel</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Mobilny Serwis Opon TIR</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-4">Wymiana kół w&nbsp;ciężarówkach i&nbsp;naczepach, odkręcanie zapieczonych śrub kluczami przekładniowymi, naprawa przebić na trasie.</p>
                    <a href="wulkanizacja-mobilna.php" class="text-xs font-bold text-accent-blue inline-flex items-center gap-1 hover:underline">
                        Wulkanizacja mobilna TIR <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Service 7: Dowóz Paliwa i Odpowietrzanie -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Układ Paliwowy &amp; ON</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Awaryjny dowóz oleju napędowego, wymiana zamarzniętych lub zanieczyszczonych filtrów, profesjonalne odpowietrzanie silników diesla.</p>
                </div>
                <!-- Service 8: Przeładunek Towaru -->
                <div
                    class="group bg-white dark:bg-card-dark p-8 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all shadow-xl shadow-slate-200/50 dark:shadow-none">
                    <div
                        class="w-14 h-14 bg-accent-blue/10 rounded-xl flex items-center justify-center text-accent-blue mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">inventory_2</span>
                    </div>
                    <h3 class="text-xl font-800 mb-3">Przeładunek Towaru</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Organizacja przeładunku palet z&nbsp;uszkodzonej naczepy na podstawiony zestaw, zabezpieczenie ładunku pasami i&nbsp;matami.</p>
                </div>
            </div>

            <!-- Inter-section Lead Gen Call Banner -->
            <div class="mt-12 bg-gradient-to-r from-card-dark via-[#252525] to-card-dark p-8 rounded-3xl border border-primary/30 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl">
                <div class="flex items-center gap-5">
                    <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-4xl">emergency</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-800 text-white uppercase italic">Awaria ciężarówki na trasie? Zadzwoń od razu</h4>
                        <p class="text-slate-400 text-sm">Podaj lokalizację i&nbsp;objawy usterki. Dyspozytor natychmiast wysyła mobilny warsztat lub holownik.</p>
                    </div>
                </div>
                <a href="tel:+48793960058"
                    class="animate-pulse-cta bg-primary text-background-dark px-8 py-4 rounded-xl font-800 text-lg flex items-center gap-3 shrink-0 hover:scale-105 transition-transform shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-2xl">call</span>
                    793 960 058
                </a>
            </div>
        </section>

        <!-- SEO Content Section -->
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl font-800 mb-6 italic uppercase leading-tight">Mobilny Serwis TIR &amp; Naprawa Ciężarowych –
                            <span class="text-primary">Warszawa i&nbsp;Trasy S17, S8, A2, DK50</span></h2>
                        <div class="prose prose-lg dark:prose-invert max-w-none text-slate-600 dark:text-slate-400">
                            <p class="mb-6 leading-relaxed">
                                Awaria ciągnika lub naczepy w&nbsp;trasie to nie tylko stres dla kierowcy, ale przede wszystkim ryzyko opóźnienia dostawy i&nbsp;wysokich kar. <strong>HOLWAR</strong> oferuje profesjonalny <strong>mobilny serwis TIR</strong> oraz ekspresową <strong>naprawę TIR na drodze</strong>, dostępną całodobowo na terenie Warszawy, Garwolina, Kołbiela, Otwocka, Mińska Mazowieckiego, Piaseczna, Ryk i&nbsp;wzdłuż kluczowych korytarzy tranzytowych.
                            </p>
                            <p class="mb-6 leading-relaxed">
                                Nasz mobilny warsztat wyposażony jest w&nbsp;komputerową diagnostykę silników i&nbsp;naczep, zasilanie 24V, kompresory oraz podzespoły zamienne. Zapewniamy kompleksowy <strong>serwis tir ciężarowe</strong> dla pojazdów marek Scania, MAN, DAF, Volvo, Mercedes-Benz, Renault i&nbsp;Iveco. Aż 85-90% usterek pneumatyki, zacisków, zaworów i&nbsp;elektryki usuwamy bezpośrednio na pasie awaryjnym lub parkingu MOP.
                            </p>
                            <p class="mb-6 leading-relaxed">
                                W&nbsp;sytuacji, gdy zakres uszkodzeń uniemożliwia dalszą jazdę, realizujemy natychmiastowe <strong>holowanie ciężarowe</strong>. Dysponujemy ciężkimi holownikami z&nbsp;widłami i&nbsp;wyciągarkami hydraulicznymi o&nbsp;sile uciągu do kilkudziesięciu ton, które bez problemu przetransportują załadowany zestaw do bazy lub warsztatu.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 shadow-xl">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Dlaczego nasz Serwis Mobilny TIR?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Naprawa TIR na miejscu</strong> – usuwamy awarię w&nbsp;trasie, oszczędzając czas i&nbsp;pieniądze Twojej firmy.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Własne holowanie ciężarowe</strong> – jeśli naprawa polowa jest niemożliwa, dysponujemy ciężkim holownikiem z&nbsp;widłami.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Błyskawiczny dojazd 15–20 min</strong> – dyżurujemy 24/7 w&nbsp;strategicznych punktach przy S17, S8, A2 i&nbsp;DK50.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Faktura VAT 23% i&nbsp;wygodne płatności</strong> – akceptujemy karty płatnicze, gotówkę oraz przelewy dla firm.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-0.5">verified</span>
                                    <span><strong>Diagnostyka &amp; części ze sobą</strong> – w&nbsp;busie serwisowym posiadamy części zamienne, złączki, zawory i&nbsp;paski.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-primary text-background-dark p-8 rounded-3xl shadow-xl shadow-primary/20">
                            <h3 class="text-2xl font-800 mb-4 italic uppercase">Awaria TIR-a? Działamy!</h3>
                            <p class="font-bold mb-6">Nasi operatorzy są gotowi do natychmiastowej akcji – niezależnie od
                                pory dnia, lokalizacji i&nbsp;wielkości pojazdu.</p>
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
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Obsługiwane Obszary</h2>
                    <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">Zapewniamy pomoc drogową TIR
                        na&nbsp;terenie całego Mazowsza. Oto główne obszary naszej działalności:</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <a href="index.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_city</span>
                        <p class="font-800 text-lg">Warszawa</p>
                        <p class="text-xs text-slate-500 mt-1">Całe miasto</p>
                    </a>
                    <a href="pomoc-drogowa-otwock.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Otwock</p>
                        <p class="text-xs text-slate-500 mt-1">i&nbsp;okolice</p>
                    </a>
                    <a href="pomoc-drogowa-kolbiel.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Kołbiel</p>
                        <p class="text-xs text-slate-500 mt-1">S17</p>
                    </a>
                    <a href="pomoc-drogowa-garwolin.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Garwolin</p>
                        <p class="text-xs text-slate-500 mt-1">Trasa Lubelska</p>
                    </a>
                    <a href="pomoc-drogowa-piaseczno.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Piaseczno</p>
                        <p class="text-xs text-slate-500 mt-1">i&nbsp;okolice</p>
                    </a>
                    <a href="pomoc-drogowa-ryki.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Ryki</p>
                        <p class="text-xs text-slate-500 mt-1">i&nbsp;okolice</p>
                    </a>
                    <a href="pomoc-drogowa-minsk-mazowiecki.php"
                        class="group bg-white dark:bg-card-dark p-6 rounded-2xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all text-center shadow-lg shadow-slate-200/30 dark:shadow-none">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3 group-hover:scale-110 transition-transform inline-block">location_on</span>
                        <p class="font-800 text-lg">Mińsk Mazowiecki</p>
                        <p class="text-xs text-slate-500 mt-1">i&nbsp;okolice</p>
                    </a>
                    <div
                        class="bg-primary/10 dark:bg-primary/5 p-6 rounded-2xl border border-primary/20 text-center flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-4xl mb-3">add_location_alt</span>
                        <p class="font-800 text-lg text-primary">Cała Okolica</p>
                        <p class="text-xs text-slate-500 mt-1">Mazowsze</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed SEO Section -->
        <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div
                    class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#ee8c2b_0,transparent_50%)]">
                </div>
            </div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <h2 class="text-3xl lg:text-5xl font-800 mb-10 uppercase italic text-center">Mobilny Serwis TIR, Naprawa i&nbsp;Holowanie Ciężarowe</h2>
                <div class="text-lg text-slate-300 space-y-8 leading-relaxed mb-12">
                    <p>
                        <strong class="text-white">Mobilny serwis TIR i&nbsp;naprawa samochodów ciężarowych</strong> to specjalistyczna usługa stworzona po to, by maksymalnie skrócić czas przestoju Twojego pojazdu. HOLWAR oferuje kompleksowe wsparcie dla firm transportowych, kierowców zawodowych i&nbsp;spedytorów na terenie <strong class="text-white">Warszawy, Otwocka, Kołbiela, Garwolina, Piaseczna, Ryk, Mińska Mazowieckiego</strong> oraz kluczowych dróg tranzytowych Mazowsza.
                    </p>
                    <p>
                        Zamiast od razu decydować się na kosztowne ściąganie pojazdu do serwisu, nasz mobilny mechanik TIR diagnozuje usterkę i&nbsp;wykonuje <strong class="text-white">naprawę TIR na miejscu</strong>. Naprawiamy układy pneumatyczne EBS/ABS, zawory poziomowania, zaciski hamulcowe, pęknięte przewody tecalan, przewody paliwowe oraz instalacje elektryczne 24V. W&nbsp;przypadku zablokowanych hamulców lub wystrzału opony oferujemy ekspresowy serwis mobilny w&nbsp;trasie.
                    </p>
                    <p>
                        Jeśli usterka okaże się zbyt rozległa do naprawy polowej, natychmiast zabezpieczamy pojazd i&nbsp;wykonujemy profesjonalne <strong class="text-white">holowanie ciężarowe</strong>. Nasza flota obejmuje ciężkie holowniki z&nbsp;widłami i&nbsp;wysięgnikiem oraz mocne <strong class="text-white">wyciągarki hydrauliczne</strong>, dzięki którym bezpiecznie wyciągamy zestawy z&nbsp;rowów, stawiamy przewrócone naczepy i&nbsp;holujemy ciągniki siodłowe z&nbsp;ładunkiem. W&nbsp;razie potrzeby organizujemy także <strong class="text-white">przeładunek towaru</strong> na naczepę zastępczą.
                    </p>
                    <p>
                        Dyżurujemy na strategicznych ciągach komunikacyjnych: trasie ekspresowej <strong class="text-white">S17</strong> (Warszawa – Lublin), autostradzie <strong class="text-white">A2</strong>, trasie <strong class="text-white">S8</strong>, Południowej Obwodnicy Warszawy <strong class="text-white">S2</strong> oraz obwodnicy tranzytowej TIR <strong class="text-white">DK50</strong>. Zadzwoń pod numer <strong class="text-white">793 960 058</strong> – mechanik wyjeżdża bezzwłocznie!
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
                    <h2 class="text-3xl font-800 uppercase italic">Najczęstsze Pytania – Serwis TIR &amp; Naprawa Ciężarowe</h2>
                </div>
                <div class="space-y-4">
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Jakie awarie usuwa mobilny serwis TIR na drodze?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Nasz mobilny mechanik usuwa na trasie awarie pneumatyki (zawory Wabco/Knorr, miechy, przewody), układu hamulcowego (zaciski, klocki), elektryki 24V (alternatory, rozruszniki), układu paliwowego (filtry, odpowietrzanie), diagnostykę komputerową błędów silnika/AdBlue oraz awaryjne odpalanie i&nbsp;wymianę kół.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Co jeśli naprawa TIR na trasie nie jest możliwa?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Gdy usterka wymaga podnośnika kolumnowego lub demontażu skrzyni, natychmiast organizujemy <strong>holowanie ciężarowe</strong> naszym ciężkim holownikiem z&nbsp;widłami do bazy firmy, autoryzowanego serwisu lub warsztatu.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Jaki jest czas dojazdu serwisu mobilnego TIR?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Średni czas dojazdu to 15–20 minut w&nbsp;rejonie Warszawy oraz na trasach ekspresowych i&nbsp;autostradach S17, S8, A2, S2 i&nbsp;DK50 dzięki strategicznemu rozlokowaniu pojazdów technicznych.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy serwis tir ciężarowe działa w&nbsp;nocy i&nbsp;święta?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Tak, pełnimy całodobowy dyżur 24/7/365. Odbieramy telefony natychmiast i&nbsp;wyjeżdżamy do awarii również w&nbsp;niedziele i&nbsp;dni świąteczne.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Jakie marki pojazdów ciężarowych serwisujecie?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Obsługujemy ciągniki siodłowe i&nbsp;ciężarówki marek Scania, MAN, DAF, Volvo, Mercedes-Benz, Renault, Iveco oraz wszystkie naczepy: Schmitz, Krone, Wielton, Kögel z&nbsp;układami Wabco, Knorr i&nbsp;Haldex.</p>
                    </div>
                    <div
                        class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                        <h3 class="font-800 text-lg mb-2 text-primary">Czy wystawiacie fakturę VAT 23% i&nbsp;jakie są formy płatności?</h3>
                        <p class="text-slate-600 dark:text-slate-400">Tak, wystawiamy pełną fakturę VAT. Akceptujemy płatności kartą płatniczą u&nbsp;mechanika, BLIK, gotówkę, a&nbsp;dla firm spedycyjnych oferujemy również przelew.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-primary">
            <div class="max-w-4xl mx-auto px-6 text-center text-background-dark">
                <h2 class="text-4xl md:text-5xl font-800 mb-8 leading-tight italic uppercase">Awaria Ciężarówki? Zadzwoń po Mobilny Serwis TIR!</h2>
                <p class="text-background-dark/80 text-xl font-bold mb-12 italic uppercase">Mechanicy z&nbsp;mobilnym warsztatem i&nbsp;ciężkim holownikiem są w&nbsp;ciągłej gotowości. Odbieramy od ręki!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a class="animate-pulse-cta bg-background-dark text-primary px-10 py-5 rounded-xl font-800 text-2xl flex items-center justify-center gap-3 hover:scale-105 transition-transform shadow-2xl"
                        href="tel:+48793960058">
                        <span class="material-symbols-outlined text-3xl">call</span>
                        793 960 058
                    </a>
                </div>
                <p class="mt-8 text-background-dark/80 text-sm font-bold uppercase tracking-widest">Mobilny Serwis TIR • Naprawa Ciężarowe • Holowanie Ciężarowe • Warszawa • S17 • S8 • A2 • DK50 • 24/7</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'cookie-consent.php'; ?>
    <?php include 'nav-mobile.php'; ?>
</body>

</html>
