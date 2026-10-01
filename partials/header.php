<?php
$base = "/Luce-d-Italia/";

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$paginaAtual = basename($_SERVER['PHP_SELF']);

?>

<section class="header">
  <link rel="stylesheet" href="../css/modal.css">
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
        <li>
          <a
            class="<?= $paginaAtual === 'index.php' ? 'ativo' : '' ?>"
            href="<?= $base ?>index.php">
            Início
          </a>
        </li>

        <li>
          <a
            class="<?= $paginaAtual === 'cardapio.php' ? 'ativo' : '' ?>"
            href="<?= $base ?>cardapio.php">
            Cardápio
          </a>
        </li>

        <li>
          <a
            class="<?= $paginaAtual === 'reserva.php' ? 'ativo' : '' ?>"
            href="<?= $base ?>reserva.php">
            Reservas
          </a>
        </li>

        <li>
          <a
            class="<?= $paginaAtual === 'sobreNos.php' ? 'ativo' : '' ?>"
            href="<?= $base ?>sobreNos.php">
            Sobre Nós
          </a>
        </li>
      </ul>

      <?php

      if (isset($_SESSION['usuario_id'])) {

        echo '
        <div class="btn-header">
            <button type="button" id="abrirPerfil">
            <div class="sidebar-perfil">

        <div class="elements-perfil">
    
            <img src="imagens/logo-perfil.png" alt="Foto de perfil">
    
            <div>
                <h2>Meu Perfil</h2>
                <p>Breno</p>
            </div>
    
        </div>
    
        <hr>
    
    
        <div class="elements-click">
    
            
            <div class="elements-icon">
                <i class="bi bi-person-circle"></i>
    
                <a href="#">
                    <h2>Editar Perfil</h2>
                </a>
            </div>
    
        
            <div class="elements-icon">
                <i class="bi bi-clock-history"></i>
    
                <a href="#">
                    <h2>Historico</h2>
                </a>
            </div>
    
           
            <div class="elements-icon">
                <i class="bi bi-power"></i>
    
                <a href="#">
                    <h2>Sair</h2>
                </a>
            </div>
    
        </div>
    
    </div>
            </button>
        </div>

    ';
      } else {

        echo '
        <div class="btn-header">
            <a href="' . $base . 'login.php">
                <i class="bi bi-person"></i>
                <p>ENTRAR</p>
            </a>
        </div>
    ';
      }

      ?>
    </nav>
  </header>
</section>
<script src="js/perfil.js"></script>