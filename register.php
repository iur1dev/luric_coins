<?php
include_once("conn.php");

$emailErro = "";
$senhaErro = "";
$senha2Erro = "";
$celularErro = "";
$nomeErro = "";
$cpfErro = "";
$nascErro = "";
$cepErro = "";
$estadoErro = "";
$cidadeErro = "";
$bairroErro = "";
$ruaErro = "";
$numeroErro = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // nome
    if (empty($_POST['nome'])) {
        $nomeErro = "<small>Digite o nome</small>";
    } else {
        $nome = limpaPost($_POST['nome']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            $nomeErro = "<small>Não pode conter número</small>";
        }
    }
    // email
    if (empty($_POST['email'])) {
        $emailErro = "<small>Digite o e-mail</small>";
    } else {
        $email = limpaPost($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErro = "<small>e-mail inválido</small>";
        }
    }
    // senha
    if (empty($_POST['senha'])) {
        $senhaErro = "<small>Digite a senha</small>";
    } else {
        $senha = limpaPost($_POST['senha']);
        if (strlen($senha < 6)) {
            $senhaErro = "<small>Senha deve ter mais de 6 digitos</small>";
        }
    }
    // repete senha
    if (empty($_POST['senha2'])) {
        $senha2Erro = "<small>Digite a repetição de senha</small>";
    } else {
        $senha2 = limpaPost($_POST['senha2']);
        if ($senha2 !== $senha) {
            $senha2Erro = "<small>Senha inválida</small>";
        }
    }
    // celular
    if (empty($_POST['celular'])) {
        $celularErro = "<small>Digite o celular</small>";
    } else {
        $celular = limpaPost($_POST['celular']);
    }
    // cpf
    if (empty($_POST['cpf'])) {
        $cpfErro = "<small>Digite o cpf</small>";
    } else {
        $cpf = limpaPost($_POST['cpf']);
    }
    // nasc
    if (empty($_POST['nasc'])) {
        $nascErro = "<small>Digite o nascimento</small>";
    } else {
        $nasc = limpaPost($_POST['nasc']);
    }
    // cep
    if (empty($_POST['cep'])) {
        $cepErro = "<small>Digite o cep</small>";
    } else {
        $cep = limpaPost($_POST['cep']);
        $estado = limpaPost($_POST['estado']);
        $cidade = limpaPost($_POST['cidade']);
        $bairro = limpaPost($_POST['bairro']);
        $rua = limpaPost($_POST['rua']);
    }
    // numero
    if (empty($_POST['numero'])) {
        $numeroErro = "<small>Digite o número</small>";
    } else {
        $numero = limpaPost($_POST['numero']);
    }


    if (
        empty($emailErro) && empty($senhaErro) && empty($celularErro) && empty($nomeErro) && empty($cpfErro)
        && empty($numeroErro) && empty($cepErro)
    ) {
        $sql = "INSERT INTO usuarios_index(email, senha, celular, nome, cpf, nasc, cep, estado, cidade, bairro, rua, numero)
        VALUE ('$email', '$senha', '$celular', '$nome', '$cpf', '$nasc', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero')";

        if (mysqli_query($conn, $sql)) {
            header('Location: logar.php');
        } else {
            echo json_encode("404" . mysqli_error($conn));
        }
    }
}

