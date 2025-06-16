<?php
include "lock.php";
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $rg = $_POST['rg'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $endereco = $_POST['endereco'] ?? '';

    if ($nome && $rg && $numero && $endereco) {
        $sql = "INSERT INTO contatos (usuario_id, nome, rg, numero, endereco) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "issss", $_SESSION['id'], $nome, $rg, $numero, $endereco);
        mysqli_stmt_execute($stmt);
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Preencha todos os campos.";
    }
}
?>
<form method="post">
    Nome: <input type="text" name="nome"><br>
    RG: <input type="text" name="rg"><br>
    Número: <input type="text" name="numero"><br>
    Endereço: <textarea name="endereco"></textarea><br>
    <button type="submit">Salvar</button>
</form>
