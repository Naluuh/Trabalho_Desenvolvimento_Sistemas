<?php
include "lock.php";
include "conexao.php";

$id_usuario = $_SESSION['id'];

$sql = "SELECT * FROM contatos WHERE usuario_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id_usuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
<h2>Meus Contatos</h2>
<a href='cadastrar_contato.php'>Novo Contato</a> | <a href='logout.php'>Sair</a><br><br>
<table border='1'>
<tr><th>Nome</th><th>RG</th><th>Número</th><th>Endereço</th><th>Ações</th></tr>
<?php while ($contato = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $contato['nome'] ?></td>
    <td><?= $contato['rg'] ?></td>
    <td><?= $contato['numero'] ?></td>
    <td><?= $contato['endereco'] ?></td>
    <td><a href='deletar_contato.php?id=<?= $contato['id'] ?>'>Excluir</a></td>
</tr>
<?php endwhile; ?>
</table>
