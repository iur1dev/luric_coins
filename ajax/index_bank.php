<?php
include_once('../conn.php');
header('Content-Type: application/json');

$pix = $_POST['pix'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$qnt = $_POST['qnt'];

$sql = "INSERT INTO coins_bank(chave, nome, valor, qnt)
        VALUE ('$pix', '$nome', '$valor', '$qnt')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
