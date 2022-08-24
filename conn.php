<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "yuri_coins";
$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->error) {
    die("404 database: " . $conn->error);
}
