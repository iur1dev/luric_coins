<?php
include_once('../conn.php');
header('Content-Type: application/json');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$sql_query = $conn->query($sql_code) or die("404 codigo mysql: " . $conn->error);

$quantidade = $sql_query->num_rows;


if ($quantidade == 1) {
    $usuario = $sql_query->fetch_assoc();

    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['nome'] = $usuario['nome'];
    $dest = 'window.location.href = "teste.php"';
    echo json_encode($dest);
} else {
    $msg = '<div class="alert alert-danger" role="alert">
    Email ou Senha Incorreto !!!
  </div>';
    echo json_encode($msg);
}
