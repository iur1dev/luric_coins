<?php
include_once("conn.php");

session_start();

function gerarJogos()
{
    $jogos = array(
        array("jogo" => "Tibia Coins", "foto" => "img/tibia_coins.png", "src" => "tibia coins", "href" => "tibia.php"),
        array("jogo" => "KK`s", "foto" => "img/tibia_kk.jpg", "src" => "logo dota2", "href" => "tibia.php"),
        array("jogo" => "Character", "foto" => "img/tibia_character.jpeg", "src" => "character", "href" => "tibia.php"),
        array("jogo" => "Items", "foto" => "img/ferumbras_hat.webp", "src" => "logo cabal", "href" => "tibia.php"),
        array("jogo" => "Service", "foto" => "img/tibia_service.jpg", "src" => "logo fortnite", "href" => "tibia.php"),
    );

    foreach ($jogos as $jogo) {
        $tudo = '<div class="jogos imagem mx-auto my-4 me-4"><picture><a href="' . $jogo['href'] . '"><img src="' . $jogo['foto'] . '"
    class="border border-danger border-5 rounded img-fluid" alt="' . $jogo['src'] . '"></a>
    <figcaption class="fw-bold">' . $jogo['jogo'] . '</picture></div>';
        echo $tudo;
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
    <title>Luric Coins</title>
    <meta name="author" content="Luric">
    <meta name="description" content="site de compras tibiana">
    <meta name="keywords" content="luric coins, coins, tibia, tibia coins">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php include_once("nav.php"); ?>

    <main>
        <div class="bg-secondary p-3 text-center fw-bold text-light fs-5">⏱️ Prazo Médio: 05 à 50 Minutos! (Boletos de 24 à 72h Úteis) 📅 Trabalhamos TODOS Os Dias do ANO, Incluindo FERIADOS!</div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carr.png" class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item"> -->
                <!-- <img src="img/teste.jpg" class="d-block w-100" alt="..."> -->
                <!-- </div> -->
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
            <div class="row text-center mt-5">
                <?php
                gerarJogos();
                ?>
            </div>
        </div>
    </main>

    <?php include_once("footer.php") ?>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/mask.js"></script>
<script src="js/index.js"></script>

</html>