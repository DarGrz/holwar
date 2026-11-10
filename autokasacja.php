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
    <?php require_once __DIR__ . '/hero.php'; render_holwar_hero_head('autokasacja-panorama', 1024); ?>
    <title>Autokasacja Warszawa | Demontaż i Złomowanie Pojazdów | HOLWAR</title>
    <meta name="description"
        content="Profesjonalna autokasacja w Warszawie. Złomowanie pojazdów powypadkowych, starych i uszkodzonych. Odbiór lawetą i dokumenty do wyrejestrowania auta." />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="canonical" href="https://www.holwar.pl/autokasacja.php" />
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
                    <img src="img/holwar-logo-wide.png" alt="HOLWAR Pomoc Drogowa" class="h-10 w-auto object-contain"
                        width="504" height="152" loading="eager">
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
            'Autokasacja Warszawa',
            'Profesjonalna autokasacja i złomowanie pojazdów. Odbieramy auta w każdym stanie i wystawiamy zaświadczenia niezbędne do wyrejestrowania pojazdu.',
            '<p>Odbiór lawetą · Demontaż pojazdów · Komplet dokumentów</p><p>Zadzwoń lub wyślij SMS z danymi pojazdu, aby ustalić szczegóły odbioru.</p><a href="#how-it-works">Jak to działa?</a>',
            'autokasacja-panorama',
            'Autokasacja i złomowanie pojazdów.',
            512,
            1024
        ); ?>

        <!-- Process Section -->
        <section id="how-it-works" class="py-24 bg-white dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Prosty Proces Złomowania</h2>
                    <p class="text-slate-600 dark:text-slate-400 max-w-xl mx-auto">Z nami zezłomujesz pojazd w trzech
                        prostych krokach. Bez stresu, bez zbędnych formalności.</p>
                    <div class="w-24 h-1.5 bg-primary mx-auto rounded-full mt-6"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group relative">
                        <div
                            class="absolute -top-6 left-8 bg-primary text-background-dark w-12 h-12 rounded-2xl flex items-center justify-center font-800 text-xl shadow-lg shadow-primary/20">
                            01
                        </div>
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 mt-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">contact_phone</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4 text-slate-900 dark:text-white">Kontakt i Zgłoszenie</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Dzwonisz do nas pod numer <a href="tel:+48793960058"
                                class="text-primary font-bold hover:underline">+48 793 960 058</a>. Wystarczy podać
                            markę, model, rocznik oraz ogólny stan pojazdu, abyśmy mogli ustalić szczegóły odbioru.
                        </p>
                    </div>
                    <!-- Step 2 -->
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group relative">
                        <div
                            class="absolute -top-6 left-8 bg-primary text-background-dark w-12 h-12 rounded-2xl flex items-center justify-center font-800 text-xl shadow-lg shadow-primary/20">
                            02
                        </div>
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 mt-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">auto_towing</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4 text-slate-900 dark:text-white">Odbiór Pojazdu</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Umawiamy dogodny dla Ciebie termin odbioru. Przyjedziemy naszą własną lawetą pod wskazany
                            adres na terenie Warszawy lub okolic i przetransportujemy niesprawny pojazd do stacji
                            demontażu.
                        </p>
                    </div>
                    <!-- Step 3 -->
                    <div
                        class="bg-slate-50 dark:bg-card-dark p-8 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary transition-all group relative">
                        <div
                            class="absolute -top-6 left-8 bg-primary text-background-dark w-12 h-12 rounded-2xl flex items-center justify-center font-800 text-xl shadow-lg shadow-primary/20">
                            03
                        </div>
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6 mt-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-4xl">feed</span>
                        </div>
                        <h3 class="text-2xl font-800 mb-4 text-slate-900 dark:text-white">Dokumenty i Formalności</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Na miejscu sprawdzamy dokumenty auta, podpisujemy niezbędne papiery i wręczamy oficjalne
                            zaświadczenie o demontażu. Strona formalna zajmuje zaledwie kilkanaście
                            minut.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vehicle Types Section -->
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Jakie Pojazdy Złomujemy?</h2>
                    <p class="text-slate-600 dark:text-slate-400 max-w-xl mx-auto">Przyjmiemy pojazdy każdego rodzaju i
                        w każdym stanie technicznym oraz wizualnym.</p>
                    <div class="w-24 h-1.5 bg-primary mx-auto rounded-full mt-6"></div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl text-center shadow-lg shadow-slate-200/50 dark:shadow-none border border-transparent dark:border-white/5 hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">directions_car</span>
                        <h4 class="text-xl font-bold mb-2">Samochody Osobowe</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Auta stare, zaniedbane, zardzewiałe,
                            wyeksploatowane, nienadające się do dalszej jazdy.</p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl text-center shadow-lg shadow-slate-200/50 dark:shadow-none border border-transparent dark:border-white/5 hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">airport_shuttle</span>
                        <h4 class="text-xl font-bold mb-2">Dostawcze i Busy</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Pojazdy pofirmowe z dużymi przebiegami,
                            uszkodzonym silnikiem lub skrzynią biegów.</p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl text-center shadow-lg shadow-slate-200/50 dark:shadow-none border border-transparent dark:border-white/5 hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">car_crash</span>
                        <h4 class="text-xl font-bold mb-2">Powypadkowe i Wraki</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Pojazdy po zderzeniach, pożarach,
                            zalaniach, z poważnymi uszkodzeniami konstrukcyjnymi.</p>
                    </div>
                    <div
                        class="bg-white dark:bg-card-dark p-8 rounded-3xl text-center shadow-lg shadow-slate-200/50 dark:shadow-none border border-transparent dark:border-white/5 hover:border-primary transition-all">
                        <span class="material-symbols-outlined text-primary text-5xl mb-4">cancel_presentation</span>
                        <h4 class="text-xl font-bold mb-2">Bez OC i Przeglądu</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Pojazdy bez aktualnych badań technicznych
                            lub ubezpieczenia OC, które zalegają na posesjach.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="py-24 bg-white dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-800 mb-8 italic uppercase leading-tight">Dlaczego Warto
                            <span class="text-primary">Wybrać Nas?</span>
                        </h2>
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                            Jesteśmy doświadczoną firmą stacjonującą w Warszawie. Zapewniamy całkowite bezpieczeństwo
                            prawne. Współpracując z nami, masz pewność, że proces kasacji przebiegnie w pełnej zgodzie z
                            polskimi przepisami o ochronie środowiska.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="bg-primary/10 p-2.5 rounded-lg text-primary shrink-0">
                                    <span class="material-symbols-outlined">gavel</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">100% legalności i bezpieczeństwa</h4>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm">Wydajemy oficjalne
                                        zaświadczenia ze stacji demontażu pojazdów, które są jedyną podstawą do
                                        wyrejestrowania auta w Wydziale Komunikacji.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-primary/10 p-2.5 rounded-lg text-primary shrink-0">
                                    <span class="material-symbols-outlined">event_available</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Sprawna organizacja odbioru</h4>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm">Ustalamy termin i miejsce
                                        odbioru oraz dobieramy transport do stanu pojazdu.
                                        Pomagamy przygotować auto do przekazania do demontażu.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-primary/10 p-2.5 rounded-lg text-primary shrink-0">
                                    <span class="material-symbols-outlined">local_shipping</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Transport lawetą</h4>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm">Nie musisz martwić się o
                                        dostarczenie auta do punktu kasacji. Dysponujemy nowoczesnymi lawetami, którymi
                                        odbierzemy pojazd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary/20 rounded-[3rem] rotate-3 blur-2xl"></div>
                        <div
                            class="relative bg-slate-200 dark:bg-white/5 rounded-[3rem] h-[450px] w-full overflow-hidden border border-slate-300 dark:border-white/10 group">
                            <div class="absolute inset-0 bg-center bg-cover opacity-90 transition-all duration-700"
                                style="background-image: url('img/oferta_hero.jpg');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
                            <div
                                class="absolute bottom-8 left-8 right-8 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 text-white">
                                <p class="font-bold text-lg">Złomowanie aut 24/7</p>
                                <p class="text-white/80 text-sm">Szybki dojazd na terenie całej Warszawy i okolicznych
                                    tras.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-24 bg-slate-100 dark:bg-white/[0.02]">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-800 mb-4 italic uppercase">Częste Pytania</h2>
                    <p class="text-slate-600 dark:text-slate-400">Dowiedz się więcej o procedurze kasacji i złomowania
                        pojazdu w Warszawie.</p>
                    <div class="w-24 h-1.5 bg-primary mx-auto rounded-full mt-6"></div>
                </div>
                <div class="space-y-4">
                    <!-- FAQ 1 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-white dark:bg-card-dark rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-slate-50 dark:hover:bg-white/10">
                            <span class="text-lg font-800 pr-8 text-slate-900 dark:text-white">Jakie dokumenty są
                                niezbędne do złomowania pojazdu?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Aby dokonać kasacji auta potrzebujesz:
                                <ul class="list-disc pl-5 mt-2 space-y-1">
                                    <li>Dowodu rejestracyjnego pojazdu (lub zaświadczenia z Wydziału Komunikacji, jeśli
                                        dowód został zagubiony lub zatrzymany przez policję).</li>
                                    <li>Karty pojazdu (jeśli była wydana dla danego pojazdu).</li>
                                    <li>Dowodu osobistego właściciela pojazdu.</li>
                                    <li>W przypadku współwłasności - obecności wszystkich właścicieli lub ich pisemnych
                                        upoważnień.</li>
                                    <li>Dokumentu potwierdzającego własność, jeśli auto nie zostało jeszcze zarejestrowane na
                                        aktualnego właściciela.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-white dark:bg-card-dark rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-slate-50 dark:hover:bg-white/10">
                            <span class="text-lg font-800 pr-8 text-slate-900 dark:text-white">Jakie dokumenty otrzymam
                                po demontażu pojazdu?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Po zakończeniu demontażu wydajemy zaświadczenie potrzebne do wyrejestrowania pojazdu
                                w Wydziale Komunikacji. O złomowaniu auta należy również poinformować
                                ubezpieczyciela. Pomożemy Ci przejść przez formalności.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-white dark:bg-card-dark rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-slate-50 dark:hover:bg-white/10">
                            <span class="text-lg font-800 pr-8 text-slate-900 dark:text-white">Czy przyjmujecie auta
                                niekompletne lub bardzo uszkodzone?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Tak, kasujemy również samochody po wypadkach, spalone, zalane oraz niekompletne.
                                Przy zgłoszeniu opisz stan auta i wskaż brakujące podzespoły, takie jak silnik
                                czy koła. Pozwoli nam to ustalić sposób odbioru i przygotować odpowiedni transport.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="faq-item group">
                        <button
                            class="faq-trigger w-full text-left p-6 sm:p-8 bg-white dark:bg-card-dark rounded-2xl border border-slate-200 dark:border-white/10 flex items-center justify-between transition-all hover:bg-slate-50 dark:hover:bg-white/10">
                            <span class="text-lg font-800 pr-8 text-slate-900 dark:text-white">Jak długo trwa procedura
                                wyrejestrowania po złomowaniu?</span>
                            <span class="material-symbols-outlined transition-transform duration-300">expand_more</span>
                        </button>
                        <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                            <div
                                class="p-8 text-slate-600 dark:text-slate-400 leading-relaxed border-x border-b border-slate-200 dark:border-white/10 rounded-b-2xl -mt-4 pt-12">
                                Od momentu otrzymania od nas zaświadczenia o demontażu pojazdu, masz prawny obowiązek
                                złożyć wniosek o wyrejestrowanie pojazdu w Wydziale Komunikacji w ciągu 30 dni.
                                Wyrejestrowania możesz dokonać w urzędzie lub online poprzez platformę ePUAP / gov.pl.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Banner -->
        <section class="py-16 bg-primary">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                    <div>
                        <h3 class="text-3xl lg:text-4xl font-800 text-background-dark uppercase leading-tight mb-2">
                            Chcesz szybko zezłomować auto?</h3>
                        <p class="text-background-dark/80 font-bold text-lg">Zadzwoń do nas i ustal
                            szczegóły odbioru oraz złomowania pojazdu.</p>
                    </div>
                    <a class="inline-flex items-center gap-3 bg-background-dark text-white px-10 py-4 rounded-2xl font-800 text-xl hover:scale-105 transition-all shadow-2xl active:scale-95 shrink-0"
                        href="tel:793960058">
                        <span class="material-symbols-outlined">call</span>
                        <span>Zadzwoń: 793 960 058</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <?php include 'cookie-consent.php'; ?>
    <?php include 'nav-mobile.php'; ?>

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
                    // Close other open items
                    document.querySelectorAll('.faq-content').forEach(c => c.style.maxHeight = '0px');
                    document.querySelectorAll('.faq-trigger span.material-symbols-outlined').forEach(i => i.style.transform = 'rotate(0deg)');

                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
    </script>
</body>

</html>