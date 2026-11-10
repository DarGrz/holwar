<?php
// Skrypt śledzący wizyty

function get_browser_info($user_agent)
{
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/mobile/i' => 'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }
    return $browser;
}

function get_os_info($user_agent)
{
    $os_platform = "Unknown OS";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}

// Nie zapisuj wizyt z panelu admina
$current_page = $_SERVER['SCRIPT_NAME'];
if (strpos($current_page, 'admin_login.php') !== false || strpos($current_page, 'admin_dashboard.php') !== false) {
    return;
}

if (isset($conn)) {
    try {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
        $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

        $browser = get_browser_info($ua);
        $os = get_os_info($ua);
        $device = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $ua)) ? 'Mobile' : 'Desktop';

        // Prosty fingerprint na podstawie IP i User Agenta
        $fingerprint = md5($ip . $ua . ($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''));

        // Dane z URL
        $utm_source = $_GET['utm_source'] ?? null;
        $utm_term = $_GET['utm_term'] ?? $_GET['utm_keyword'] ?? null;
        $utm_campaign = $_GET['utm_campaign'] ?? null;
        $keyword = $_GET['keyword'] ?? $_GET['q'] ?? null; // Obsługa parametru keyword lub q (google)
        $source = $_SERVER['HTTP_REFERER'] ?? 'Direct';
        $page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // Wyodrębnij tylko główny kod języka (np. 'pl' zamiast 'pl-PL,pl;q=0.9...')
        $full_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'pl';
        $language = substr(explode(',', $full_language)[0], 0, 10);

        // Geolokalizacja IP (Lokalizacja + Strefa czasowa)
        $location = null;
        $timezone = null;
        if ($ip !== '127.0.0.1' && $ip !== '::1' && $ip !== '0.0.0.0') {
            $has_session = (session_status() === PHP_SESSION_ACTIVE);
            if ($has_session && isset($_SESSION['geo_ip']) && $_SESSION['geo_ip'] === $ip && ($_SESSION['geo_checked'] ?? false)) {
                $location = $_SESSION['geo_location'] ?? null;
                $timezone = $_SESSION['geo_timezone'] ?? null;
            } else {
                try {
                    $ctx = stream_context_create(['http' => ['timeout' => 1]]); // Timeout 1s
                    $geo_data = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,city,country,timezone", false, $ctx);
                    
                    if ($has_session) {
                        $_SESSION['geo_ip'] = $ip;
                        $_SESSION['geo_checked'] = true;
                    }
                    
                    if ($geo_data) {
                        $geo = json_decode($geo_data, true);
                        if (($geo['status'] ?? '') === 'success') {
                            $location = ($geo['city'] ?? '') . ', ' . ($geo['country'] ?? '');
                            $timezone = $geo['timezone'] ?? null;
                            
                            if ($has_session) {
                                $_SESSION['geo_location'] = $location;
                                $_SESSION['geo_timezone'] = $timezone;
                            }
                        }
                    }
                } catch (Exception $e) {
                }
            }
        }

        // Przygotowanie danych do zapisu
        $data = [
            'ip_address' => $ip,
            'device' => $device,
            'os_system' => $os,
            'browser' => $browser,
            'fingerprint' => $fingerprint,
            'keyword' => $keyword,
            'utm_source' => $utm_source,
            'utm_campaign' => $utm_campaign,
            'source' => $source,
            'page_url' => $page_url,
            'language' => $language,
            'location' => $location,
            'timezone' => $timezone,
            'utm_term' => $utm_term,
            'utm_keyword' => $utm_term // Dla kompatybilności wstecznej
        ];

        // Pobierz listę kolumn dostępnych w bazie
        $stmt_cols = $conn->query("SHOW COLUMNS FROM visits");
        $db_cols = $stmt_cols->fetchAll(PDO::FETCH_COLUMN);

        // Automatyczna migracja: dodaj kolumnę clicked_phone jeśli nie istnieje
        if (!in_array('clicked_phone', $db_cols)) {
            $conn->exec("ALTER TABLE visits ADD COLUMN clicked_phone TINYINT(1) DEFAULT 0 AFTER location");
            $db_cols[] = 'clicked_phone';
        }
        if (!in_array('copied_phone', $db_cols)) {
            $conn->exec("ALTER TABLE visits ADD COLUMN copied_phone TINYINT(1) DEFAULT 0 AFTER clicked_phone");
            $db_cols[] = 'copied_phone';
        }

        // Zostaw tylko te dane, których kolumny istnieją w bazie
        $insert_data = [];
        foreach ($data as $key => $value) {
            if (in_array($key, $db_cols)) {
                $insert_data[$key] = $value;
            }
        }

        if (!empty($insert_data)) {
            $cols = implode(", ", array_keys($insert_data));
            $placeholders = implode(", ", array_fill(0, count($insert_data), "?"));
            $stmt = $conn->prepare("INSERT INTO visits ($cols) VALUES ($placeholders)");
            $stmt->execute(array_values($insert_data));

            // Zapisz ID ostatniej wizyty w sesji do wzbogacenia danymi z JS (rozdzielczość)
            $_SESSION['last_visit_id'] = $conn->lastInsertId();
        }

    } catch (Exception $e) {
        // Ciche ignorowanie lub logowanie błędów
    }
}
?>