/**
 * HOLWAR i18n Translation Engine (PL / EN)
 * Auto-detects browser language (defaults to EN if non-Polish).
 * Supports manual toggle with persistence in localStorage.
 */
(function () {
    const translations = {
        pl: {
            // Navigation
            "nav.services": "Usługi",
            "nav.how_it_works": "Jak to działa",
            "nav.faq": "FAQ",
            "nav.reviews": "Opinie",
            "nav.about": "O nas",
            "nav.autokasacja": "Autokasacja",
            "nav.tir": "Serwis Mobilny TIR",
            "nav.bus": "Pomoc Drogowa BUS",
            "nav.wulkanizacja": "Wulkanizacja TIR & BUS",
            "nav.oferta": "Pełna Oferta",
            "nav.need_help": "Potrzebujesz pomocy?",
            "nav.menu_open": "Otwórz menu",
            "nav.menu_close": "Zamknij menu",

            // Hero
            "hero.availability": "Dostępni 24/7",
            "hero.title": "Pomoc Drogowa Warszawa 24H",
            "hero.arrival": "Dojazd w 15–20 minut",
            "hero.desc": "Szybka pomoc drogowa na terenie Warszawy i okolic: Otwock, Garwolin, Ryki, Mińsk Mazowiecki. Holowanie, transport i pomoc przy awarii.",
            "hero.call_aria": "Zadzwoń do HOLWAR: 793 960 058",
            "hero.services_aria": "Rodzaje pomocy drogowej",
            "hero.svc_tir": "TIR",
            "hero.svc_bus": "BUS",
            "hero.svc_tires": "OPONY TIR/BUS",
            "hero.svc_cars": "OSOBOWE",
            "hero.svc_machinery": "MASZYNY",

            // Services
            "services.title": "NASZE USŁUGI",
            "services.subtitle": "Niezależnie od problemu, mamy sprzęt i zespół gotowy do pomocy dokładnie tam, gdzie nas potrzebujesz.",
            "services.towing_title": "Holowanie 24/7",
            "services.towing_desc": "Holowanie lokalne i na długich dystansach samochodów osobowych, motocykli i busów przy użyciu bezpiecznych platform hydraulicznych.",
            "services.tires_title": "Wymiana Koła & Wulkanizacja",
            "services.tires_desc": "Przebita opona? Wymienimy ją na Twoje koło zapasowe lub pomożemy z mobilną wulkanizacją na miejscu, również dla aut TIR i BUS.",
            "services.tires_link": "Mobilna wulkanizacja TIR & BUS",
            "services.jump_title": "Odpalanie Auta",
            "services.jump_desc": "Rozładowany akumulator w zimie? Nasze mocne boostery działają ze wszystkimi silnikami, w tym dieslami o dużej pojemności.",
            "services.fuel_title": "Dowóz Paliwa",
            "services.fuel_desc": "Zabrakło benzyny lub ropy? Dowieziemy paliwo, które pozwoli Ci bezpiecznie dojechać do najbliższej stacji.",

            // How it works
            "hiw.title": "POMOC W 3 <br />PROSTYCH KROKACH",
            "hiw.step1_title": "Zadzwoń do dyspozytora",
            "hiw.step1_desc": "Zadzwoń pod numer <a href=\"tel:+48793960058\" class=\"text-primary font-bold hover:underline\">+48 793 960 058</a>. Jesteśmy dostępni 24/7. Podaj swoją lokalizację i model pojazdu.",
            "hiw.step2_title": "Poczekaj chwilę",
            "hiw.step2_desc": "Najbliższa jednostka zostaje natychmiast wysłana. Otrzymasz link GPS, aby śledzić nasz dojazd na żywo w telefonie.",
            "hiw.step3_title": "Problem rozwiązany",
            "hiw.step3_desc": "Naprawimy auto na miejscu lub odholujemy do zaufanego warsztatu. Zapłacisz kartą, gotówką lub bezgotówkowo z ubezpieczenia.",
            "hiw.save_number": "Zapisz nasz numer",

            // Stats
            "stats.rescued": "Uratowanych Aut",
            "stats.arrival": "Średni Dojazd",
            "stats.rating": "Ocena Google",
            "stats.avail": "Dostępność",

            // Reviews
            "reviews.title": "Co mówią kierowcy",
            "reviews.subtitle": "Zaufały nam tysiące kierowców z Warszawy i okolic.",
            "reviews.r1_text": "\"Utknąłem w centrum o 3 rano. Pomoc przyjechała w 15 minut! Kierowca był super profesjonalny i miły. Bardzo polecam!\"",
            "reviews.r1_author": "Marek W.",
            "reviews.r1_loc": "Warszawa, Śródmieście",
            "reviews.r2_text": "\"Świetna obsługa przy wymianie koła na S8. Szybka reakcja i bardzo rozsądne ceny. Najlepsza pomoc drogowa w mieście.\"",
            "reviews.r2_author": "Anna K.",
            "reviews.r2_loc": "Warszawa, Bemowo",
            "reviews.r3_text": "\"Korzystałem z odpalania auta w mroźny poranek. Uratowali mi dzień, dzięki nim nawet nie spóźniłem się do pracy. 5 gwiazdek!\"",
            "reviews.r3_author": "Tomasz R.",
            "reviews.r3_loc": "Warszawa, Ursynów",

            // Coverage
            "coverage.title": "W WARSZAWIE I OKOLICY",
            "coverage.desc": "Obsługujemy całą Warszawę oraz miejscowości wzdłuż tras wylotowych. Jesteśmy do Twojej dyspozycji 24/7, zapewniając szybki dojazd tam, gdzie nas potrzebujesz.",

            // SEO content
            "seo.heading": "Profesjonalna Pomoc Drogowa Warszawa",
            "seo.p1": "Każdy kierowca może napotkać nagłe problemy na drodze – awaria samochodu, kolizja czy inne nieprzewidziane sytuacje. W takich momentach niezawodna <strong>pomoc drogowa Warszawa</strong> jest kluczowa. HOLWAR oferuje profesjonalne i ekspresowe usługi w zakresie <strong>holowania Warszawa</strong> oraz transportu pojazdów <strong>lawetą Warszawa</strong>, zapewniając bezpieczne przewiezienie auta do wyznaczonego miejsca.",
            "seo.why_title": "Dlaczego warto wybrać HOLWAR?",
            "seo.why_1": "<strong>Całodobowa obsługa</strong> – oferujemy pomoc drogową w Warszawie 24 godziny na dobę, 7 dni w tygodniu.",
            "seo.why_2": "<strong>Błyskawiczny czas reakcji</strong> – nasza laweta Warszawa dociera na miejsce zdarzenia tak szybko, jak to możliwe.",
            "seo.why_3": "<strong>Bezpieczne holowanie</strong> – nasze usługi realizowane są przez doświadczonych specjalistów.",
            "seo.why_4": "<strong>Nowoczesny sprzęt</strong> – dysponujemy flotą pojazdów klasy premium, co pozwala nam obsługiwać auta osobowe, dostawcze i luksusowe.",
            "seo.card_title": "Holowanie Warszawa - Szybko i Bezpiecznie",
            "seo.card_desc": "Awaria pojazdu? Potrzebujesz transportu samochodu po kolizji? Nasza usługa holowania Warszawa jest dostępna całodobowo. Oferujemy transport do warsztatu, pod dom lub w dowolne wskazane miejsce na terenie miasta i okolic.",
            "seo.veh_cars": "Auta Osobowe",
            "seo.veh_vans": "Dostawcze i Busy",
            "seo.veh_moto": "Motocykle i Quady",
            "seo.veh_mach": "Maszyny Rolnicze",
            "seo.cta_title": "Zawsze Gotowi do Działania",
            "seo.cta_desc": "Bez względu na porę dnia czy nocy, pomoc drogowa HOLWAR to Twój zaufany partner na stołecznych drogach.",

            // FAQ
            "faq.title": "Najczęściej Zadawane Pytania (FAQ)",
            "faq.subtitle": "Wszystko, co musisz wiedzieć o naszej pomocy drogowej",
            "faq.q1": "Holowanie Warszawa – jak szybko dojeżdżacie na miejsce?",
            "faq.a1": "W większości przypadków nasza laweta dociera na miejsce w ciągu 20–30 minut od zgłoszenia. Oferujemy błyskawiczne holowanie w Warszawie 24/7, niezależnie od pory dnia czy nocy oraz panujących warunków atmosferycznych.",
            "faq.q2": "Czy Wasza pomoc drogowa w Warszawie jest całodobowa?",
            "faq.a2": "Tak, HOLWAR operuje w trybie 24/7. Jesteśmy do dyspozycji kierowców 365 dni w roku, wliczając w to niedziele oraz wszystkie dni ustawowo wolne od pracy i święta.",
            "faq.q3": "Kiedy warto skorzystać z usługi lawety zamiast holowania na lince?",
            "faq.a3": "Transport lawetą jest wymagany w przypadku aut z automatyczną skrzynią biegów, napędem 4x4, uszkodzonym układem kierowniczym lub zawieszeniem. Jest to również najbezpieczniejsza forma transportu, wykluczająca ryzyko dodatkowych uszkodzeń podczas holowania.",
            "faq.q4": "Jakie lokalizacje obsługujecie poza samą Warszawą?",
            "faq.a4": "Obsługujemy całą aglomerację warszawską oraz trasy wylotowe. Regularnie pomagamy kierowcom w miejscowościach takich jak: Otwock, Garwolin, Ryki, Mińsk Mazowiecki, Piaseczno, Pruszków, Legionowo czy Wołomin.",
            "faq.q5": "Czy oferujecie pomoc dla aut na zagranicznych numerach rejestracyjnych?",
            "faq.a5": "Oczywiście. Pomagamy wszystkim kierowcom, niezależnie od kraju rejestracji pojazdu. Obsługujemy obcokrajowców przejeżdżających przez Polskę, oferując profesjonalny transport lawetą w dowolne miejsce w Europie.",
            "faq.q6": "Jakie pojazdy możecie przewieźć na Waszej lawecie?",
            "faq.a6": "Nasza flota jest przystosowana do transportu szerokiej gamy pojazdów: od motocykli i quadów, przez samochody osobowe i luksusowe (niski kąt wjazdu), aż po ciężkie auta dostawcze, busy i niewielkie maszyny budowlane.",
            "faq.q7": "Jakie informacje przygotować przy zgłoszeniu potrzeby pomocy?",
            "faq.a7": "Przy kontakcie z dyspozytorem podaj: dokładną lokalizację (lub charakterystyczne punkty), markę i model pojazdu, rodzaj usterki/zdarzenia (np. urwane koło, błąd silnika) oraz miejsce docelowe transportu. To pozwoli nam wysłać odpowiedni sprzęt.",

            // Footer
            "footer.desc": "Najbardziej przyjazna i niezawodna pomoc drogowa w Warszawie. Dostępni 365 dni w roku, 24/7, bez względu na pogodę.",
            "footer.services_col": "Usługi",
            "footer.company_col": "Firma",
            "footer.contact_col": "Kontakt",
            "footer.partner_program": "Program Partnerski",
            "footer.privacy_policy": "Polityka Prywatności",
            "footer.area_heading": "Obszar działania - Pomoc Drogowa i Laweta",
            "footer.rights": "© 2024 DG ARK. Wszelkie prawa zastrzeżone.",

            // Cookies
            "cookie.title": "Polityka Cookies",
            "cookie.desc": "Używamy plików cookies, aby zoptymalizować działanie strony, analizować ruch przez Google Analytics oraz dostosowywać reklamy Meta Pixel.",
            "cookie.accept": "Akceptuj wszystkie",
            "cookie.customize": "Ustawienia",
            "cookie.reject": "Tylko niezbędne",
            "cookie.save": "Zapisz wybrane",
            "cookie.necessary": "Niezbędne",
            "cookie.necessary_desc": "Wymagane do działania strony.",
            "cookie.analytics": "Analityka (Google)",
            "cookie.analytics_desc": "Google Tag & Analytics.",
            "cookie.marketing": "Marketing (Meta)",
            "cookie.marketing_desc": "Meta Pixel & Facebook Ads."
        },
        en: {
            // Navigation
            "nav.services": "Services",
            "nav.how_it_works": "How it works",
            "nav.faq": "FAQ",
            "nav.reviews": "Reviews",
            "nav.about": "About us",
            "nav.autokasacja": "Car Scrappage",
            "nav.tir": "TIR Mobile Service",
            "nav.bus": "BUS Breakdown Service",
            "nav.wulkanizacja": "Mobile Tire Service",
            "nav.oferta": "Full Services",
            "nav.need_help": "Need roadside assistance?",
            "nav.menu_open": "Open menu",
            "nav.menu_close": "Close menu",

            // Hero
            "hero.availability": "Available 24/7",
            "hero.title": "Roadside Assistance Warsaw 24/7",
            "hero.arrival": "Arrival in 15–20 minutes",
            "hero.desc": "Fast 24/7 breakdown recovery and towing across Warsaw and surroundings: Otwock, Garwolin, Ryki, Mińsk Mazowiecki. Emergency roadside repair, towing, and flatbed transport.",
            "hero.call_aria": "Call HOLWAR: +48 793 960 058",
            "hero.services_aria": "Roadside assistance service types",
            "hero.svc_tir": "TRUCK / TIR",
            "hero.svc_bus": "VAN / BUS",
            "hero.svc_tires": "TIRES TIR/BUS",
            "hero.svc_cars": "CARS",
            "hero.svc_machinery": "MACHINERY",

            // Services
            "services.title": "OUR SERVICES",
            "services.subtitle": "Whatever the problem, our modern fleet and experienced team are ready to assist you right where you need us.",
            "services.towing_title": "24/7 Towing Service",
            "services.towing_desc": "Local and long-distance towing for passenger cars, motorcycles, and vans using safe hydraulic flatbed recovery trucks.",
            "services.tires_title": "Wheel Change & Tire Repair",
            "services.tires_desc": "Punctured tire? We will replace it with your spare wheel or perform on-site mobile tire repair, including trucks and commercial vans.",
            "services.tires_link": "Mobile tire service TIR & BUS",
            "services.jump_title": "Jump Start Service",
            "services.jump_desc": "Dead battery in cold weather? Our high-power jump boosters work reliably with all engines, including large-capacity diesels.",
            "services.fuel_title": "Emergency Fuel Delivery",
            "services.fuel_desc": "Ran out of petrol or diesel? We will deliver the right fuel to let you safely reach the nearest filling station.",

            // How it works
            "hiw.title": "HELP IN 3 <br />EASY STEPS",
            "hiw.step1_title": "Call our dispatcher",
            "hiw.step1_desc": "Call our 24/7 hotline at <a href=\"tel:+48793960058\" class=\"text-primary font-bold hover:underline\">+48 793 960 058</a>. English spoken. Provide your location and vehicle model.",
            "hiw.step2_title": "Quick dispatch",
            "hiw.step2_desc": "The nearest recovery truck is dispatched immediately. You receive a live GPS link on your phone to track our arrival.",
            "hiw.step3_title": "Problem solved",
            "hiw.step3_desc": "We fix your vehicle on-site or safely tow it to a trusted repair shop or your hotel. Pay by card, cash, or cashless via insurance.",
            "hiw.save_number": "Save Our Number",

            // Stats
            "stats.rescued": "Vehicles Rescued",
            "stats.arrival": "Average Arrival Time",
            "stats.rating": "Google Rating",
            "stats.avail": "Availability",

            // Reviews
            "reviews.title": "What Drivers Say",
            "reviews.subtitle": "Trusted by thousands of local and international drivers in Warsaw and throughout Poland.",
            "reviews.r1_text": "\"Stranded in central Warsaw at 3 AM. The tow truck arrived in 15 minutes! The driver was very courteous and professional. Highly recommended!\"",
            "reviews.r1_author": "Marek W.",
            "reviews.r1_loc": "Warsaw, Downtown",
            "reviews.r2_text": "\"Excellent on-site tire change service on expressway S8. Fast response, English communication, and fair pricing. Best assistance in town!\"",
            "reviews.r2_author": "Anna K.",
            "reviews.r2_loc": "Warsaw, Bemowo",
            "reviews.r3_text": "\"Called for a battery booster start on a freezing winter morning. Saved my entire day—made it to my meeting on time. 5 stars!\"",
            "reviews.r3_author": "Tomasz R.",
            "reviews.r3_loc": "Warsaw, Ursynow",

            // Coverage
            "coverage.title": "WARSAW & SURROUNDING REGION",
            "coverage.desc": "We cover the whole city of Warsaw and major expressway corridors (S8, S17, A2, DK50). Available 24/7 with rapid response right to your location.",

            // SEO content
            "seo.heading": "Professional Roadside Assistance Warsaw",
            "seo.p1": "Every driver can face unexpected vehicle trouble—engine breakdown, flat tire, or collision. In such critical moments, reliable, English-speaking <strong>roadside assistance in Warsaw</strong> is vital. HOLWAR provides prompt, professional <strong>24/7 towing and breakdown recovery</strong>, safely transporting your vehicle to your chosen destination.",
            "seo.why_title": "Why Choose HOLWAR?",
            "seo.why_1": "<strong>24/7 Availability</strong> – emergency roadside assistance and recovery 24 hours a day, 7 days a week, 365 days a year.",
            "seo.why_2": "<strong>Rapid Response</strong> – our Warsaw recovery trucks reach breakdown scenes in 15–30 minutes on average.",
            "seo.why_3": "<strong>Safe Towing</strong> – licensed specialists, professional equipment, and full cargo transport insurance.",
            "seo.why_4": "<strong>Modern Fleet</strong> – hydraulic slide-back flatbeds equipped for passenger cars, luxury & sports cars, SUVs, and commercial vans.",
            "seo.card_title": "Warsaw Towing – Fast & Safe",
            "seo.card_desc": "Breakdown or accident? Need car transport after a collision? Our 24/7 towing service transports vehicles to repair shops, dealerships, hotels, or any address in Poland and across Europe.",
            "seo.veh_cars": "Passenger Cars",
            "seo.veh_vans": "Vans & Commercial",
            "seo.veh_moto": "Motorcycles & Quads",
            "seo.veh_mach": "Machinery & Equipment",
            "seo.cta_title": "Always Ready to Assist",
            "seo.cta_desc": "Day or night, rain or snow, HOLWAR is your dependable English-speaking breakdown recovery partner in Warsaw.",

            // FAQ
            "faq.title": "Frequently Asked Questions (FAQ)",
            "faq.subtitle": "Everything you need to know about our Warsaw roadside assistance",
            "faq.q1": "How quickly do you arrive at the breakdown location?",
            "faq.a1": "In most cases, our recovery vehicle reaches you in 20–30 minutes within Warsaw and on adjacent expressways (S8, S17, A2). We provide rapid response 24/7, day or night.",
            "faq.q2": "Is your roadside assistance service available around the clock?",
            "faq.a2": "Yes, HOLWAR operates 24 hours a day, 7 days a week, 365 days a year—including weekends, nighttime, and all Polish public holidays.",
            "faq.q3": "When should a flatbed tow truck be used instead of a towing strap?",
            "faq.a3": "Flatbed recovery is required for vehicles with automatic gearboxes, AWD / 4x4 drivetrains, electric or hybrid systems, or damaged suspension/steering. It is also the safest method of transport, preventing additional mechanical damage.",
            "faq.q4": "Which locations do you cover outside Warsaw city limits?",
            "faq.a4": "We cover the complete Warsaw metropolitan area, major highways (A2, S8, S17, DK50), and neighboring towns such as Otwock, Garwolin, Ryki, Mińsk Mazowiecki, Piaseczno, and Pruszków.",
            "faq.q5": "Do you assist vehicles with foreign registration plates?",
            "faq.a5": "Yes, absolutely! We assist foreign drivers, tourists, and international transport companies daily. Our dispatchers speak English, we accept card payments, and we can repatriate vehicles to any European country.",
            "faq.q6": "What types of vehicles can you transport on your flatbed?",
            "faq.a6": "Our fleet carries motorcycles, quads, standard cars, low-clearance luxury and sports cars, heavy commercial vans (Maxi, box, flatbed), and light construction machinery.",
            "faq.q7": "What information should I prepare when calling your hotline?",
            "faq.a7": "Please provide your exact location (or highway kilometer marker / Google Maps pin), vehicle make and model, type of breakdown (no-start, flat tire, collision damage), and your desired destination.",

            // Footer
            "footer.desc": "The most friendly and reliable roadside assistance service in Warsaw. Available 365 days a year, 24/7, whatever the weather.",
            "footer.services_col": "Services",
            "footer.company_col": "Company",
            "footer.contact_col": "Contact",
            "footer.partner_program": "Partner Program",
            "footer.privacy_policy": "Privacy Policy",
            "footer.area_heading": "Service Coverage – Roadside Assistance & Towing",
            "footer.rights": "© 2024 DG ARK. All rights reserved.",

            // Cookies
            "cookie.title": "Cookie Policy",
            "cookie.desc": "We use cookies to optimize site performance, analyze traffic with Google Analytics, and tailor Meta Pixel advertising.",
            "cookie.accept": "Accept all",
            "cookie.customize": "Settings",
            "cookie.reject": "Only necessary",
            "cookie.save": "Save selected",
            "cookie.necessary": "Necessary",
            "cookie.necessary_desc": "Required for core website functionality.",
            "cookie.analytics": "Analytics (Google)",
            "cookie.analytics_desc": "Google Tag & Analytics traffic analysis.",
            "cookie.marketing": "Marketing (Meta)",
            "cookie.marketing_desc": "Meta Pixel & targeted advertising."
        }
    };

    /**
     * Detects initial language.
     * Priority:
     * 1. Stored user preference in localStorage
     * 2. Browser language (if starts with 'pl' -> 'pl', otherwise -> 'en')
     */
    function detectLanguage() {
        try {
            const saved = localStorage.getItem('holwar_lang');
            if (saved && (saved === 'pl' || saved === 'en')) {
                return saved;
            }
        } catch (e) {}

        const browserLang = (navigator.language || navigator.languages?.[0] || 'pl').toLowerCase();
        if (browserLang.startsWith('pl')) {
            return 'pl';
        }
        return 'en';
    }

    /**
     * Applies language translations across all marked DOM elements
     */
    function applyLanguage(lang) {
        if (!translations[lang]) lang = 'pl';
        const dict = translations[lang];

        // 1. Update <html lang="...">
        document.documentElement.lang = lang;

        // 2. Update all elements with data-i18n
        document.querySelectorAll('[data-i18n]').forEach((el) => {
            const key = el.getAttribute('data-i18n');
            if (!key || !(key in dict)) return;
            const val = dict[key];

            // If value contains HTML tags, update innerHTML; otherwise textContent
            if (/<[a-z][\s\S]*>/i.test(val)) {
                el.innerHTML = val;
            } else {
                el.textContent = val;
            }
        });

        // 3. Update attributes (e.g. data-i18n-attr="aria-label:hero.call_aria,placeholder:...")
        document.querySelectorAll('[data-i18n-attr]').forEach((el) => {
            const pairs = el.getAttribute('data-i18n-attr').split(',');
            pairs.forEach((pair) => {
                const [attr, key] = pair.split(':');
                if (attr && key && key in dict) {
                    el.setAttribute(attr.trim(), dict[key.trim()]);
                }
            });
        });

        // 4. Update language switcher buttons UI
        document.querySelectorAll('[data-lang-btn]').forEach((btn) => {
            const btnLang = btn.getAttribute('data-lang-btn');
            const isActive = btnLang === lang;
            btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');

            if (isActive) {
                btn.className = btn.getAttribute('data-active-class') ||
                    'px-2.5 py-1 rounded-lg text-xs font-bold transition-all bg-primary text-background-dark shadow-sm';
            } else {
                btn.className = btn.getAttribute('data-inactive-class') ||
                    'px-2.5 py-1 rounded-lg text-xs font-semibold transition-all text-slate-400 hover:text-white';
            }
        });

        // 5. Save preference in localStorage
        try {
            localStorage.setItem('holwar_lang', lang);
        } catch (e) {}

        // 6. Dispatch custom event
        window.dispatchEvent(new CustomEvent('holwar:languagechange', { detail: { lang } }));
    }

    // Expose global setter for buttons
    window.setLanguage = function (lang) {
        applyLanguage(lang);
    };

    window.getLanguage = function () {
        return document.documentElement.lang || 'pl';
    };

    // Initialize as soon as DOM is interactive
    function init() {
        const initialLang = detectLanguage();
        if (initialLang !== 'pl') {
            applyLanguage('en');
        } else {
            // Apply PL to ensure switcher UI is synchronized
            applyLanguage('pl');
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
