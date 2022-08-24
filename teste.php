<?php
include("conn.php");
session_start();

if (isset($_POST['sair'])) {

    header('Location: /index.php');
}



?>
<!-- ( ͡° ͜ʖ ͡°) -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <title>yuR1 Coins</title>
    <meta name="author" content="yuR1dev">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once("nav.php"); ?>
    <main>
        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carr.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/teste.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="row text-center mt-5" id="receba_jogos">
            </div>
        </div>
    </main>

    <?php include_once("footer.php") ?>

    <!-- Modal -->
    <div class="modal fade" id="abrir_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="staticBackdropLabel">yuR1 Coins</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h1>deseja sair?</h1>
                    <button id="sair">sim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Criar Conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h2 class="fw-bold">Dados Pessoais</h2>
                    <hr class="mb-5">
                    <input type="text" id="nome" class="btn border border-dark col-5 mb-4" placeholder="Nome">
                    <input type="text" id="cpf" class="btn border border-dark col-3 mb-4 cpf" placeholder="Cpf">
                    <input type="text" id="nasc" class="btn border border-dark col-3 mb-4 date" placeholder="Data Nascimento">
                    <input type="text" id="cep" class="btn border border-dark col-2 mb-4 cep" placeholder="Cep">
                    <input type="text" id="estado" class="btn border border-dark col-2 mb-4" placeholder="Estado">
                    <input type="text" id="cidade" class="btn border border-dark col-7 mb-4" placeholder="Cidade">
                    <input type="text" id="bairro" class="btn border border-dark col-4 mb-4" placeholder="Bairro">
                    <input type="text" id="rua" class="btn border border-dark col-6 mb-4" placeholder="Rua">
                    <input type="text" id="numero" class="btn border border-dark col-1 mb-4" placeholder="Núm">
                    <h2 class="fw-bold">Dados de Acesso</h2>
                    <hr class="mb-5">
                    <input type="email" id="email" class="btn border border-dark col-5 mb-4" placeholder="Email">
                    <input type="password" id="senha" class="btn border border-dark col-3 mb-4" placeholder="Senha">
                    <input type="password" id="senha2" class="btn border border-dark col-3 mb-4" placeholder="Repita a senha">
                    <div id="receba"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button id="enviar" class="btn btn-primary fw-bold">Criar Conta</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/mask.js"></script>
<script src="js/index.js"></script>

<script>
    $(document).ready(function() {
        $('#abrir_modau').click(function() {
            $('#abrir_modal').modal('show');
        })
        //
        $('#sair').click(function() {
            window.location.href = "index.php";
        })
        //
    });
</script>

</html>