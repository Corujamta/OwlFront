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
    <!--Banner-->
    <section>
        <div class="banner">
            <div class="contprincipal">
                <h3>
                    Sobre
                </h3>
            </div>
        </div>
    </section>

    <!--Sobre-->
    <section class="sobre" id="sobre">
        <div class="site">

            <div>
                <h3>SOBRE NÓS</h3>
                <p class="textosobre">Na NexosDev, transformamos suas ideias em sites incríveis. Nossa equipe combina
                    design moderno e tecnologia avançada para criar soluções personalizadas que destacam sua marca e
                    atraem clientes.
                    Trabalhamos de forma colaborativa, garantindo que cada projeto reflita sua identidade única. Venha
                    contar sua história digital conosco!
            </div>
            <div>
                <img src="assets/img/sobre.png" alt="">
            </div>
        </div>
    </section>
    <!--Perguntas Frequentes-->
    <section class="linguagem" id="linguagem">
        <div class="site">
            <h2>Venha conhecer nossa experiência em tecnologias digitais!</h2>
            <h3>Explore nossos conhecimentos com linguagens de programação e veja como podemos ajudar você.</h3>
            <div class="boxlin">
                <div class="lin1">
                    <h6>HTML</h6>
                    <img src="assets/img/html.png" alt="">
                    <p>HTML (HyperText Markup Language) é a linguagem de marcação usada para estruturar páginas da web.
                        Ela organiza o conteúdo em elementos como títulos, parágrafos e links, formando a base para a
                        apresentação e interação, essencial para a web moderna.
                    </p>
                </div>
                <div class="lin2">
                    <h6>CSS</h6>
                    <img src="assets/img/css.png" alt="">
                    <p>CSS (Cascading Style Sheets) é uma linguagem que estiliza páginas da web. Com ela, você define
                        cores, fontes e layouts, tornando o design mais atraente e responsivo. Isso melhora a
                        experiência do usuário e facilita a manutenção</p>
                </div>
                <div class="lin3">
                    <h6>JavaScript</h6>
                    <img src="assets/img/javascript.png" alt="">
                    <p>
                        JavaScript é uma linguagem de programação que permite criar interatividade em páginas web. Com
                        ele, é possível manipular elementos HTML, responder a eventos e realizar requisições
                        assíncronas. Essencial para aplicações dinâmicas, mel.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Perguntas Frequentes-->
    <section class="perguntas" id="perguntas">
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