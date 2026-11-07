
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin - Seminar Registration</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/style.css">
</head>

<body class="login-page">

    <main class="login-card">

        <div class="brand-mark">SR</div>

        <h1>Seminar Registration</h1>

        <p class="muted">
            Silakan masuk untuk mengelola peserta.
        </p>

        <?php if (!empty($error)): ?>
            <div class="alert error">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= BASE_URL ?>/login">

            <label>Username</label>
            <input
                name="username"
                required
                autocomplete="username"
                value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
            >

            <label>Password</label>
            <input
                type="password"
                name="password"
                required
                autocomplete="current-password"
            >

            <button class="btn primary full" type="submit">
                Masuk
            </button>

        </form>

        <p class="hint">
            Akun awal: <b>admin</b> / <b>admin123</b>
        </p>

    </main>

</body>
</html>
