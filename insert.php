<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
include_once("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nivel = $_POST["nivel"];

    $sql = "INSERT INTO usuarios ";
    $sql = $sql . "(nome, email,senha,perfil
    ) ";
    $sql = $sql . "VALUES (?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param(
        "ssss",
        $nome,
        $email,
        $senha,
        $nivel
    );

    if ($stmt->execute()) {
        header("location:index.php");
    } else {
        header("location:cadastro.php");
    }
}