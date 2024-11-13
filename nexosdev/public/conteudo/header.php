<header>
    <div class="redesocial">
        <div class="site">
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">facebook</a></li>
                <li><a href="">linkedin</a></li>
            </ul>
        </div>
    </div>
    <div class="img">
        <div class="site">
            <img src="assets/img/ffdfdffd.png" alt="">
        </div>
    </div>
    <nav class="menu">
        <div class="site">
            <?php
            $pgAtual = basename(path: $_SERVER['PHP_SELF'], suffix: '.php');
            ?>
            <div>
                <ul>
                <li><a href="index.php" class="<?php echo ($pgAtual == 'index') ? 'ativo' : 'desativado'; ?>">Inicio</a></li>
                <li><a href="sobre.php" class="<?php echo ($pgAtual == 'sobre') ? 'ativo' : 'desativado'; ?>">Sobre</a></li>
                <li><a href="servicos.php" class="<?php echo ($pgAtual == 'servicos') ? 'ativo' : 'desativado'; ?>">Serviços</a></li>
                <li><a href="contato.php" class="<?php echo ($pgAtual == 'contato') ? 'ativo' : 'desativado'; ?>">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="botao">
        <div class="site">
            <Button type="submit" onclick="orcamento()">ORÇAMENTO</Button>
        </div>
    </div>
    <!-- <div class="header2">
            <button id="menu-btn1" class="menu-btn1" aria-label="Abrir menu" onclick="toggleMenu1()">☰</button>
        </div>
        
          <nav id="menu1" class="menu1">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Serviços</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
            <button>Orçamento</button>
          </nav> -->
</header>