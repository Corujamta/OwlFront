<?php
$ok = 0;
$okDb = 0;
$assunto = 'NexosDev';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vedors/email/Exception.php';

require 'vedors/email/PHPMailer.php';

require 'vedors/email/SMTP.php';

require 'admin/conexao.php';


if (isset($_POST["nome"])) {
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mens = $_POST['mens'];

    // INICIO BANCO DE DADOS

    try {

        $inserir = $conn->prepare("INSERT INTO tbl_orcamento(nome_orcamento, telefone_orcamento, email_orcamento, mensagem_orcamento, status_orcamento)
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



    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'innovaclicktipi02@smpsistema.com.br';                     //SMTP username
        $mail->Password = 'Senac@tipi02';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('innovaclicktipi02@smpsistema.com.br', $mens);
        $mail->addAddress('lili.kiko16@gmail.com', $nome);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $assunto;
        $mail->msgHTML("    
    Nome: $nome     <br>
    Email: $email   <br>
    telefone: $tel  <br>
    mensagem: $mens <br>
    ");
        $mail->AltBody = "
    Nome: $nome     /n
    Email: $email   /n
    telefone: $tel  /n    
    mensagem: $mens";

        $mail->send();
        // echo $nome  .  ', Sua mensagem foi enviada com sucesso';
        $ok = 1;
    } catch (Exception $e) {
        // echo "Errrrrrrrrrrrrrrrrror: {$mail->ErrorInfo}";
        $ok = 2;
    }
}



// FIM BANCO DE DADOS


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Orçamento - NexosDev</title>
</head>

<body>

    <?php
    require_once('conteudo/header.php')
        ?>
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
                    <form autocomplete="off" id="meuFormulario" name="orcamento" method="post" class="animate__animated animate__wobble">
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
                                <button>Enviar E-mail</button>
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
    <!--Perguntas Frequentes-->
    <section class="perguntas">
        <div class="site">
            <h2>Perguntas Frequentes</h2>
            <div>
                <details>
                    <summary>Qual é o custo para criar um site?</summary>
                    <div>
                        <p>O custo varia conforme o tipo e complexidade do site. Oferecemos orçamentos personalizados
                            para atender às suas necessidades específicas e garantimos transparência nos valores.</p>
                        </div>
                    </details>
                    
                    <details>
                        <summary>Como é o processo de design?</summary>
                        <div>
                            <p>Trabalhamos em estreita colaboração com nossos clientes para garantir que o design atenda às
                                suas expectativas. Apresentamos wireframes e protótipos para feedback antes de partir para a
                            fase final de desenvolvimento.</p>
                    </div>
                </details>

                <details>
                    <summary>Quanto tempo leva para desenvolver um site?</summary>
                    <div>
                        <p>O tempo de desenvolvimento varia de acordo com o escopo do projeto. Sites simples podem levar
                            de 4 a 6 semanas, enquanto projetos mais complexos podem levar de 8 a 12 semanas ou mais.
                        </p>
                    </div>
                </details>
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