<?php
include_once("conn.php");

session_start();
session_unset();

function gerarJogos()
{
    $jogos = array(
        array("jogo" => "Tibia", "foto" => "img/tibia.png", "src" => "logo tibia"),
        array("jogo" => "League of Legends", "foto" => "img/lol.jpg", "src" => "logo league of legends"),
        array("jogo" => "Cabal", "foto" => "img/cabal.jpg", "src" => "logo cabal"),
        array("jogo" => "Dota 2", "foto" => "img/dota2.jpg", "src" => "logo dota2"),
        array("jogo" => "Fortnite", "foto" => "img/fortnite.jpg", "src" => "logo fortnite"),
        array("jogo" => "Priston Tale", "foto" => "img/priston_tale.jpg", "src" => "logo priston tale"),
        array("jogo" => "Teamfight Tactics", "foto" => "img/tft.png", "src" => "logo teamfight tactics"),
        array("jogo" => "Overwatch", "foto" => "img/overwatch.png", "src" => "logo overwatch"),
        array("jogo" => "Valorant", "foto" => "img/valorant.png", "src" => "logo valorant"),
        array("jogo" => "World of Warcraft", "foto" => "img/wow.jpg", "src" => "logo wow"),
    );

    foreach ($jogos as $jogo) {
        $tudo = '<div class="jogos imagem mx-auto my-4 me-4"><picture><a href="#"><img src="' . $jogo['foto'] . '"
    class="border border-danger border-5 rounded img-fluid" alt="' . $jogo['src'] . '"></a>
    <figcaption class="fw-bold">' . $jogo['jogo'] . '</picture></div>';
        echo $tudo;
    }
}
//
function gerarPagamentos()
{
    $pagamentos = array(
        array("foto" => "img/logo-mercadopago.png", "alt" => "logo mercado pago"),
        array("foto" => "img/banco-bradesco.png", "alt" => "logo bradesco"),
        array("foto" => "img/banco-brasil.png", "alt" => "logo banco brasil"),
        array("foto" => "img/ame-digital-rei.png", "alt" => "logo ame"),
        array("foto" => "img/banco-brasil.png", "alt" => "logo banco brasil"),
        array("foto" => "img/banco-inter.png", "alt" => "logo banco inter"),
        array("foto" => "img/banco-itau.png", "alt" => "logo banco itau"),
        array("foto" => "img/banco-nu.png", "alt" => "logo banco nu"),
        array("foto" => "img/banco-original.png", "alt" => "logo banco original"),
        array("foto" => "img/banco-santander.png", "alt" => "logo banco santander"),
        array("foto" => "img/bitcoin.png", "alt" => "logo bitcoin"),
        array("foto" => "img/boleto.png", "alt" => "logo boleto"),
        array("foto" => "img/logo-pagseguro.png", "alt" => "logo pagseguro"),
        array("foto" => "img/mastercard.png", "alt" => "logo mastercard"),
        array("foto" => "img/paypal-rei.png", "alt" => "logo paypal"),
        array("foto" => "img/picpay.png", "alt" => "logo picpay"),
        array("foto" => "img/pix-33.png", "alt" => "logo pix"),
        array("foto" => "img/visa.png", "alt" => "logo visa"),
    );
    foreach ($pagamentos as $pagamento) {
        $final = '<img class="me-4" src="' . $pagamento['foto'] . '" alt="' . $pagamento['alt'] . '">';
        echo $final;
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
            <div class="row text-center">
                <?php
                gerarJogos();
                ?>
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
                    <h1 class="fw-bold my-5">Login</h1>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="email__" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
                        <input type="password" id="senha__" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon2">
                    </div>
                    <div id="receba2"></div>
                    <button id="enviar_entrar" style="width: 300px;" class="btn btn-primary my-3 mt-5 fw-bold">Entrar</button><br>
                    <hr>
                    <p class="text-muted">Não tem Cadastro ?</p>
                    <a class="btn btn-success mb-5" data-bs-toggle="modal" style="width: 300px;" data-bs-target="#registro">Crie uma Conta</a>
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
                    <input type="text" id="nome" require class="btn border border-dark col-5 mb-4" placeholder="Nome">
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

</html>