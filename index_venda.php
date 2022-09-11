<?php
include_once("conn.php");

session_start();

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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4 text-center">
                    <a href="index_venda.php"><img src="img/logo.png" style="width: 500px;" class="img-fluid yuri" alt="logo yuri coins"></a>
                </div>
                <div class="col-1 margin_top">
                    <?php if (!isset($_SESSION['nome'])) { ?>
                        <a href="logar_bank.php" class="menu">
                            <div class="icone_login rounded"><i class="fa-solid fa-user fs-3"></i><br>Entrar</div>
                        </a>
                    <?php } ?>
                </div>
                <div class="col-1 margin_top">
                    <?php if (!isset($_SESSION['nome'])) { ?>
                        <a href="register_bank.php" class="menu">
                            <div class="icone_login rounded"><i class="fa-solid fa-circle-check fs-3"></i><br>Registra-se</div>
                        </a>
                    <?php } ?>
                </div>
                <div class="col-1 margin_top">
                    <?php if (isset($_SESSION['nome'])) { ?>
                        <a href="logout.php" class="menu">
                            <div class="icone_login rounded"><i class="fa-solid fa-circle-xmark fs-3"></i><br>Sair</div>
                        </a>
                    <?php  } ?>
                </div>
                <div class="col-1 margin_top">
                    <i class="fa-solid fa-cart-shopping fs-3 rounded bg-secondary p-3 text-light" style="margin-top: 5rem;"></i>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="text-center bg-secondary p-3 nav_fixa">
            <div class="row">
                <div class="col-1"></div>
                <a href="index_venda.php" class="col-2 menu2">
                    <div class="fw-bold"><i class="fa-solid fa-house fs-5"></i> HOME</div>
                </a>
                <a href="" class="col-2 menu2">
                    <div class="fw-bold"><i class="fa-solid fa-star fs-5"></i> QUEM SOMOS</div>
                </a>
                <a href="" class="col-2 menu2">
                    <div class="fw-bold"><i class="fa-solid fa-circle-question fs-5"></i> COMO FUNCIONA</div>
                </a>
                <a href="" class="col-2 menu2">
                    <div class="fw-bold"><i class="fa-solid fa-envelope fs-5"></i> ENTRE EM CONTATO</div>
                </a>
                <a href="" class="col-2 menu2">
                    <div class="fw-bold"><i class="fa-solid fa-truck-fast fs-5"></i> CONFIRMAR ENVIO</div>
                </a>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container text-center">
            <img src="img/yuri_bank.png" class="rounded mt-4" alt="tutorial yuri bank">
            <br>
            <span class="badge bg-secondary mt-5 p-3 fs-4">OFERTAS</span>

            <div class="card" style="width: 18rem;">
                <img src="img/tibia.png" class="card-img-top" alt="compra de tibia coins">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Vender Tibia Coins</h5>

                    <p class="card-text" name="valor" id="valor">0,00</p>
                    <input type="number" name="qnt" id="qnt" class="form-control">
                    <button class="btn btn-secondary mt-3" name="abrir_m" id="abrir_m">VENDER</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div style="background-color: rgb(236, 236, 236);" class="p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h5 class="fw-bold">INFORMAÇÕES</h5>
                        <a href="" class="rodape"><span>Quem Somos</span></a>
                        <br>
                        <a href="" class="rodape"><span>Como Funciona</span></a>
                        <br>
                        <a href="" class="rodape"><span>Entre em Contato</span></a>
                    </div>
                    <div class="col-3">
                        <h5 class="fw-bold">MINHA CONTA</h5>
                        <a href="" class="rodape"><span>Minha Conta</span></a>
                        <br>
                        <a href="" class="rodape"><span>Histórico de Pedidos</span></a>
                        <br>
                        <a href="" class="rodape"><span>Confirmar Envio</span></a>
                    </div>
                    <div class="col-3">
                        <h5 class="fw-bold">SITE SEGURO</h5>
                        <img src="img/google.jpg" alt="seguranca google">
                        <img src="img/norton.jpg" alt="seguranca norton">
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center my-4">Copyright © <?php echo date('Y'); ?> <strong>Luric Bank</strong> - Todos os direitos reservados.</p>

        <button id="top_btn"><i class="fa-solid fa-circle-arrow-up"></i></button>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Opções disponíveis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="pix" class="form-label">Pix CPF ou CNPJ (Proibido outras chaves)</label>
                        <input type="text" class="form-control cpf" placeholder="Pix CPF ou CNPJ (Proibido outras chaves)" id="pix" name="pix" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo do Titular do PIX</label>
                        <input type="text" class="form-control" placeholder="Nome Completo do Titular do PIX" id="nome" name="nome" aria-describedby="emailHelp">
                    </div>

                    <div class="alert alert-primary text-center" role="alert">
                        Quantidade mínima para venda: 250
                    </div>
                    <div id="r_valor" class="alert alert-primary text-center" role="alert"></div>
                    <div id="r_qnt" class="alert alert-primary text-center" role="alert"></div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary fw-bold" id="final">Vender</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/index_venda.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/messages_pt_BR.js"></script>

    <script>
        $(document).ready(function() {
            let coin = 0.13;
            $('#qnt').blur(function() {
                let qnt = $('#qnt').val();
                let final = qnt * coin
                $('#valor').html(final.toFixed(2).replace(".", ","))
            });
            //
            $('#abrir_m').click(function() {
                $('#exampleModal').modal('show');
                let valor = $('#valor').text();
                let qnt = $('#qnt').val();

                $('#r_valor').text(valor);
                $('#r_qnt').html(qnt + ' Coins');

            })
            //
            $('#final').click(function() {
                let pix = $('#pix').val();
                let nome = $('#nome').val();
                let valor = $('#r_valor').text();
                let qnt = $('#r_qnt').text();

                $.ajax({
                    url: "ajax/insert_index.php",
                    type: "POST",
                    data: {
                        pix: pix,
                        nome: nome,
                        valor: valor,
                        qnt: qnt

                    },
                    dataType: "json",
                    success: function(dados, status) {
                        alert(status);
                        alert(dados);
                    },
                    error: function(dados, status) {
                        alert(status);
                        alert(dados);
                    },
                });
            })
            $('#top_btn').click(function() {
                $(window).scrollTop(0);
            })


        })
    </script>

</body>

</html>