<?php
include_once("conn.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>Digite o e-mail</div>";
    } else if (strlen($_POST['senha']) == 0) {
        $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>Digite sua senha</div>";
    } else {
        // limpa as inputs contra php injected
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM usuarios where email = '$email' AND senha = '$senha'";
        $query = $conn->query($sql) or die("404 codigo sql" . $conn->error);

        $quantidade = $query->num_rows;

        if ($quantidade == 1) {
            $usuario = $query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["id"] = $usuario["usuarios_id"];
            $_SESSION["nome"] = $usuario["nome"];

            header("Location: index_venda.php");
        } else {
            $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>E-mail ou senha incorretos</div>";
        }
    }
}
?>
<!-- ( ͡° ͜ʖ ͡°) -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <title>Luric Bank</title>
    <meta name="author" content="Luric">
    <meta name="description" content="site de vendas tibiana">
    <meta name="keywords" content="tibia,coins">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
</head>
<style>
    body {
  background-image: url("img/fundo.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 mx-auto">
                <form action="" method="POST" class="bg-light rounded p-3" style="margin-top: 50%;">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold"><i class="fa-solid fa-user"></i> E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" <?php if (isset($email)) {
                                                                                                                    echo "value='" . $_POST['email'] . "'";
                                                                                                                } ?>>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label fw-bold"><i class="fa-solid fa-lock"></i> Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                    <small><?php if (isset($erro)) {
                                echo $erro;
                            }; ?></small>
                    <button type="submit" class="btn btn-primary col-12 fw-bold">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/messages_pt_BR.js"></script>
</body>

</html>