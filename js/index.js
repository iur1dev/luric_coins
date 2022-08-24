$(document).ready(function () {
  const jogos = [
    {
      src: "img/tibia.png",
      alt: "logo tibia",
      nome: "Tibia",
    },
    {
      src: "img/cabal.jpg",
      alt: "logo cabal",
      nome: "Cabal",
    },
    {
      src: "img/dota2.jpg",
      alt: "logo dota2",
      nome: "Dota2",
    },
    {
      src: "img/fortnite.jpg",
      alt: "logo fortnite",
      nome: "Fortnite",
    },
    {
      src: "img/lol.jpg",
      alt: "logo lol",
      nome: "League of Legends",
    },
    {
      src: "img/priston_tale.jpg",
      alt: "logo priston tale",
      nome: "Priston Tale",
    },
    {
      src: "img/tft.png",
      alt: "logo tft",
      nome: "Teamfight Tactics",
    },
    {
      src: "img/wow.jpg",
      alt: "logo wow",
      nome: "World of Warcraft",
    },
    {
      src: "img/overwatch.png",
      alt: "logo overwatch",
      nome: "Overwatch",
    },
    {
      src: "img/valorant.png",
      alt: "logo valorant",
      nome: "Valorant",
    },
  ];
  for (let i = 0; i < jogos.length; i++) {
    $("#receba_jogos")
      .append(`<div class="jogos me-5 mb-5 mx-auto imagem"><picture><a href="#"><img src="${jogos[i].src}"
         class="border border-danger border-5 rounded img-fluid" alt="${jogos[i].alt}"></a>
         <figcaption class="fw-bold">${jogos[i].nome}</picture></div>`);
  }
  //
  function limpa_cep() {
    $("#estado").val("");
    $("#cidade").val("");
    $("#bairro").val("");
    $("#rua").val("");
  }
  //
  $("#cep").blur(function () {
    let cep = $(this).val().replace(/\D/g, "");

    if (cep != "") {
      let validacep = /^[0-9]{8}$/;

      if (validacep.test(cep)) {
        $("#estado").val("...");
        $("#cidade").val("...");
        $("#bairro").val("...");
        $("#rua").val("...");

        $.getJSON(
          "https://viacep.com.br/ws/" + cep + "/json/?callback=?",
          function (dados) {
            if (!("erro" in dados)) {
              $("#estado").val(dados.uf);
              $("#cidade").val(dados.localidade);
              $("#bairro").val(dados.bairro);
              $("#rua").val(dados.logradouro);
            } else {
              limpa_cep();
              alert("Cep nao encontrado");
            }
          }
        );
      } else {
        limpa_cep();
        alert("formato de cep invalido");
      }
    } else {
      limpa_cep();
    }
  });
  // insert
  $("#enviar").click(function () {
    let nome = $("#nome").val();
    let cpf = $("#cpf").val();
    let nasc = $("#nasc").val();
    let cep = $("#cep").val();
    let estado = $("#estado").val();
    let cidade = $("#cidade").val();
    let bairro = $("#bairro").val();
    let rua = $("#rua").val();
    let numero = $("#numero").val();
    let email = $("#email").val();
    let senha = $("#senha").val();
    let senha2 = $("#senha2").val();

    if (
      nome != "" ||
      cpf != "" ||
      nasc != "" ||
      cep != "" ||
      estado != "" ||
      cidade != "" ||
      bairro != "" ||
      rua != "" ||
      numero != "" ||
      email != "" ||
      senha != ""
    ) {
      if (senha == senha2) {
        $.ajax({
          url: "ajax/insert_index.php",
          type: "POST",
          data: {
            nome: nome,
            cpf: cpf,
            nasc: nasc,
            cep: cep,
            estado: estado,
            cidade: cidade,
            bairro: bairro,
            rua: rua,
            numero: numero,
            email: email,
            senha: senha,
          },
          dataType: "json",
          success: function (dados, status) {
            $("#nome").val("");
            $("#cpf").val("");
            $("#nasc").val("");
            $("#cep").val("");
            $("#estado").val("");
            $("#cidade").val("");
            $("#bairro").val("");
            $("#rua").val("");
            $("#numero").val("");
            $("#email").val("");
            $("#senha").val("");
            $("#senha2").val("");

            $("#receba").html(
              `<div class="alert alert-success" role="alert"> 
            Cadastrado !!! </div>`
            );
          },
          error: function (dados, status) {
            alert(status);
          },
        });
      } else {
        $("#receba").html(
          `<div class="alert alert-danger" role="alert"> 
          Senhas n batem </div>`
        );
      }
    } else {
      $("#receba").html(
        `<div class="alert alert-danger" role="alert"> 
        Preencha todos os campos !!! </div>`
      );
    }
  });
  // select
  $("#enviar_entrar").click(function () {
    let email = $("#email__").val();
    let senha = $("#senha__").val();
    $.ajax({
      url: "ajax/select_index.php",
      method: "POST",
      data: {
        email: email,
        senha: senha,
      },
      dataType: "json",
      success: function (data) {
        if (data == 'window.location.href = "teste.php"') {
          window.location.href = "teste.php";
        } else {
          $("#receba2").html(data);
        }
      },
      error: function (data) {
        alert(data);
      },
    });
  });
});
