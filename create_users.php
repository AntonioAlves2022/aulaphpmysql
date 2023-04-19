<?php

include_once("conexao.php");

$sql = "CREATE TABLE usuarios( ";

$sql = $sql . "id int not null primary key auto_increment, ";
$sql = $sql . "nome varchar(100) not null , ";
$sql = $sql . "email varchar(255) not null unique, ";
$sql = $sql . "senha varchar(30) not null , ";
$sql = $sql . "perfil varchar(10) not null default 'usuario') ";

$stmt = $con->prepare($sql);

if ($stmt->execute()) {
    echo "tabela criada";
} else {
    echo "Erro ao executar o sql";
}
