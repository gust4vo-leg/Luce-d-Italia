<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('BASE_URL', 'http://localhost/Luce-d-Italia/');
$base = BASE_URL;

$tipo_usuario = $_SESSION['tipo'] ?? 'visitante';
$paginaAtual = basename($_SERVER['PHP_SELF']);

?>

<link rel="stylesheet" href="<?= $base ?>css/modal.css">
<link rel="stylesheet" href="<?= $base ?>css/header.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<section class="header">
    <div class="top-header">
        <div class="green">
            <p>TRADIÇÃO, SABOR E PAIXÃO EM CADA DETALHE</p>
        </div>
        <div class="creme">
            <img
                src="<?= $base ?>imagens/ornamento.png"
                alt=""
                role="presentation">
        </div>
        <div class="red">
            BEM VINDO!
        </div>
    </div>

    <header>
        <div class="logo">
            <a href="<?= $base ?>index.php">
                <img
                    src="<?= $base ?>imagens/logo.png"
                    alt="Luce d'Itália">
            </a>
        </div>

        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="header-list">

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


            <?php if ($tipo_usuario === 'visitante'): ?>
                <div class="btn-header">
                    <a href="<?= $base ?>login.php">
                        <i class="bi bi-person"></i>
                        <p>ENTRAR</p>
                    </a>
                </div>

            <?php else: ?>
                <div class="btn-header">
                    <button
                        type="button"
                        class="btn-perfil"
                        id="btn-menu">

                        <i class="bi bi-person"></i>
                        <p>MEU PERFIL</p>
                    </button>
                </div>

                <aside id="sidebar" class="sidebar">
                    <div class="topo-sidebar">
                        <div class="perfil-sidebar">
                            <div>
                                <h2>Meu Perfil</h2>
                                <p>
                                    <?= htmlspecialchars($_SESSION['nome'] ?? '') ?>
                                </p>
                            </div>
                        </div>

                        <button
                            type="button"
                            id="fechar-menu"
                            class="btn-fechar">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>

                    <hr>

                    <?php if ($tipo_usuario === 'cliente'): ?>
                        <a href="editarPerfil.php">
                            <i class="bi bi-person-circle"></i>
                            Editar Perfil
                        </a>

                        <a href="historico.php">
                            <i class="bi bi-calendar-check"></i>
                            Minhas Reservas
                        </a>
                    <?php elseif ($tipo_usuario === 'admin'): ?>
                        <a href="<?= $base ?>/pasta-admin/admin.php">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    <?php endif; ?>

                    <a
                        class="btn-sair"
                        href="logout.php">
                        <i class="bi bi-power"></i>
                        Sair
                    </a>
                </aside>
            <?php endif; ?>
        </nav>
    </header>
</section>

<script>
const sidebar = document.getElementById("sidebar");
const btnMenu = document.getElementById("btn-menu");
const fecharMenu = document.getElementById("fechar-menu");


if (btnMenu && sidebar) {
    btnMenu.onclick = () => {
        sidebar.classList.toggle("aberta");
    };
}

if (fecharMenu && sidebar) {
    fecharMenu.onclick = () => {
        sidebar.classList.remove("aberta");
    };
}
</script>