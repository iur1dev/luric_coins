<?php
include_once("../conn.php");

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
        if (strlen($senha) < 6) {
            $senhaErro = "<small>Senha deve ter mais de 6 digitos</small>";
        }
    }
    // repete senha
    if (empty($_POST['senha2'])) {
        $senha2Erro = "<small>Digite a repetição de senha</small>";
    } else {
        $senha2 = limpaPost($_POST['senha2']);
        if ($senha2 !== $senha) {
            $senha2Erro = "<small>Repetição de senha inválida</small>";
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
    }
    //rua
    if (empty($_POST['rua'])) {
        $ruaErro = "<small>Digite a rua</small>";
    } else {
        $rua = limpaPost($_POST['rua']);
    }
    //bairro
    if (empty($_POST['bairro'])) {
        $bairroErro = "<small>Digite o bairro</small>";
    } else {
        $bairro = limpaPost($_POST['bairro']);
    }
    //cidade
    if (empty($_POST['cidade'])) {
        $cidadeErro = "<small>Digite a cidade</small>";
    } else {
        $cidade = limpaPost($_POST['cidade']);
    }
    //estado
    if (empty($_POST['estado'])) {
        $estadoErro = "<small>Digite o estado</small>";
    } else {
        $estado = limpaPost($_POST['estado']);
    }
    // numero
    if (empty($_POST['numero'])) {
        $numeroErro = "<small>Digite o número</small>";
    } else {
        $numero = limpaPost($_POST['numero']);
    }

    if (
        empty($emailErro) && empty($celularErro) && empty($senhaErro) && empty($senha2Erro) && empty($nomeErro) && empty($cpfErro)
        && empty($nascErro) && empty($cepErro) && empty($ruaErro) && empty($bairroErro) && empty($cidadeErro)
        && empty($estadoErro) && empty($numeroErro)
    ) {
        // verificacao email
        $sql_email = "SELECT email FROM usuarios_coins WHERE email = '$email'";
        $query_email = $conn->query($sql_email) or die("404 sql" . $conn->error);
        $qnt_email = $query_email->num_rows;

        // verificacao celular
        $sql_celular = "SELECT celular FROM usuarios_coins WHERE celular = '$celular'";
        $query_celular = $conn->query($sql_celular) or die("404 sql" . $conn->error);
        $qnt_celular = $query_celular->num_rows;

        // verificacao cpf
        $sql_cpf = "SELECT cpf FROM usuarios_coins WHERE cpf = '$cpf'";
        $query_cpf = $conn->query($sql_cpf) or die("404 sql" . $conn->error);
        $qnt_cpf = $query_cpf->num_rows;

        if ($qnt_email == 1) {
            $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>E-mail Já cadastrado</div>";
        } else if ($qnt_celular == 1) {
            $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>Celular Já cadastrado</div>";
        } else if ($qnt_cpf == 1) {
            $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>Cpf Já cadastrado</div>";
        } else {
            // cadastro
            $sql = "INSERT INTO usuarios_coins(email, senha, celular, nome, cpf, nasc, cep, estado, cidade, bairro, rua, numero)
        VALUE ('$email', '$senha', '$celular', '$nome', '$cpf', '$nasc', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero')";
            $query = $conn->query($sql) or die("404 sql" . $conn->error);

            $erro = "<div class='alert alert-success text-center fw-bold' role='alert'>Criado com Sucesso</div>";

            $email = "";
            $celular = "";
            $senha = "";
            $senha2 = "";
            $nome = "";
            $cpf = "";
            $nasc = "";
            $cep = "";
            $rua = "";
            $bairro = "";
            $cidade = "";
            $estado = "";
            $numero = "";
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
<!-- ( ͡° ͜ʖ ͡°) -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/coin.png" type="image/x-icon">
    <title>Luric Coins</title>
    <meta name="author" content="Luric">
    <meta name="description" content="site de vendas tibiana">
    <meta name="keywords" content="tibia, coins">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    body {
        background-image: url("../img/fundo2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <div>
        <a href="logar_coins.php"><i class="fa-solid fa-circle-left text-light p-3" style="font-size: 60px;"></i></a>
    </div>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6 mx-auto">
            <form class="row g-3 bg-light rounded p-2" method="POST" style="margin-top: 10%;">
                <div class="col-md-6">
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php if (isset($email)) {
                                                                                                                    echo $email;
                                                                                                                } ?>">
                    <span class="erro fw-bold"><?php if (isset($emailErro)) {
                                                    echo $emailErro;
                                                } ?></span>
                </div>

                <div class="col-md-6">
                    <label for="celular" class="form-label fw-bold">Celular</label>
                    <input type="text" class="form-control phone_with_ddd" id="celular" name="celular" placeholder="Celular" value="<?php if (isset($celular)) {
                                                                                                                                        echo $celular;
                                                                                                                                    } ?>">
                    <span class="erro fw-bold"><?php if (isset($celularErro)) {
                                                    echo $celularErro;
                                                } ?></span>
                </div>

                <div class="col-md-6">
                    <label for="senha" class="form-label fw-bold">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" value="<?php if (isset($senha)) {
                                                                                                                        echo $senha;
                                                                                                                    } ?>">
                    <span class="erro fw-bold"><?php if (isset($senhaErro)) {
                                                    echo $senhaErro;
                                                }  ?></span>
                </div>

                <div class="col-md-6">
                    <label for="senha2" class="form-label fw-bold">Repita a Senha</label>
                    <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Repita a senha" value="<?php if (isset($senha2)) {
                                                                                                                                    echo $senha2;
                                                                                                                                } ?>">
                    <span class="erro fw-bold"><?php if (isset($senha2Erro)) {
                                                    echo $senha2Erro;
                                                }  ?></span>
                </div>

                <div class="col-md-6">
                    <label for="nome" class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php if (isset($nome)) {
                                                                                                                echo $nome;
                                                                                                            } ?>">
                    <span class="erro fw-bold"><?php if (isset($nomeErro)) {
                                                    echo $nomeErro;
                                                }  ?></span>
                </div>

                <div class="col-md-3">
                    <label for="cpf" class="form-label fw-bold">Cpf</label>
                    <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Cpf" value="<?php if (isset($cpf)) {
                                                                                                                    echo $cpf;
                                                                                                                } ?>">
                    <span class="erro fw-bold"><?php if (isset($cpfErro)) {
                                                    echo $cpfErro;
                                                }  ?></span>
                </div>

                <div class="col-md-3">
                    <label for="nasc" class="form-label fw-bold">Nascimento</label>
                    <input type="text" class="form-control date" id="nasc" name="nasc" placeholder="Nascimento" value="<?php if (isset($nasc)) {
                                                                                                                            echo $nasc;
                                                                                                                        } ?>">
                    <span class="erro fw-bold"><?php if (isset($nascErro)) {
                                                    echo $nascErro;
                                                }  ?></span>
                </div>

                <div class="col-md-3">
                    <label for="cep" class="form-label fw-bold">Cep</label>
                    <input type="text" class="form-control cep" id="cep" name="cep" placeholder="Cep" value="<?php if (isset($cep)) {
                                                                                                                    echo $cep;
                                                                                                                } ?>">
                    <span class="erro fw-bold"><?php if (isset($cepErro)) {
                                                    echo $cepErro;
                                                }  ?></span>
                </div>

                <div class="col-md-9">
                    <label for="rua" class="form-label fw-bold">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?php if (isset($rua)) {
                                                                                                                echo $rua;
                                                                                                            } ?>">
                    <span class="erro fw-bold"><?php if (isset($ruaErro)) {
                                                    echo $ruaErro;
                                                }  ?></span>
                </div>

                <div class="col-md-6">
                    <label for="bairro" class="form-label fw-bold">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?php if (isset($bairro)) {
                                                                                                                        echo $bairro;
                                                                                                                    } ?>">
                    <span class="erro fw-bold"><?php if (isset($bairroErro)) {
                                                    echo $bairroErro;
                                                }  ?></span>
                </div>

                <div class="col-md-6">
                    <label for="cidade" class="form-label fw-bold">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php if (isset($cidade)) {
                                                                                                                        echo $cidade;
                                                                                                                    } ?>">
                    <span class="erro fw-bold"><?php if (isset($cidadeErro)) {
                                                    echo $cidadeErro;
                                                }  ?></span>
                </div>

                <div class="col-md-3">
                    <label for="uf" class="form-label fw-bold">Estado</label>
                    <input type="text" class="form-control" id="uf" name="estado" placeholder="Estado" value="<?php if (isset($estado)) {
                                                                                                                    echo $estado;
                                                                                                                } ?>">
                    <span class="erro fw-bold"><?php if (isset($estadoErro)) {
                                                    echo $estadoErro;
                                                }  ?></span>
                </div>

                <div class="col-md-3">
                    <label for="numero" class="form-label fw-bold">Número</label>
                    <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php if (isset($numero)) {
                                                                                                                        echo $numero;
                                                                                                                    } ?>">
                    <span class="erro fw-bold"><?php if (isset($numeroErro)) {
                                                    echo $numeroErro;
                                                }  ?></span>
                </div>

                <div class="col-12">
                    <?php if (isset($erro)) {
                        echo $erro;
                    }; ?>
                    <button type="submit" class="btn btn-primary col-12 fw-bold">Criar Conta</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 mb-5"></div>
    </div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script src="../js/mask.js"></script>

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