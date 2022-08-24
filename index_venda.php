<?php
include_once("conn.php");

session_start();
session_unset();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <title>yuR1 Bank</title>
    <meta name="author" content="yuR1dev">
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
                    <a href="index_venda.php"><img src="img/logo.png" class="tamanho_logo" alt="logo yuri bank"></a>
                </div>
                <div class="col-1">
                    <a href="" class="menu" data-bs-toggle="modal" data-bs-target="#cadastro">
                        <div class="icone_login rounded"><i class="fa-solid fa-user fs-3"></i><br>Entrar</div>
                    </a>
                </div>
                <div class="col-1">
                    <a href="" class="menu" data-bs-toggle="modal" data-bs-target="#registro">
                        <div class="icone_login rounded"><i class="fa-solid fa-circle-check fs-3"></i><br>Registra-se</div>
                    </a>
                </div>
                <div class="col-1">
                    <p style="margin-top: 6rem;">0 - R$ 0,00</p>
                </div>
                <div class="col-1">
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

            <div class="card imagem" style="width: 18rem;">
                <img src="img/tibia.png" class="card-img-top" alt="compra de tibia coins">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Vender Tibia Coins</h5>
                    <p class="card-text">R$ 0,01</p>
                    <input type="number" class="form-control">
                    <a href="#" class="btn btn-secondary mt-3">VENDER</a>
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
        <p class="text-center my-4">Copyright © <?php echo date('Y'); ?> <strong>yuR1 Bank</strong> - Todos os direitos reservados.</p>

        <button id="top_btn"><i class="fa-solid fa-circle-arrow-up"></i></button>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="fw-bold">Seus dados de contato</h5>
                                </div>
                                <div class="text-end col-4">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                            <label for="nome" class="form-label mt-3">Nome<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nome" value="Nome" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <label for="sobrenome" class="form-label mt-3">Sobrenome<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="sobrenome" value="Sobrenome" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <label for="email" class="form-label mt-3">E-mail<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" value="E-mail" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <label for="celular" class="form-label mt-3">Celular<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="celular" value="Celular" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <h5 class="fw-bold mt-4">Sua senha de acesso</h5>

                            <label for="senha" class="form-label mt-3">Senha<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="senha" value="Senha" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <label for="senha" class="form-label mt-3">Repetir a senha<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="senha" value="Repetir a senha" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>

                            <h5 class="fw-bold mt-3">Novidades, ofertas e promoções por e-mail</h5>

                            <small>Deseja receber?</small>
                            <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Não</label>
                            </div>

                            <button class="btn btn-secondary col-12 mt-4" id="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <h5 class="fw-bold col-6">Já é cliente?</h5>
                        <div class="text-end col-6">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <label for="email_login" class="form-label mt-3">E-mail</label>
                    <input type="text" class="form-control" id="email_login" value="E-mail" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>

                    <label for="senha_login" class="form-label mt-3">Senha</label>
                    <input type="text" class="form-control" id="senha_login" value="Senha" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>

                    <small style="text-decoration: underline;">Solicitar nova senha</small>

                    <button class="btn btn-secondary col-12 mt-4" id="entrar">Entrar</button>
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
        $(window).scroll(function() {
            if ($(this).scrollTop() > 40) {
                $('#top_btn').fadeIn();
            } else {
                $('#top_btn').fadeOut();
            }
        })

        $('#top_btn').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 100);
        });
    });
</script>

</html>