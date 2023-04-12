<?php
$host = "localhost";
$user = "root";
$password = "usbw";
$dbname = "agenda";

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
    die("Erro de configuração do banco");
}