<?php
// Sistema de login básico

session_start();
require 'user_data.php'; // Inclui os dados de usuário armazenados (simulação)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Verificação de usuário com dados armazenados
    if ($username === $stored_username && password_verify($password, $stored_hashed_password)) {
        $_SESSION['loggedin'] = true;
        header('Location: ../index.html');
        exit();
    } else {
        $error = 'Login inválido';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodaMat - Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="logo">TodaMat</div>
        <div class="login"><a href="login.php">Login</a></div>
    </header>
    <main>
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </main>
    <footer>
        <button onclick="toggleNightMode()">Modo Noturno</button>
    </footer>
</body>
</html>
