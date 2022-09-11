<?php
include_once("conn.php");

$sql_code = "SELECT * FROM estoque_coins;";
$sql_query = $conn->query($sql_code) or die("404 mysql: " . $conn->error);

$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome']) || empty($_POST['qnt'])) {
        echo "digita as paradas";
    } else {
        $personagem = $_POST['nome'];
        $qnt = $_POST['qnt'];

        $sql_update = "UPDATE estoque_coins SET coins = coins - '$qnt'";
        $query = $conn->query($sql_update) or die("404 mysql: " . $conn->error);

        $sql_insert = "INSERT INTO compras(personagem, quantidade)
        VALUE ('$personagem', '$qnt')";
        $query2 = $conn->query($sql_insert) or die("404 mysql: " . $conn->error);

       
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
    <title>Jogo - Tibia</title>
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
        <div class="container">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-4">
                    <img src="img/tibia.png" class="tamanho_imagem border border-danger border-5 rounded img-fluid" alt="logo tibia">
                </div>
                <div class="col-4">
                    <h5 class="fw-bold">Tibia Coins</h5>
                    <?php while ($linha = mysqli_fetch_assoc($sql_query)) { ?>

                        <p>Disponível em estoque: <?php echo $linha['coins']; ?> </p>
                    <?php if (isset($_POST['comprar'])) {
                            if ($_POST['qnt'] > $linha['coins']) {
                                $erro = '<div class="alert alert-danger mt-4" role="alert">
                                Não temos essa quantidade no momento :/
                              </div>';
                            }
                        }
                    } ?>
                    <form action="" method="POST">
                        <h5 class="fw-bold">R$<span id="valor" name="valor" class="fw-bold">0,00</span></h5>
                        <label for="nome" class="form-label">Nome do Personagem</label>
                        <input type="text" class="form-control" id="nome" name="nome">

                        <label for="qnt" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="qnt" name="qnt">
                        <button class="btn btn-danger col-12 mt-4" type="submit" id="comprar" name="comprar">Comprar</button>
                        <div><?php echo $erro; ?></div>
                    </form>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </main>

    <?php include_once("footer.php"); ?>

    <!-- Modal -->
    <div class="modal fade" id="final_compra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seu carrinho</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <img src="img/tibia.png" class="border border-danger border-5 rounded col-4" style="height: 100px;width: 100px;" alt="logo tibia">
                        <div class="col-8">
                            <small class="fw-bold">Tibia Coins</small>
                            <br>
                            <small id="receba_nome"></small>
                            <br>
                            <small id="receba_qnt"></small>
                            <br>
                        </div>
                        <small class="text-end fw-bold"><span id="receba_valor"></span></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ver carrinho</button>
                    <button type="button" class="btn btn-danger">Finalizar pedido</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/mask.js"></script>

<script>
    $(document).ready(function() {
        let coin = 0.27;
        $('#qnt').blur(function() {
            let qnt = $('#qnt').val();
            let final = qnt * coin
            $('#valor').html(final.toFixed(2).replace(".", ","))
        });
        //
        $('#comprar').click(function() {
            let nome = $('#nome').val();
            let qnt = $('#qnt').val();
            let valor = $('#valor').text();
            $('#receba_nome').html('Nome do personagem: ' + nome);
            $('#receba_qnt').html('Quantidade: ' + qnt);
            $('#receba_valor').html('Valor: R$ ' + valor);
        })
    })
</script>

</html>