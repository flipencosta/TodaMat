<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodaMat - Registro</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="logo">TodaMat</div>
        <div class="login"><a href="login.php">Login</a></div>
    </header>
    <main>
        <h1>Registro</h1>
        <form action="process_register.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Registrar</button>
        </form>
    </main>
    <footer>
        <button onclick="toggleNightMode()">Modo Noturno</button>
    </footer>
</body>
</html>
