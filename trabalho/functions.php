<?php
function mensagem($texto, $tipo = "sucesso") {
    echo "<div class='alert alert-$tipo'>$texto</div>";
}
?>
