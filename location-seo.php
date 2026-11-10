<?php
/**
 * SEO Landing Page Generator - HOLWAR
 * Ten plik generuje powtarzalne elementy SEO dla podstron lokalnych.
 */

function render_location_page($location, $slug)
{
    global $conn, $gtag_enabled; // jeśli potrzebne
    $full_title = "Pomoc Drogowa $location 24h | Laweta i Holowanie | HOLWAR";
    $canonical = "https://www.holwar.pl/pomoc-drogowa-$slug.php";
    $description = "Potrzebna pomoc drogowa w lokalizacji $location? HOLWAR oferuje szybkie holowanie, lawetę i pomoc na drodze 24/7. Czas dojazdu do 20 minut! Zadzwoń teraz.";
    ?>
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
        <title>
            <?php echo $full_title; ?>
        </title>
        <meta name="description" content="<?php echo $description; ?>">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&amp;icon_names=add_location_alt,air,airport_shuttle,analytics,arrow_back,arrow_forward,auto_towing,balance,battery_charging_full,build,build_circle,call,cancel_presentation,car_crash,car_rental,check_circle,close,construction,contact_phone,content_copy,content_cut,cookie,description,directions_car,distance,emergency,engineering,event_available,expand_more,feed,gavel,groups,handyman,help,info,inventory_2,local_gas_station,local_shipping,location_city,location_on,logout,mail,menu,minor_crash,near_me,payments,pin_drop,precision_manufacturing,quiz,refresh,schedule,share,social_leaderboard,sos,speed,star,swap_driving_apps_wheel,terminal,tire_repair,track_changes,verified,verified_user&amp;display=block"
            rel="stylesheet" />
        <link rel="icon" type="image/png" href="favicon.ico" />
        <link rel="canonical" href="<?php echo $canonical; ?>" />

        <!-- Product Schema -->
        <script type="application/ld+json">
                                    {
                                      "@context": "https://schema.org/",
                                      "@type": "Product",
                                      "name": "Pomoc Drogowa <?php echo $location; ?> - HOLWAR",
                                      "image": "https://www.holwar.pl/img/image_4.webp",
                                      "description": "Profesjonalne usługi pomocy drogowej i holowania w dzielnicy <?php echo $location; ?>. Dostępni 24/7.",
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
                                        "name": "Jak szybko dojedzie pomoc drogowa w lokalizacji <?php echo $location; ?>?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Czas dojazdu w lokalizacji <?php echo $location; ?> wynosi zazwyczaj od 15 do 25 minut. Posiadamy jednostki stacjonujące w różnych punktach Warszawy, co pozwala nam na błyskawiczną reakcję."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy Wasza pomoc drogowa w <?php echo $location; ?> działa również w nocy?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Tak, nasze usługi są dostępne 24 godziny na dobę, 7 dni w tygodniu, w tym we wszystkie święta i dni wolne od pracy."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy oferujecie holowanie busów i aut dostawczych w tej części miasta?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Oczywiście. Dysponujemy wzmocnionymi platformami hydraulicznymi, które pozwalają na bezpieczny transport pojazdów dostawczych, busów oraz lekkich maszyn budowlanych."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy mogę wezwać pomoc drogową do awaryjnego odpalenia auta w <?php echo $location; ?>?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Tak, oferujemy usługę awaryjnego uruchamiania pojazdów (odpalanie z boostera) dla aut osobowych i dostawczych z silnikami diesla oraz benzynowymi."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy pomagacie w wymianie koła na trasach w pobliżu <?php echo $location; ?>?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Pomagamy w bezpiecznej wymianie koła na drodze lub, w przypadku braku zapasu, oferujemy transport do najbliższego serwisu opon."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy oferujecie dowóz paliwa, jeśli zabraknie go w lokalizacji <?php echo $location; ?>?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Tak, dowieziemy odpowiedni rodzaj paliwa (ON, PB) we wskazane miejsce, abyś mógł kontynuować podróż do najbliższej stacji benzynowej."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy dysponujecie lawetą z niskim kątem wjazdu dla aut sportowych?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Specjalizujemy się w transporcie aut luksusowych i sportowych. Nasze lawety posiadają niski kąt najazdu, co gwarantuje pełne bezpieczeństwo pojazdu."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy wyciągacie pojazdy, które wypadły z drogi lub utknęły w błocie?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Tak, świadczymy usługi z zakresu ratownictwa drogowego, w tym wyciąganie aut z rowów, terenów zielonych oraz błota przy użyciu profesjonalnych wciągarek."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Czy obsługujecie awarie na pobliskich trasach ekspresowych i autostradach?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Obsługujemy wszystkie kluczowe trasy przebiegające w pobliżu lokalizacji <?php echo $location; ?>, zachowując najwyższe standardy bezpieczeństwa pracy na drodze."
                                        }
                                      }, {
                                        "@type": "Question",
                                        "name": "Jakie informacje podać podczas zgłaszania awarii w lokalizacji <?php echo $location; ?>?",
                                        "acceptedAnswer": {
                                          "@type": "Answer",
                                          "text": "Prosimy o podanie marki pojazdu, rodzaju usterki, możliwie dokładnej lokalizacji oraz informacji o tym, czy auto posiada sprawne koła i układ kierowniczy."
                                        }
                                      }]
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
                        <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain" width="504" height="152" loading="eager">
                    </a>
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="text-sm font-semibold hover:text-primary transition-colors"
                            href="index.php#services" data-i18n="nav.services">Usługi</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors"
                            href="index.php#how-it-works" data-i18n="nav.how_it_works">Jak to działa</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors" href="index.php#faq" data-i18n="nav.faq">FAQ</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors"
                            href="index.php#reviews" data-i18n="nav.reviews">Opinie</a>
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
                    <button id="mobile-menu-open" type="button" aria-label="Otwórz menu" data-i18n-attr="aria-label:nav.menu_open" class="md:hidden flex items-center justify-center text-white shrink-0"><span class="material-symbols-outlined text-3xl" aria-hidden="true">menu</span></button>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <?php render_holwar_hero(
            "Pomoc Drogowa $location",
            "Potrzebujesz lawety? Zepsuł Ci się samochód w lokalizacji $location? Jesteśmy najbliżej Ciebie! Oferujemy profesjonalne holowanie, wymianę koła, awaryjne odpalanie i dowóz paliwa."
        ); ?>

            <!-- Content Section -->
            <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-800 mb-8 uppercase italic">Szybka Pomoc Drogowa i Laweta
                        <?php echo $location; ?>
                    </h2>
                    <div class="prose prose-lg dark:prose-invert max-w-none text-slate-600 dark:text-slate-400">
                        <p class="mb-6">
                            Nasza firma specjalizuje się w świadczeniu kompleksowych usług z zakresu <strong>pomocy drogowej
                                w <?php echo $location; ?></strong>.
                            Działamy błyskawicznie, ponieważ doskonale znamy topografię tej części miasta oraz specyfikę
                            lokalnych tras. Bez względu na to, czy utknąłeś na głównej arterii komunikacyjnej,
                            czy na małej, osiedlowej uliczce, nasza <strong>laweta <?php echo $location; ?></strong> dotrze
                            do Ciebie w rekordowo krótkim czasie, zazwyczaj nie przekraczającym 20-30 minut od zgłoszenia.
                        </p>
                        <p class="mb-6">
                            Każdy kierowca w pewnym momencie może stanąć przed wyzwaniem, jakim jest nagła awaria pojazdu,
                            przebita opona czy brak paliwa w najmniej odpowiednim momencie. W takich sytuacjach kluczowe
                            jest posiadanie kontaktu do rzetelnej i sprawdzonej firmy. HOLWAR to zespół profesjonalistów,
                            którzy od lat wspierają kierowców w <?php echo $location; ?>, oferując nie tylko holowanie, ale
                            pełne wsparcie techniczne na drodze.
                        </p>
                        <div
                            class="my-10 bg-white dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/10 shadow-xl">
                            <h3 class="text-xl font-800 mb-4 uppercase italic text-primary">Dlaczego warto wybrać HOLWAR w
                                <?php echo $location; ?>?
                            </h3>
                            <ul class="list-disc pl-6 space-y-3 mb-8 text-base">
                                <li><strong>Błyskawiczny czas reakcji</strong> - nasze jednostki stacjonują strategicznie w
                                    całej Warszawie, co gwarantuje najszybszy dojazd do <?php echo $location; ?>.</li>
                                <li><strong>Nowoczesna flota lawet</strong> - dysponujemy autoplawetami wyposażonymi w
                                    hydrauliczne platformy, wciągarki oraz systemy zabezpieczające, co pozwala na bezpieczny
                                    transport każdego typu pojazdu.</li>
                                <li><strong>Transparentny cennik</strong> - nie stosujemy ukrytych opłat. Koszt usługi
                                    poznasz już podczas rozmowy telefonicznej z naszym dyspozytorem.</li>
                                <li><strong>Pełen profesjonalizm</strong> - nasi kierowcy to doświadczeni operatorzy, którzy
                                    dbają o bezpieczeństwo Twojego auta tak, jak o własne.</li>
                                <li><strong>Dostępność 24/7</strong> - awarie nie wybierają pory, dlatego we work without
                                    breaks, 365 days a year.</li>
                            </ul>
                            <!-- CTA 3 -->
                            <a href="tel:+48793960058"
                                class="inline-flex items-center gap-2 bg-primary text-background-dark px-6 py-3 rounded-xl font-800 transition-transform hover:scale-105">
                                <span class="material-symbols-outlined">call</span>
                                Zadzwoń: 793 960 058
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailed SEO Section -->
            <section class="py-24 overflow-hidden relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div class="order-2 lg:order-1 relative">
                            <div class="absolute -inset-4 bg-primary/20 blur-3xl rounded-full"></div>
                            <img src="img/image_1.jpg" alt="Laweta <?php echo $location; ?>"
                                class="relative z-10 rounded-[3rem] shadow-2xl border border-white/10 grayscale hover:grayscale-0 transition-all duration-700" loading="lazy">
                        </div>
                        <div class="order-1 lg:order-2">
                            <h2 class="text-3xl lg:text-5xl font-800 mb-8 uppercase italic leading-tight">Profesjonalne
                                <span class="text-primary">Holowanie</span> i Ratownictwo Drogowe
                            </h2>
                            <div class="space-y-6 text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                                <p>
                                    Usługi świadczone przez naszą firmę w lokalizacji
                                    <strong><?php echo $location; ?></strong> to znacznie więcej niż tylko prosty transport
                                    lawetą. Rozumiemy, że każda sytuacja drogowa jest inna, dlatego do każdego zlecenia
                                    podchodzimy w sposób indywidualny. Specjalizujemy się w ratownictwie drogowym, co
                                    obejmuje wyciąganie pojazdów z rowów, terenów zielonych, a także uwalnianie aut, które
                                    utknęły w błocie lub śniegu przy użyciu profesjonalnych wyciągarek i systemów pasów.
                                </p>
                                <p>
                                    Jeśli Twoje auto uległo awarii w <?php echo $location; ?>, a Ty nie chcesz tracić czasu
                                    na długotrwałe holowanie do odległego warsztatu, możemy zaproponować transport do
                                    sprawdzonego serwisu w Twojej okolicy. Współpracujemy z wieloma warsztatami
                                    mechanicznymi, co pozwala naszym klientom na szybszą naprawę pojazdu. Ponadto, oferujemy
                                    usługę <strong>holowania z OC sprawcy</strong> – w przypadku kolizji nie z Twojej winy,
                                    koszt transportu oraz wynajmu auta zastępczego może zostać w pełni pokryty przez
                                    ubezpieczyciela sprawcy zdarzenia.
                                </p>
                                <p>
                                    Nasza oferta w <?php echo $location; ?> obejmuje również transport pojazdów
                                    specjalistycznych. Przewozimy nie tylko samochody osobowe, ale także busy, motocykle,
                                    quady oraz maszyny budowlane (np. minikoparki czy podnośniki). Gwarantujemy pełne
                                    bezpieczeństwo ładunku dzięki zastosowaniu atestowanych pasów transportowych i stałemu
                                    monitorowaniu stanu zabezpieczeń podczas jazdy.
                                </p>
                                <!-- CTA 4 -->
                                <div class="pt-6">
                                    <a href="tel:+48793960058"
                                        class="inline-flex items-center gap-3 bg-background-dark dark:bg-primary text-white dark:text-background-dark px-10 py-5 rounded-2xl font-800 text-xl hover:scale-105 transition-transform shadow-2xl shadow-primary/20">
                                        <span class="material-symbols-outlined">sos</span>
                                        Potrzebuję Pomocy!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mobility Section -->
            <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#ee8c2b_0,transparent_50%)]">
                    </div>
                </div>
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-10 uppercase italic">Szybkie Wsparcie na Drodze w
                        <?php echo $location; ?>
                    </h2>
                    <div class="text-lg text-slate-300 space-y-8 leading-relaxed mb-12">
                        <p>
                            Wiele sytuacji, które unieruchamiają pojazd w <strong><?php echo $location; ?></strong>, można
                            rozwiązać dzięki szybkiej interwencji naszej ekipy pomocy drogowej. Nie prowadzimy napraw
                            mechanicznych na miejscu - naszą specjalnością jest bezpieczne holowanie oraz szybka pomoc w
                            sytuacjach awaryjnych (akumulator, koło, paliwo).
                        </p>
                        <p>
                            Jedną z naszych najpopularniejszych usług jest <strong>awaryjne odpalanie auta</strong>.
                            Jeśli
                            Twój akumulator odmówił współpracy rano pod domem lub po długim postoju na parkingu w
                            <?php echo $location; ?>, przyjedziemy z profesjonalnym boosterem i uruchomimy silnik w
                            kilka
                            sekund. Posiadamy urządzenia o dużej mocy rozruchowej, które bez trudu radzą sobie z autami
                            osobowymi, dostawczymi oraz ciężarówkami.
                        </p>
                        <p>
                            Zabrakło paliwa? Dowieziemy odpowiedni rodzaj benzyny lub oleju napędowego bezpośrednio pod
                            wskazany adres w lokalizacji <?php echo $location; ?>, co pozwoli Ci na bezpieczny dojazd do
                            najbliższej stacji. To szybkie i wygodne rozwiązanie, które oszczędza Twój czas i stres związany
                            z szukaniem stacji na piechotę.
                        </p>
                        <p>
                            Wymiana koła to kolejna czynność, w której chętnie wyręczamy naszych klientów. Jeśli
                            złapałeś "gumę" w <?php echo $location; ?>, a odkręcenie śrub czy podniesienie auta sprawia
                            problem, nasi pracownicy zrobią to szybko i bezpiecznie, korzystając z profesjonalnego
                            sprzętu. Dzięki temu unikasz zabrudzenia ubrań i masz pewność, że koło zapasowe jest
                            zamontowane prawidłowo.
                        </p>
                        <p>
                            W sytuacjach, gdy usterka jest poważniejsza, zapewniamy <strong>bezpieczne
                                holowanie</strong> do dowolnego warsztatu wskazanego przez klienta. Nasze lawety są
                            przystosowane do transportu aut o niskim zawieszeniu, SUV-ów oraz busów, co gwarantuje pełne
                            bezpieczeństwo Twojego mienia podczas transportu.
                        </p>
                    </div>
                    <!-- CTA 5 -->
                    <a href="tel:+48793960058"
                        class="inline-flex items-center gap-4 bg-primary text-background-dark px-12 py-6 rounded-2xl font-800 text-2xl hover:scale-110 active:scale-95 transition-all shadow-2xl shadow-primary/40">
                        <span class="material-symbols-outlined text-3xl">call</span>
                        793 960 058 – ZADZWOŃ TERAZ
                    </a>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-24">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-800 mb-12 text-center uppercase italic">Najczęstsze Pytania -
                        <?php echo $location; ?>
                    </h2>
                    <div class="space-y-4">
                        <div
                            class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                            <h4 class="font-800 text-lg mb-2 text-primary">Jak szybko dojeżdżacie do
                                <?php echo $location; ?>?
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400">Zazwyczaj docieramy na miejsce w 15–25 minut
                                dzięki strategicznemu rozmieszczeniu naszych jednostek w Warszawie. W godzinach szczytu czas
                                ten może ulec nieznacznemu wydłużeniu, jednak zawsze informujemy klienta o realnym czasie
                                dotarcia.</p>
                        </div>
                        <div
                            class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                            <h4 class="font-800 text-lg mb-2 text-primary">Czy pomoc drogowa działa w święta w lokalizacji
                                <?php echo $location; ?>?
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400">Tak, jesteśmy dostępni 365 dni w roku, również w
                                niedziele i wszystkie dni świąteczne o każdej porze. Nasz dyspozytor czuwa przy telefonie 24
                                godziny na dobę.</p>
                        </div>
                        <div
                            class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                            <h4 class="font-800 text-lg mb-2 text-primary">Ile kosztuje laweta w lokalizacji
                                <?php echo $location; ?>?
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400">Koszt usługi zależy od rodzaju pojazdu oraz
                                dystansu holowania. W obrębie <?php echo $location; ?> ceny zaczynają się od bardzo
                                atrakcyjnych stawek. Dokładną wycenę otrzymasz telefonicznie przed wysłaniem jednostki.</p>
                        </div>
                        <div
                            class="p-6 bg-slate-100 dark:bg-white/5 rounded-2xl border border-slate-200 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 group">
                            <h4 class="font-800 text-lg mb-2 text-primary">Czy możecie odholować auto do mojego zaufanego
                                warsztatu?</h4>
                            <p class="text-slate-600 dark:text-slate-400">Oczywiście. Transportujemy pojazdy pod dowolny
                                adres wskazany przez klienta – może to być warsztat, ASO, parking strzeżony lub prywatna
                                posesja zarówno w Warszawie, jak i w całej Polsce.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include 'footer.php'; ?>
        <?php include 'nav-mobile.php'; ?>
    </body>

    </html>
    <?php
}
?>