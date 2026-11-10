<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

// Obsługa wylogowania
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin_login.php');
    exit();
}

// Obsługa włączania/wyłączania Google Tag
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'toggle_gtag') {
    $new_status = isset($_POST['gtag_status']) && $_POST['gtag_status'] === '1';
    $config_file = __DIR__ . '/config_gtag.json';
    file_put_contents($config_file, json_encode(['enabled' => $new_status], JSON_PRETTY_PRINT));
    
    $_SESSION['gtag_message'] = $new_status ? 'Google Tag został włączony.' : 'Google Tag został wyłączony.';
    header('Location: admin_dashboard.php');
    exit();
}

// Parametry paginacji
$allowed_limits = [25, 50, 100, 250, 500];
$limit = isset($_GET['limit']) && in_array($_GET['limit'], $allowed_limits) ? (int) $_GET['limit'] : 25;
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Pobieranie wizyt z paginacją i licznikiem fingerprintów
$stmt = $conn->prepare("
    SELECT v.*, 
    (SELECT COUNT(*) FROM visits v2 WHERE v2.fingerprint = v.fingerprint) as fp_count 
    FROM visits v 
    ORDER BY visit_time DESC 
    LIMIT :limit OFFSET :offset
");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$visits = $stmt->fetchAll();

// Statystyki
$total_visits = $conn->query("SELECT COUNT(*) FROM visits")->fetchColumn();
$unique_ips = $conn->query("SELECT COUNT(DISTINCT ip_address) FROM visits")->fetchColumn();
$total_pages = ceil($total_visits / $limit);
?>
<!DOCTYPE html>
<html lang="pl" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Statystyki Wizyt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(238, 140, 43, 0.3);
        }
    </style>
</head>

