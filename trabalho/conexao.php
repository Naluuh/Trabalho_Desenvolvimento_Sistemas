<?php
$host = "localhost";
$usuario = "root";
$senha = "olive3481";
$banco = "cadastro_contatos";
$conn = mysqli_connect($host, $usuario, $senha, $banco);
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
