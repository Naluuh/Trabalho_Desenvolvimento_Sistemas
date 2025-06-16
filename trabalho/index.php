<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Cadastro de Contatos</title>
</head>
<body>
    <h2>Login</h2>
    <form action="validar.php" method="post">
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
