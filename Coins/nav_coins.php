<nav>
    <div class="container">
        <div class="row">

            <div class="col-4"></div>

            <div class="col-4 text-center">
                <a href="index_coins.php"><img src="../img/logo.png" style="width: 500px;" class="img-fluid yuri" alt="logo yuri coins"></a>
            </div>

            <div class="col-2 text-center margin_top2">
                <?php if (!isset($_SESSION['nome'])) { ?>
                    <a href="logar_coins.php" class="text-decoration-none text-dark hover_opacity">
                        <i class="fa-solid fa-user fs-1"></i><br>
                        <span class="fw-bold fs-5">Faça Login</span>
                    </a>
                <?php } ?>
            </div>

            <div class="col-2 text-center margin_top2">
                <?php if (!isset($_SESSION['nome'])) { ?>
                    <a href="usuarios_coins.php" class="text-decoration-none text-dark hover_opacity">
                        <i class="fa-solid fa-registered fs-1"></i><br>
                        <span class="fw-bold fs-5">Criar uma Conta</span>
                    </a>
                <?php } ?>
                <?php if (isset($_SESSION['nome'])) { ?>
                    <a href="logout_coins.php" class="text-decoration-none text-dark hover_opacity">
                        <i class="fa-solid fa-circle-xmark fs-1"></i><br>
                        <span class="fw-bold fs-5">Sair</span>
                    </a>
                <?php } ?>
            </div>

        </div>
    </div>
</nav>