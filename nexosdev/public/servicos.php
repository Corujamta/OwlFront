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
                    Serviços
                </h3>
            </div>
        </div>
    </section>

    <!--Sobre-->
    
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
    <!-- Serviços -->
    <section class="servicos">
        <div class="site">
            <h2>Nossos <span>
                    Serviços
                </span>
            </h2>
            <div class="boxservicos">
                <div class="boxservi1">
                    <img src="assets/img/app-development.png" alt="">
                    <h3>Desenvolvimento Web</h3>
                    <h4>Criação de sites personalizados, desde páginas institucionais a e-commerces, usando tecnologias como HTML, CSS, JavaScript e frameworks modernos.</h4>
                </div>
                <div class="boxservi2">
                    <img src="assets/img/seo.png" alt="">
                    <h3>Otimização de SEO</h3>
                    <h4>Implementação de estratégias para aumentar a visibilidade nos motores de busca, envolvendo pesquisa de palavras-chave, otimização on-page e link building.</h4>
                </div>
                <div class="boxservi3">
                    <img src="assets/img/technical-support.png" alt="">
                    <h3>Suporte Técnico</h3>
                    <h4>Serviços contínuos que asseguram o funcionamento do site, incluindo atualizações de segurança, backups regulares e suporte ao cliente.</h4>
                </div>
                <div class="boxservi4">
                    <img src="assets/img/auditoriaseo.png" alt="">
                    <h3>Auditoria de SEO</h3>
                    <h4>Análise detalhada do desempenho do site em busca, identificando melhorias e oferecendo recomendações para otimizar a visibilidade e aumentar o tráfego.</h4>
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