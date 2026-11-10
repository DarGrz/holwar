<?php header("Content-Type: application/xml; charset=utf-8"); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.holwar.pl/</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/oferta.php</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/autokasacja.php</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/pomoc-drogowa-tir.php</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/pomoc-drogowa-bus.php</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/wulkanizacja-mobilna.php</loc>
        <lastmod>
            <?php echo date('Y-m-d'); ?>
        </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <?php
    $pages = [
        "bemowo",
        "bialoleka",
        "bielany",
        "mokotow",
        "ochota",
        "praga-poludnie",
        "praga-polnoc",
        "rembertow",
        "srodmiescie",
        "targowek",
        "ursus",
        "ursynow",
        "wawer",
        "wesola",
        "wilanow",
        "wlochy",
        "wola",
        "zoliborz",
        "otwock",
        "minsk-mazowiecki",
        "garwolin",
        "kolbiel",
        "jozefow",
        "gora-kalwaria",
        "ryki",
        "piaseczno",
        "sulejowek"
    ];
    foreach ($pages as $slug) {
        echo "    <url>\n";
        echo "        <loc>https://www.holwar.pl/pomoc-drogowa-$slug.php</loc>\n";
        echo "        <lastmod>" . date('Y-m-d') . "</lastmod>\n";
        echo "        <changefreq>monthly</changefreq>\n";
        echo "        <priority>0.7</priority>\n";
        echo "    </url>\n";
    }
    ?>
</urlset>