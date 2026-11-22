<?php
if (!headers_sent()) {
    header("Content-Type: application/xml; charset=utf-8");
}
$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.holwar.pl/</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/lokalizacje.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/oferta.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/autokasacja.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/pomoc-drogowa-tir.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/pomoc-drogowa-bus.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.holwar.pl/wulkanizacja-mobilna.php</loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
<?php
$locations_file = __DIR__ . '/data/locations.php';
if (file_exists($locations_file)) {
    $locations_db = require $locations_file;
    $pages = array_keys($locations_db);
} else {
    $pages = [];
}
foreach ($pages as $slug) {
    echo "    <url>\n";
    echo "        <loc>https://www.holwar.pl/pomoc-drogowa-$slug.php</loc>\n";
    echo "        <lastmod>$today</lastmod>\n";
    echo "        <changefreq>monthly</changefreq>\n";
    echo "        <priority>0.7</priority>\n";
    echo "    </url>\n";
}
?>
</urlset>
