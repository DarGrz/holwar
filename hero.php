<?php
function render_holwar_hero_head(string $image = 'holwar-hero', int $imageWidth = 1360)
{
    $image = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
    ?>
    <link rel="stylesheet" href="hero.css?v=1" />
    <link rel="preload" as="image" href="img/<?php echo $image; ?>-<?php echo $imageWidth; ?>.webp"
        imagesrcset="img/<?php echo $image; ?>-480.webp 480w, img/<?php echo $image; ?>-768.webp 768w, img/<?php echo $image; ?>-<?php echo $imageWidth; ?>.webp <?php echo $imageWidth; ?>w"
        imagesizes="(min-width: 1280px) 1216px, (min-width: 640px) calc(100vw - 48px), calc(100vw - 16px)"
        fetchpriority="high" />
    <?php
}

function render_holwar_hero(
    string $title,
    string $description,
    string $details = '',
    string $image = 'holwar-hero',
    string $imageAlt = 'Laweta HOLWAR 3,5 t przewożąca samochód osobowy na słonecznej, jesiennej drodze. Czas dojazdu: około 15–20 minut.',
    int $imageHeight = 765,
    int $imageWidth = 1360
) {
    $image = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
    ?>
    <section class="holwar-hero" aria-labelledby="hero-title">
        <div class="holwar-hero__inner">
            <img class="holwar-hero__image" src="img/<?php echo $image; ?>-<?php echo $imageWidth; ?>.webp"
                srcset="img/<?php echo $image; ?>-480.webp 480w, img/<?php echo $image; ?>-768.webp 768w, img/<?php echo $image; ?>-<?php echo $imageWidth; ?>.webp <?php echo $imageWidth; ?>w"
                sizes="(min-width: 1280px) 1216px, (min-width: 640px) calc(100vw - 48px), calc(100vw - 16px)"
                width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>" style="aspect-ratio: <?php echo $imageWidth; ?> / <?php echo $imageHeight; ?>;"
                fetchpriority="high" loading="eager"
                alt="<?php echo htmlspecialchars($imageAlt, ENT_QUOTES, 'UTF-8'); ?>" />
            <div class="holwar-hero__content">
                <p class="holwar-hero__availability"><span aria-hidden="true"></span><span data-i18n="hero.availability">Dostępni 24/7</span></p>
                <?php
                $isHome = ($title === 'Pomoc Drogowa Warszawa 24H');
                $titleI18n = $isHome ? ' data-i18n="hero.title"' : '';
                $descI18n = $isHome ? ' data-i18n="hero.desc"' : '';
                ?>
                <h1 id="hero-title"<?php echo $titleI18n; ?>><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
                <p class="holwar-hero__arrival" data-i18n="hero.arrival">Dojazd w 15–20 minut</p>
                <p class="holwar-hero__description"<?php echo $descI18n; ?>><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>
                <a class="holwar-hero__call" href="tel:+48793960058" aria-label="Zadzwoń do HOLWAR: 793 960 058" data-i18n-attr="aria-label:hero.call_aria">
                    <svg viewBox="0 0 24 24" aria-hidden="true" width="28" height="28" fill="currentColor">
                        <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02z" />
                    </svg>
                    <span>793 960 058</span>
                </a>
                <nav class="holwar-hero__services" aria-label="Rodzaje pomocy drogowej" data-i18n-attr="aria-label:hero.services_aria">
                    <a href="pomoc-drogowa-tir.php"><span class="material-symbols-outlined" aria-hidden="true">local_shipping</span><span data-i18n="hero.svc_tir">TIR</span></a>
                    <a href="pomoc-drogowa-bus.php"><span class="material-symbols-outlined" aria-hidden="true">airport_shuttle</span><span data-i18n="hero.svc_bus">BUS</span></a>
                    <a href="wulkanizacja-mobilna.php"><span class="material-symbols-outlined" aria-hidden="true">tire_repair</span><span data-i18n="hero.svc_tires">OPONY TIR/BUS</span></a>
                    <a href="oferta.php"><span class="material-symbols-outlined" aria-hidden="true">directions_car</span><span data-i18n="hero.svc_cars">OSOBOWE</span></a>
                    <a href="oferta.php"><span class="material-symbols-outlined" aria-hidden="true">construction</span><span data-i18n="hero.svc_machinery">MASZYNY</span></a>
                </nav>
                <?php if ($details !== ''): ?>
                    <div class="holwar-hero__details"><?php echo $details; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
}