<body class="bg-[#121212] text-slate-200 min-h-screen">

    <nav class="border-b border-white/5 bg-[#1e1e1e]/50 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-[1600px] mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-[#ee8c2b] p-2 rounded-lg text-black">
                    <span class="material-symbols-outlined font-bold">analytics</span>
                </div>
                <span class="text-xl font-800 italic uppercase">HOLWAR <span class="text-[#ee8c2b]">Admin</span></span>
            </div>
            <div class="flex items-center gap-6">
                <span class="text-sm text-slate-400">Panel: <b>
                        <?php echo $_SESSION['admin_user']; ?>
                    </b></span>
                <a href="?logout=1"
                    class="text-sm font-bold text-red-400 hover:text-red-300 transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">logout</span> Wyloguj
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-[1600px] mx-auto px-4 md:px-6 py-6 md:py-10">

        <?php if (isset($_SESSION['gtag_message'])): ?>
            <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 p-4 rounded-xl mb-6 text-sm flex items-center justify-between animate-fade-in">
                <span><?php echo $_SESSION['gtag_message']; ?></span>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-300">
                    <span class="material-symbols-outlined text-sm">close</span>
                </button>
            </div>
            <?php unset($_SESSION['gtag_message']); ?>
        <?php endif; ?>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 md:gap-6 mb-6 md:mb-10">
            <div class="bg-[#1e1e1e] p-4 md:p-8 rounded-2xl md:rounded-[2rem] border border-white/5 shadow-xl">
                <p
                    class="text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-widest mb-1 md:mb-2 line-clamp-1">
                    Suma wizyt</p>
                <h3 class="text-2xl md:text-4xl font-800 text-white">
                    <?php echo number_format($total_visits, 0, ',', ' '); ?>
                </h3>
            </div>
            <div class="bg-[#1e1e1e] p-4 md:p-8 rounded-2xl md:rounded-[2rem] border border-white/5 shadow-xl">
                <p
                    class="text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-widest mb-1 md:mb-2 line-clamp-1">
                    Unikalne IP</p>
                <h3 class="text-2xl md:text-4xl font-800 text-[#ee8c2b]">
                    <?php echo number_format($unique_ips, 0, ',', ' '); ?>
                </h3>
            </div>
            <div
                class="bg-[#1e1e1e] p-4 md:p-8 rounded-2xl md:rounded-[2rem] border border-white/5 shadow-xl col-span-2 lg:col-span-1">
                <p
                    class="text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-widest mb-1 md:mb-2 line-clamp-1">
                    Ostatnia wizyta</p>
                <h3 class="text-base md:text-xl font-bold text-white">
                    <?php echo !empty($visits) ? $visits[0]['visit_time'] : 'Brak danych'; ?>
                </h3>
            </div>
        </div>

        <!-- Settings Section -->
        <div class="bg-[#1e1e1e] p-6 rounded-2xl md:rounded-[2rem] border border-white/5 shadow-xl mb-6 md:mb-10 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-xl <?php echo $gtag_enabled ? 'bg-emerald-500/10 text-emerald-400' : 'bg-rose-500/10 text-rose-400'; ?>">
                    <span class="material-symbols-outlined font-bold">track_changes</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white flex items-center gap-2">
                        Google Tag (gtag.js)
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold <?php echo $gtag_enabled ? 'bg-emerald-500/20 text-emerald-400' : 'bg-rose-500/20 text-rose-400'; ?>">
                            <?php echo $gtag_enabled ? 'Aktywny' : 'Nieaktywny'; ?>
                        </span>
                    </h3>
                    <p class="text-xs text-slate-400 mt-1">Status śledzenia konwersji połączeń telefonicznych na wszystkich podstronach.</p>
                </div>
            </div>
            <form method="POST" class="w-full md:w-auto">
                <input type="hidden" name="action" value="toggle_gtag">
                <input type="hidden" name="gtag_status" value="<?php echo $gtag_enabled ? '0' : '1'; ?>">
                <button type="submit" class="w-full md:w-auto px-6 py-3 rounded-xl font-bold transition-all text-sm cursor-pointer <?php echo $gtag_enabled ? 'bg-rose-500/20 hover:bg-rose-500/30 text-rose-400 border border-rose-500/30' : 'bg-emerald-500/20 hover:bg-emerald-500/30 text-emerald-400 border border-emerald-500/30'; ?>">
                    <?php echo $gtag_enabled ? 'Wyłącz Google Tag' : 'Włącz Google Tag'; ?>
                </button>
            </form>
        </div>

        <!-- Visits Table -->
        <div class="bg-[#1e1e1e] rounded-2xl md:rounded-[2rem] border border-white/5 shadow-2xl overflow-hidden">
            <div
                class="p-4 md:p-8 border-b border-white/5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-white/[0.02]">
                <h2 class="text-lg md:text-2xl font-800 uppercase italic">Ostatnie wizyty <span
                        class="text-[10px] md:text-sm font-normal text-slate-500 normal-case not-italic ml-2">(S.
                        <?php echo $page; ?> / <?php echo $total_pages; ?>)</span></h2>
                <div class="flex items-center gap-4">
                    <form method="GET" class="flex items-center gap-2">
                        <span class="text-xs text-slate-500 uppercase font-bold">Pokaż:</span>
                        <select name="limit" onchange="this.form.submit()"
                            class="bg-[#121212] border border-white/10 rounded px-2 py-1 text-xs text-slate-300 outline-none focus:border-[#ee8c2b]">
                            <?php foreach ($allowed_limits as $l): ?>
                                <option value="<?php echo $l; ?>" <?php echo $limit == $l ? 'selected' : ''; ?>>
                                    <?php echo $l; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                    <button onclick="window.location.reload()"
                        class="p-2 hover:bg-white/5 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-400">refresh</span>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] border-b border-white/5">
                            <th class="px-4 py-3">Data/Czas</th>
                            <th class="px-3 py-3">Akcja</th>
                            <th class="px-3 py-3">IP</th>
                            <th class="px-3 py-3">Lokalizacja</th>
                            <th class="px-3 py-3">Fingerprint</th>
                            <th class="px-3 py-3">Przeglądarka</th>
                            <th class="px-3 py-3">Rozdzielczość</th>
                            <th class="px-3 py-3">Język</th>
                            <th class="px-3 py-3">Platforma</th>
                            <th class="px-3 py-3">Strefa czasowa</th>
                            <th class="px-3 py-3">Źródło</th>
                            <th class="px-3 py-3">UTM Term</th>
                            <th class="px-3 py-3">UTM Campaign</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <?php foreach ($visits as $visit): ?>
                            <?php
                            $hasClicked = (isset($visit['clicked_phone']) && $visit['clicked_phone'] == 1);
                            $hasCopied = (isset($visit['copied_phone']) && $visit['copied_phone'] == 1);
                            $rowClass = '';
                            if ($hasClicked)
                                $rowClass = 'bg-emerald-500/10';
                            elseif ($hasCopied)
                                $rowClass = 'bg-orange-500/10';
                            ?>
                            <tr class="hover:bg-white/[0.02] transition-colors group <?php echo $rowClass; ?>" title="<?php
                               if ($hasClicked)
                                   echo 'Użytkownik kliknął w numer telefonu';
                               elseif ($hasCopied)
                                   echo 'Użytkownik skopiował numer telefonu';
                               ?>">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <?php if ($hasClicked || $hasCopied): ?>
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="material-symbols-outlined <?php echo $hasClicked ? 'text-emerald-400' : 'text-orange-400'; ?> text-sm animate-pulse">
                                                <?php echo $hasClicked ? 'call' : 'content_copy'; ?>
                                            </span>
                                            <div>
                                            <?php endif; ?>
                                            <span class="text-sm font-bold text-white">
                                                <?php echo date('d.m.Y', strtotime($visit['visit_time'])); ?>
                                            </span>
                                            <span class="block text-xs text-slate-500">
                                                <?php echo date('H:i:s', strtotime($visit['visit_time'])); ?>
                                            </span>
                                            <?php if ($hasClicked || $hasCopied): ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="px-3 py-3">
                                    <span class="text-xs text-slate-400 max-w-[150px] truncate block"
                                        title="<?php echo $visit['page_url']; ?>">
                                        <?php echo parse_url($visit['page_url'], PHP_URL_PATH); ?>
                                    </span>
                                </td>
                                <td class="px-3 py-3">
                                    <span class="text-sm text-slate-300 font-mono">
                                        <?php echo $visit['ip_address']; ?>
                                    </span>
                                </td>
                                <td class="px-3 py-3">
                                    <span
                                        class="text-xs text-slate-500"><?php echo isset($visit['location']) ? $visit['location'] : '-'; ?></span>
                                </td>
                                <td class="px-3 py-3">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-[10px] text-slate-500 truncate max-w-[100px]"
                                            title="<?php echo isset($visit['fingerprint']) ? $visit['fingerprint'] : ''; ?>">
                                            <?php echo substr(isset($visit['fingerprint']) ? $visit['fingerprint'] : '', 0, 8); ?>...
                                        </span>
                                        <?php if ((isset($visit['fp_count']) ? $visit['fp_count'] : 0) > 1): ?>
                                            <span
                                                class="text-[9px] px-1.5 py-0.5 rounded-full bg-red-500/10 text-red-400 border border-red-500/20 w-fit">
                                                Powracający (<?php echo $visit['fp_count']; ?>x)
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="px-3 py-3">
                                    <span class="text-xs text-slate-300"><?php echo $visit['browser'] ?? '-'; ?></span>
                                </td>
                                <td class="px-3 py-3">
                                    <span
                                        class="text-xs text-slate-500"><?php echo isset($visit['resolution']) ? $visit['resolution'] : '-'; ?></span>
                                </td>
                                <td class="px-3 py-3">
                                    <span
                                        class="text-xs text-slate-400"><?php echo isset($visit['language']) ? $visit['language'] : '-'; ?></span>
                                </td>
                                <td class="px-3 py-3">
                                    <span
                                        class="text-xs px-2 py-1 rounded bg-white/5 text-slate-300 border border-white/10 uppercase text-[10px]">
                                        <?php echo $visit['os_system'] ?? '-'; ?>
                                    </span>
                                </td>
                                <td class="px-3 py-3">
                                    <span
                                        class="text-xs text-slate-500"><?php echo isset($visit['timezone']) ? $visit['timezone'] : '-'; ?></span>
                                </td>
                                <td class="px-3 py-3">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-[11px] text-slate-400 max-w-[150px] truncate"
                                            title="<?php echo isset($visit['source']) ? $visit['source'] : ''; ?>">
                                            <?php echo (isset($visit['source']) ? $visit['source'] : '') == 'Direct' ? 'Bezpośrednie' : (isset($visit['source']) ? $visit['source'] : '-'); ?>
                                        </span>
                                        <?php if (isset($visit['utm_source']) && $visit['utm_source']): ?>
                                            <span class="text-[9px] text-blue-400 font-bold uppercase">Src:
                                                <?php echo $visit['utm_source']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="px-3 py-3">
                                    <?php if (isset($visit['utm_term']) && $visit['utm_term']): ?>
                                        <span
                                            class="text-[10px] px-1.5 py-0.5 rounded bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 block mb-1">
                                            <?php echo $visit['utm_term']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (isset($visit['keyword']) && $visit['keyword']): ?>
                                        <span class="block text-[11px] text-[#ee8c2b] font-bold">Kwd:
                                            <?php echo $visit['keyword']; ?></span>
                                    <?php endif; ?>
                                    <?php if ((!isset($visit['utm_term']) || !$visit['utm_term']) && (!isset($visit['keyword']) || !$visit['keyword'])): ?>
                                        <span class="text-xs text-slate-600">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-3 py-3">
                                    <?php if (isset($visit['utm_campaign']) && $visit['utm_campaign']): ?>
                                        <span
                                            class="text-[10px] px-1.5 py-0.5 rounded bg-purple-500/20 text-purple-400 border border-purple-500/30">
                                            <?php echo $visit['utm_campaign']; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="text-xs text-slate-600">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (empty($visits)): ?>
                            <tr>
                                <td colspan="13" class="px-8 py-20 text-center text-slate-500 italic">Brak zarejestrowanych
                                    wizyt.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination Controls -->
            <?php if ($total_pages > 1): ?>
                <div class="p-6 border-t border-white/5 bg-white/[0.01] flex items-center justify-between">
                    <div class="text-sm text-slate-500">
                        Pokazywanie <?php echo $offset + 1; ?> - <?php echo min($total_visits, $offset + $limit); ?> z
                        <?php echo $total_visits; ?> rekordów
                    </div>
                    <div class="flex gap-2">
                        <?php if ($page > 1): ?>
                            <a href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>"
                                class="px-4 py-2 bg-white/5 hover:bg-white/10 rounded-lg text-sm transition-colors border border-white/5">Poprzednia</a>
                        <?php endif; ?>

                        <div class="flex gap-1 overflow-x-auto max-w-[300px] custom-scrollbar px-2">
                            <?php
                            $start_page = max(1, $page - 2);
                            $end_page = min($total_pages, $page + 2);
                            for ($i = $start_page; $i <= $end_page; $i++):
                                ?>
                                <a href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>"
                                    class="px-3 py-2 <?php echo $i == $page ? 'bg-[#ee8c2b] text-black font-bold' : 'bg-white/5 text-slate-400'; ?> rounded-lg text-sm transition-colors border border-white/5"><?php echo $i; ?></a>
                            <?php endfor; ?>
                        </div>

                        <?php if ($page < $total_pages): ?>
                            <a href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>"
                                class="px-4 py-2 bg-white/5 hover:bg-white/10 rounded-lg text-sm transition-colors border border-white/5">Następna</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>

</body>

</html>