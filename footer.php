<footer>
    <hr class="my-5 border border-dark border-2 opacity-75 rounded">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3 class="text-danger fw-bold">Sobre</h3>
                <a href=""><small class="text-dark">Quem Somos</small><br></a>
                <a href=""><small class="text-dark">Depoimentos</small><br></a>
                <a href=""><small class="text-dark">FAQ</small><br></a>
                <a href=""><small class="text-dark">Politicas de entrega</small><br></a>
                <a href=""><small class="text-dark">Politicas e termos de Uso</small><br></a>
                <a href=""><small class="text-dark">Entre em contato</small></a>
            </div>
            <div class="col-3">
                <h3 class="text-danger fw-bold">Minha Conta</h3>
                <a href=""><small class="text-dark">Minha conta</small><br></a>
                <a href=""><small class="text-dark">Historico e pedidos</small><br></a>
                <a href=""><small class="text-dark">informativo</small></a>
                <h3 class="text-danger fw-bold mt-2">MARKETING</h3>
                <a href=""><small class="text-dark">Compre com tibia coins</small><br></a>
                <a href=""><small class="text-dark">Venda seus tibia coins</small></a>
            </div>
            <div class="col-3">
                <h3 class="text-danger fw-bold">Segurança</h3>
                <a href=""><img src="img/secured.png" width="100" class="my-2" alt="logo sectigo"><br></a>
                <a href=""><img src="img/norton.jpg" width="100" class="mb-3" alt="logo norton"><br></a>
                <a href=""><img src="img/google.jpg" width="100" alt="logo google"></a>
            </div>
            <div class="col-3">
                <h3 class="text-danger fw-bold">Social</h3>
                <a href=""><img src="img/facebook.png" width="45" class="mt-2" alt="logo facebook"><br></a>
                <a href=""><img src="img/insta.png" width="45" class="mt-3" alt="logo insta"></a>
            </div>
            <hr class="my-5 border border-dark border-2 opacity-75 rounded">

        </div>
        <h3 class="text-start text-danger fw-bold">Formas de Pagamento</h3>
        <div class="text-center">
            <?php
            gerarPagamentos();
            ?>
            <hr class="my-5 border border-dark border-2 opacity-75 rounded">
            <small>Preços e condições de pagamento exclusivos para compras pelo nosso site. Caso os produtos apresentem divergências de valores, o preço válido é o do carrinho de compras. <br>
                Vendas sujeitas à análise e confirmação de dados através de e-mail ou telefone, dados incorretos serão cancelados automaticamente.
                <br> Copyright © <?php echo date("Y") ?> yuR1 Coins - www.yur1coins.com.br - Todos os direitos reservados.</small>
            <br><br><br>
        </div>
    </div>
    <a href="index.php" class="text-muted fixed-bottom ms-2 fw-bold text-decoration-none">By yuR1dev</a>
</footer>