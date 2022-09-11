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
                <a href=""><img src="../img/secured.png" width="100" class="my-2" alt="logo sectigo"><br></a>
                <a href=""><img src="../img/norton.jpg" width="100" class="mb-3" alt="logo norton"><br></a>
                <a href=""><img src="../img/google.jpg" width="100" alt="logo google"></a>
            </div>
            <div class="col-3">
                <h3 class="text-danger fw-bold">Social</h3>
                <a href=""><img src="../img/facebook.png" width="45" class="mt-2" alt="logo facebook"><br></a>
                <a href=""><img src="../img/insta.png" width="45" class="mt-3" alt="logo insta"></a>
            </div>
            <hr class="my-5 border border-dark border-2 opacity-75 rounded">

        </div>
        <h3 class="text-start text-danger fw-bold">Formas de Pagamento</h3>
        <div class="text-center">
            <?php
            $pagamentos = array(
                array("foto" => "../img/logo-mercadopago.png", "alt" => "logo mercado pago"),
                array("foto" => "../img/banco-bradesco.png", "alt" => "logo bradesco"),
                array("foto" => "../img/banco-brasil.png", "alt" => "logo banco brasil"),
                array("foto" => "../img/ame-digital-rei.png", "alt" => "logo ame"),
                array("foto" => "../img/banco-brasil.png", "alt" => "logo banco brasil"),
                array("foto" => "../img/banco-inter.png", "alt" => "logo banco inter"),
                array("foto" => "../img/banco-itau.png", "alt" => "logo banco itau"),
                array("foto" => "../img/banco-nu.png", "alt" => "logo banco nu"),
                array("foto" => "../img/banco-original.png", "alt" => "logo banco original"),
                array("foto" => "../img/banco-santander.png", "alt" => "logo banco santander"),
                array("foto" => "../img/bitcoin.png", "alt" => "logo bitcoin"),
                array("foto" => "../img/boleto.png", "alt" => "logo boleto"),
                array("foto" => "../img/logo-pagseguro.png", "alt" => "logo pagseguro"),
                array("foto" => "../img/mastercard.png", "alt" => "logo mastercard"),
                array("foto" => "../img/paypal-rei.png", "alt" => "logo paypal"),
                array("foto" => "../img/picpay.png", "alt" => "logo picpay"),
                array("foto" => "../img/pix-33.png", "alt" => "logo pix"),
                array("foto" => "../img/visa.png", "alt" => "logo visa"),
            );
            foreach ($pagamentos as $pagamento) {
                $final = '<img class="me-4" src="' . $pagamento['foto'] . '" alt="' . $pagamento['alt'] . '">';
                echo $final;
            }
            ?>
            <hr class="my-5 border border-dark border-2 opacity-75 rounded">
            <small>Preços e condições de pagamento exclusivos para compras pelo nosso site. Caso os produtos apresentem divergências de valores, o preço válido é o do carrinho de compras. <br>
                Vendas sujeitas à análise e confirmação de dados através de e-mail ou telefone, dados incorretos serão cancelados automaticamente.
                <br> Copyright © <?php echo date("Y") ?> Luric Coins - www.luriccoins.com.br - Todos os direitos reservados.</small>
            <br><br><br>
        </div>
    </div>
    <a href="../bank/index_bank.php" class="text-muted fixed-bottom ms-2 fw-bold text-decoration-none">By Luric</a>
</footer>