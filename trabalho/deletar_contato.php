<?php
include "lock.php";
include "conexao.php";

$id = $_GET['id'] ?? 0;
$sql = "DELETE FROM contatos WHERE id = ? AND usuario_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $id, $_SESSION['id']);
mysqli_stmt_execute($stmt);

header("Location: dashboard.php");
exit;
?>
