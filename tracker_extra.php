<?php
include 'config.php';

// Ten skrypt wzbogaca dane o wizycie (rozdzielczość, strefa czasowa, kliknięcia, kopiowanie)
if (isset($_SESSION['last_visit_id'])) {
    $visit_id = (int) $_SESSION['last_visit_id'];

    try {
        if (isset($_GET['click'])) {
            $stmt = $conn->prepare("UPDATE visits SET clicked_phone = 1 WHERE id = ?");
            $stmt->execute([$visit_id]);
        } elseif (isset($_GET['copy'])) {
            $stmt = $conn->prepare("UPDATE visits SET copied_phone = 1 WHERE id = ?");
            $stmt->execute([$visit_id]);
        } elseif (isset($_GET['res'])) {
            $res = $_GET['res'] ?? null;
            $tz = $_GET['tz'] ?? null;
            $stmt = $conn->prepare("UPDATE visits SET resolution = ?, timezone = COALESCE(timezone, ?) WHERE id = ?");
            $stmt->execute([$res, $tz, $visit_id]);
        }
    } catch (Exception $e) {
        // Ciche ignorowanie
    }
}
?>