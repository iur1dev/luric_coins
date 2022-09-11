<?php
include_once('../conn.php');
header('Content-Type: application/json');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario_vendas(nome, sobrenome, email, celular, senha)
        VALUE ('$nome', '$sobrenome', '$email', '$celular', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
