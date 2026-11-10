<!-- Cookie Consent Banner -->
<div id="cookie-consent-banner"
    class="fixed bottom-6 left-6 right-6 z-[200] transform translate-y-full opacity-0 transition-all duration-500 md:left-auto md:max-w-md">
    <div class="bg-card-dark border border-white/10 rounded-3xl p-6 shadow-2xl backdrop-blur-md bg-opacity-95">
        <div class="flex items-start gap-4 mb-4">
            <div class="bg-primary/20 p-2 rounded-xl text-primary">
                <span class="material-symbols-outlined">cookie</span>
            </div>
            <div>
                <h4 class="text-white font-bold text-lg" data-i18n="cookie.title">Polityka Cookies</h4>
                <p class="text-slate-400 text-sm leading-relaxed mt-1" data-i18n="cookie.desc">
                    Używamy plików cookies, aby zoptymalizować działanie strony, analizować ruch przez Google Analytics
                    oraz dostosowywać reklamy Meta Pixel.
                </p>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <div class="flex gap-3">
                <button id="accept-all-cookies" data-i18n="cookie.accept"
                    class="flex-1 bg-primary text-background-dark font-800 py-3 rounded-xl hover:scale-[1.02] active:scale-[0.98] transition-all text-sm">
                    Akceptuj wszystkie
                </button>
                <button id="customize-cookies" data-i18n="cookie.customize"
                    class="flex-1 bg-white/5 text-white border border-white/10 font-bold py-3 rounded-xl hover:bg-white/10 transition-all text-sm text-center">
                    Ustawienia
                </button>
            </div>
            <button id="reject-all-cookies" data-i18n="cookie.reject" class="text-slate-500 text-xs hover:text-white transition-colors py-1">
                Tylko niezbędne
            </button>
        </div>

        <!-- Customization Menu (Hidden by default) -->
        <div id="cookie-settings" class="hidden mt-6 pt-6 border-t border-white/10 space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white text-sm font-bold" data-i18n="cookie.necessary">Niezbędne</p>
                    <p class="text-xs text-slate-500" data-i18n="cookie.necessary_desc">Wymagane do działania strony.</p>
                </div>
                <div class="relative inline-flex items-center cursor-not-allowed">
                    <input type="checkbox" checked disabled class="sr-only peer">
                    <div
                        class="w-11 h-6 bg-primary rounded-full peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white text-sm font-bold" data-i18n="cookie.analytics">Analityka (Google)</p>
                    <p class="text-xs text-slate-500" data-i18n="cookie.analytics_desc">Google Tag & Analytics.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="consent-analytics" checked class="sr-only peer">
                    <div
                        class="w-11 h-6 bg-gray-700 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                    </div>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white text-sm font-bold" data-i18n="cookie.marketing">Marketing (Meta)</p>
                    <p class="text-xs text-slate-500" data-i18n="cookie.marketing_desc">Meta Pixel & Facebook Ads.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="consent-marketing" checked class="sr-only peer">
                    <div
                        class="w-11 h-6 bg-gray-700 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                    </div>
                </label>
            </div>
            <button id="save-cookie-settings" data-i18n="cookie.save"
                class="w-full bg-white/10 text-white font-bold py-3 rounded-xl hover:bg-white/20 transition-all text-sm">
                Zapisz wybrane
            </button>
        </div>
    </div>
</div>

<script>
    // Configuration - Replace with your actual IDs
    const GTM_ID = 'GTM-XXXXXXX';
    const META_PIXEL_ID = 'XXXXXXXXXXXXXXX';

    const banner = document.getElementById('cookie-consent-banner');
    const settingsMenu = document.getElementById('cookie-settings');

    function setConsent(consent) {
        localStorage.setItem('cookie-consent', JSON.stringify(consent));
        banner.classList.add('translate-y-full', 'opacity-0');
        loadScripts(consent);
    }

    function loadScripts(consent) {
        if (consent.analytics) {
            // Google Tag Manager / Analytics
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', GTM_ID);
        }

        if (consent.marketing) {
            // Meta Pixel
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return; n = f.fbq = function () {
                    n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                n.queue = []; t = b.createElement(e); t.async = !0;
                t.src = v; s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', META_PIXEL_ID);
            fbq('track', 'PageView');
        }
    }

    // Check existing consent
    const existingConsent = localStorage.getItem('cookie-consent');
    if (!existingConsent) {
        setTimeout(() => {
            banner.classList.remove('translate-y-full', 'opacity-0');
        }, 1000);
    } else {
        loadScripts(JSON.parse(existingConsent));
    }

    document.getElementById('accept-all-cookies').addEventListener('click', () => {
        setConsent({ analytics: true, marketing: true });
    });

    document.getElementById('reject-all-cookies').addEventListener('click', () => {
        setConsent({ analytics: false, marketing: false });
    });

    document.getElementById('customize-cookies').addEventListener('click', () => {
        settingsMenu.classList.toggle('hidden');
    });

    document.getElementById('save-cookie-settings').addEventListener('click', () => {
        setConsent({
            analytics: document.getElementById('consent-analytics').checked,
            marketing: document.getElementById('consent-marketing').checked
        });
    });
</script>