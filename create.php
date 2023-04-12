<?php
include_once("conexao.php");

$sql = "Create table contatos(";
$sql = $sql . "id int not null primary key, ";
$sql = $sql . "nome varchar(100) not null, ";
$sql = $sql . "email varchar(255) not null unique, ";
$sql = $sql . "telefone varchar(20)";
$sql = $sql . ")";

$stmt = $con->prepare($sql);

if ($stmt->execute()) {
    echo "tabela criada";
} else {
    echo "Erro ao executar o sql";
    
}