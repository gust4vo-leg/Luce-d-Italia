<?php
$base = "/Luce-d-Italia/"
?>

<section class="header">
    <div class="top-header">
      <div class="green">
        <p>TRADIÇÃO, SABOR E PAIXÃO EM CADA DETALHE</p>
      </div>

      <div class="creme">
        <img src="<?= $base ?>imagens/ornamento.png" alt="" role="presentation" />
      </div>

      <div class="red">BEM VINDO!</div>
    </div>
    <header>
      <div class="logo">
        <a href="#hero">
          <img src="<?= $base ?>imagens/logo.png" alt="Luce d'Itália" />
        </a>
      </div>

      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="header-list">
        <i class="bi bi-list"></i>
      </button>

      <nav class="header-list" id="header-list">
        <ul class="menu">
          <li><a class="ativo" href="index.php">Início</a></li>
          <li><a href="cardapio.php">Cardápio</a></li>
          <li><a href="#reservas">Reservas</a></li>
          <li><a href="#sobre">Sobre Nós</a></li>
        </ul>

        <div class="btn-header">
          <a href="#">
            <i class="bi bi-person"></i>
            <p>ENTRAR</p>
          </a>
        </div>
      </nav>
    </header>
  </section>