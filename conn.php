<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdd = "luric_coins";
$conn = new mysqli($servidor, $usuario, $senha, $bdd);

if ($conn->error) {
    die("404 bdd: " . $conn->error);
}
