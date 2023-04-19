<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
include_once("conexao.php");
?>


<form method="POST" action="create.php" id="tb_contatos">
    <button type="submit">
        Criar tabela contatos
    </button>
</form>
<form method="POST" action="create_users.php" id="tb_usuarios">
    <button type="submit">
        Criar tabela usuarios
    </button>
</form>