function limpaPost($valor)
{
    // tira os espacos em branco
    $valor = trim($valor);
    // tira as barras
    $valor = stripslashes($valor);
    // tira caracter especial
    $valor = htmlspecialchars($valor);
    return $valor;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <title>Luric Coins</title>
    <meta name="author" content="Luric">
    <meta name="description" content="site de vendas tibiana">
    <meta name="keywords" content="tibia,coins">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        background-image: url("img/fundo2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6 mx-auto">
            <form class="row g-3 bg-light rounded p-2" action="" method="POST" style="margin-top: 10%;">
                <div class="col-md-6">
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="E-mail" <?php if (!empty($emailErro)) {
                                                                                                    echo "id='invalidoEmail'";
                                                                                                } ?> <?php if (isset($email)) {
                                                                                                            echo "value='" . $_POST['email'] . "'";
                                                                                                        } ?>>
                    <span class="erro fw-bold"><?php echo $emailErro; ?></span>
                </div>

                <div class="col-md-6">
                    <label for="celular" class="form-label fw-bold">Celular</label>
                    <input type="text" class="form-control phone_with_ddd" name="celular" placeholder="Celular" <?php if (!empty($celularErro)) {
                                                                                                                    echo "id='invalidoCelular'";
                                                                                                                } ?> <?php if (isset($celular)) {
                                                                                                                            echo "value='" . $_POST['celular'] . "'";
                                                                                                                        } ?>>
                    <span class="erro fw-bold"><?php echo $celularErro; ?></span>
                </div>

                <div class="col-md-6">
                    <label for="senha" class="form-label fw-bold">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" <?php if (!empty($senhaErro)) {
                                                                                                        echo "id='invalidoSenha'";
                                                                                                    } ?> <?php if (isset($senha)) {
                                                                                                                echo "value='" . $senha . "'";
                                                                                                            } ?>>
                    <span class="erro fw-bold"><?php echo $senhaErro; ?></span>
                </div>

                <div class="col-md-6">
                    <label for="senha2" class="form-label fw-bold">Repita a Senha</label>
                    <input type="password" class="form-control" name="senha2" placeholder="Repita a senha" <?php if (!empty($senha2Erro)) {
                                                                                                                echo "id='invalidoSenha2'";
                                                                                                            } ?> <?php if (isset($senha2)) {
                                                                                                                        echo "value='" . $_POST['senha2'] . "'";
                                                                                                                    } ?>>
                    <span class="erro fw-bold"><?php echo $senha2Erro; ?></span>
                </div>

                <div class="col-md-6">
                    <label for="nome" class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" <?php if (!empty($nomeErro)) {
                                                                                                echo "id='invalidoNome'";
                                                                                            } ?> <?php if (isset($nome)) {
                                                                                                        echo "value='" . $_POST['nome'] . "'";
                                                                                                    } ?>>
                    <span class="erro fw-bold"><?php echo $nomeErro; ?></span>
                </div>

                <div class="col-md-3">
                    <label for="cpf" class="form-label fw-bold">Cpf</label>
                    <input type="text" class="form-control cpf" name="cpf" placeholder="Cpf" <?php if (!empty($cpfErro)) {
                                                                                                    echo "id='invalidoCpf'";
                                                                                                } ?> <?php if (isset($cpf)) {
                                                                                                            echo "value='" . $_POST['cpf'] . "'";
                                                                                                        } ?>>
                    <span class="erro fw-bold"><?php echo $cpfErro; ?></span>
                </div>

                <div class="col-md-3">
                    <label for="nasc" class="form-label fw-bold">Nascimento</label>
                    <input type="text" class="form-control date" name="nasc" placeholder="Nascimento" <?php if (!empty($nascErro)) {
                                                                                                            echo "id='invalidoNasc'";
                                                                                                        } ?> <?php if (isset($nasc)) {
                                                                                                                    echo "value='" . $_POST['nasc'] . "'";
                                                                                                                } ?>>
                    <span class="erro fw-bold"><?php echo $nascErro; ?></span>
                </div>

                <div class="col-md-3">
                    <label for="cep" class="form-label fw-bold">Cep</label>
                    <input type="text" class="form-control cep" name="cep" id="cep" placeholder="Cep" <?php if (!empty($cepErro)) {
                                                                                                            echo "id='invalidoCep'";
                                                                                                        } ?> <?php if (isset($cep)) {
                                                                                                                    echo "value='" . $_POST['cep'] . "'";
                                                                                                                } ?>>
                    <span class="erro fw-bold"><?php echo $cepErro; ?></span>
                </div>

                <div class="col-md-9">
                    <label for="rua" class="form-label fw-bold">Rua</label>
                    <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua" readonly <?php if (isset($rua)) {
                                                                                                                echo "value='" . $_POST['rua'] . "'";
                                                                                                            } ?>>
                </div>

                <div class="col-md-6">
                    <label for="bairro" class="form-label fw-bold">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" readonly <?php if (isset($bairro)) {
                                                                                                                        echo "value='" . $_POST['bairro'] . "'";
                                                                                                                    } ?>>
                </div>

                <div class="col-md-6">
                    <label for="cidade" class="form-label fw-bold">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" readonly <?php if (isset($cidade)) {
                                                                                                                        echo "value='" . $_POST['cidade'] . "'";
                                                                                                                    } ?>>
                </div>

                <div class="col-md-2">
                    <label for="estado" class="form-label fw-bold">Estado</label>
                    <input type="text" class="form-control" name="estado" id="uf" placeholder="Estado" readonly <?php if (isset($estado)) {
                                                                                                                    echo "value='" . $_POST['estado'] . "'";
                                                                                                                } ?>>
                </div>

                <div class="col-md-3">
                    <label for="numero" class="form-label fw-bold">Número</label>
                    <input type="number" class="form-control" name="numero" placeholder="Número" <?php if (!empty($numeroErro)) {
                                                                                                        echo "id='invalidoNumero'";
                                                                                                    } ?> <?php if (isset($numero)) {
                                                                                                                echo "value='" . $_POST['numero'] . "'";
                                                                                                            } ?>>
                    <span class="erro fw-bold"><?php echo $numeroErro; ?></span>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary col-12">Criar Conta</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 mb-5"></div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/messages_pt_BR.js"></script>

    <script>
        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    </script>
</body>

</html>