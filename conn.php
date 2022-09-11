<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "luric_coins";
$conn = new mysqli($servidor, $usuario, $senha, $bd);

if ($conn->error) {
    die("404 sql: " . $conn->error);
}
