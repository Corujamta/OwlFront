<?php require 'admin/conexao.php';
$ok = 0;
$okDb = 0;
$assunto = 'NexosDev';

if (isset($_POST["nome"])) {
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mens = $_POST['mens'];

    // INICIO BANCO DE DADOS

    try {

        $inserir = $conn->prepare("INSERT INTO tbl_contato(nome_contato, telefone_contato, email_contato, mensagem_contato, status_contato)
VALUES(:nome, :telefone, :email, :mensagem, 'Aguardando')");
        // ";" nome dos parametros
        $inserir->bindParam('nome', $nome);
        $inserir->bindParam('telefone', $tel);
        $inserir->bindParam('email', $email);
        $inserir->bindParam('mensagem', $mens);

        if (!$inserir->execute()) {
            echo "Erro ao inserir!";
            $okDb = 1;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>.: NexosDev :.</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Inicio Header -->
    <?php
    require_once('conteudo/header.php');
    ?>
    <!-- Fim header  -->

    <section>
        <div class="banner">
            <div class="contatotexto">
                <div>
                    <h5>
                        Fale Conosco
                    </h5>
                </div>
                <div>
                    <h6>
                        Entre em contato
                    </h6>
                </div>
            </div>
            <div class="contatophp">
                <div>
                    <a href="https://github.com/CorujaDevmta">

                        <img src="assets/img/githubcontato.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://instagram.com/NexosDev">

                        <img src="assets/img/instagramcontato.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://facebook.com/NexosDev">
                        <img src="assets/img/facebookcontato.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Contato -->
    <section class="form-contato">
        <div class='site'>
            <div class="boxsform">
                <div class="boxForm1">
                    <h3>
                        Faça seu Orçamento
                    </h3>
            <div class="contatophp2">
                <img src="assets/img/homemdefonecontato.png" alt="">
            </div>
                </div>
                <div class="boxForm2">
                    <div class="boxform-contato">
                <h5>Formulario de contato </h5>
                <?php

if ($ok == 1 && $okDb != 1) {
} elseif ($ok == 2) {
    echo ("<h4> " . $nome . ", não foi possivel enviar a sua mensagem. Tente novamente mais tarde!</h3>");
} elseif ($ok == 3) {
    echo ("<h4> " . $nome . ", não conseguimos gravar os dados no Banco de Dados!</h3>");
}


?>
<script>
    function enviarWhats() {


// alert("teste envio");

var site = "*Contato - NexosDev *";
var form = document.forms['formcontato'];


var nome = form.elements['nome'].value;

var tel = form.elements['tel'].value;

var email = form.elements['email'].value;

var mens = form.elements['mens'].value;

// alert('Nome:' + nome + 'Tel:' + tel + 'Email:' + email + 'Mens:' + mens)

if(nome == ''){ 
  alert( 'Por Favor, Insira seu Nome')
  return false;
}

// Expressão regular para validar formato de e-mail
const exemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!exemail.test(email)){
  alert('Por favor, Iserir E-mail valido')
  return false
}


// Expressão regular para validar telefone no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
const extel = /^\(\d{2}\) \d{4,5}-\d{4}$/;
if(!extel.test(tel)){
  alert('Por favor, Iserir telefone valido, no formato (XX) XXXXX-XXXX')
  return false
}


if(mens.length < 5){
  alert('A mensagem deve ter no minimo 10 caracteres')
  return false
}

var numWhats = '5511998222217';
var quebraDeLinha = '%0A';

nome = window.encodeURIComponent(nome);
tel = window.encodeURIComponent(tel);
email = window.encodeURIComponent(email);
mens = window.encodeURIComponent(mens);

window.open("https://wa.me/" + numWhats + "?text=" + site
  + quebraDeLinha
  + nome
  + quebraDeLinha
  + tel
  + quebraDeLinha
  + email
  + quebraDeLinha
  + mens)

window.open(url, '_blank');

form.reset();
}
</script>
                    <form autocomplete="off" id="formcontato" name="formcontato" method="post" class="animate__animated animate__wobble">
                        <div class="divsinput">
                        <div class="input-field">
                         <input required="" name="nome" type="text" />
                        <label>Nome</label>
                        </div>

                        <div class="input-field">
                         <input required="" name="tel" type="tel" />
                        <label>Telefone</label>
                        </div>
                            
                        <div class="input-field">
                         <input required="" name="email" type="email" />
                        <label>Email</label>
                        </div>
                            <div>
                                <textarea name="mens" cols="30" rows="10" placeholder="Mensagem"></textarea>
                            </div>
                            
                            <div class="botaoemail">
                                <button onclick="enviarWhats()">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div id="popup" class="popup">
        <div class="popup-conteudo">
            <p>Formulário enviado com sucesso!</p>
            <div class="imgpop">
                <img src="assets/img/emailformulario.png" alt="">
            </div>
            <div class="fecharpopup">
            <button onclick="fecharPopup()">Fechar</button>
            </div>
        </div>
    </div>
        </div>
        </div>
    </section>

    <!--Rodapé-->
    <?php
    require_once('conteudo/rodape.php');
    ?>
    <script src="assets/js/script.js"></script>
</body>

</html>