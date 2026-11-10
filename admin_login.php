<?php
session_start();
include 'config.php';

if (isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_dashboard.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user && $pass) {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->execute([$user]);
        $row = $stmt->fetch();

        if ($row && password_verify($pass, $row['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = $user;
            header('Location: admin_dashboard.php');
            exit();
        } else {
            $error = 'Nieprawidłowy login lub hasło.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pl" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#121212] flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-[#1e1e1e] rounded-3xl border border-white/10 shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-flex p-3 bg-primary/20 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#ee8c2b]" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-3xl font-800 text-white uppercase italic tracking-tight">Admin <span
                    class="text-[#ee8c2b]">Login</span></h1>
            <p class="text-slate-400 mt-2">Zaloguj się, aby zarządzać projektem</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-500/10 border border-red-500/50 text-red-500 p-4 rounded-xl mb-6 text-sm">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Użytkownik</label>
                <input type="text" name="username" required
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#ee8c2b] transition-colors">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Hasło</label>
                <input type="password" name="password" required
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#ee8c2b] transition-colors">
            </div>
            <button type="submit"
                class="w-full bg-[#ee8c2b] text-black font-800 py-4 rounded-xl hover:scale-[1.02] active:scale-[0.98] transition-all shadow-lg shadow-[#ee8c2b]/20">
                Zaloguj się
            </button>
        </form>
    </div>
</body>

</html>