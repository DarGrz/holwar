<?php
session_start();
// Konfiguracja bazy danych
$host = 'localhost';
$db_name = 'twoja_baza_danych';
$username = 'twoj_uzytkownik';
$password = 'twoje_haslo';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    // Ustawienie raportowania błędów
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // W przypadku błędu połączenia (opcjonalnie można zalogować lub wyświetlić)
    // error_log("Błąd połączenia z bazą danych: " . $e->getMessage());
}

// Włączanie / wyłączanie Google Tag (zapisane w pliku JSON)
$gtag_enabled = true;
$gtag_config_file = __DIR__ . '/config_gtag.json';
if (file_exists($gtag_config_file)) {
    $gtag_config = json_decode(file_get_contents($gtag_config_file), true);
    if (isset($gtag_config['enabled'])) {
        $gtag_enabled = (bool)$gtag_config['enabled'];
    }
}

// Automatyczne śledzenie wizyt
include 'tracker.php';
?>
