<?php
include('../conn.php');
header('Content-Type: application/json');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nasc = $_POST['nasc'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO USUARIO(nome, cpf, nasc, cep, estado, cidade, bairro, rua, numero, email, senha)
        VALUE ('$nome', '$cpf', '$nasc', '$cep', '$estado', '$cidade','$bairro','$rua', '$numero', '$email', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
