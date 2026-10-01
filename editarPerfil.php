<?php
session_start();
require_once './crud.php';

$id = $_SESSION['id_user'];
$usuario = read($pdo, 'usuarios', "id_user = $id");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $add = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone
    ];

    if (!empty($senha)) {
        $add['senha'] = $senha;
    }

    update($pdo, 'usuarios', $add, "id_user = $id");

    header('Location: ./editarPerfil.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar conta</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/editarPerfil.css">
    <link rel="stylesheet" href="partials/css/header.css">
    <link rel="stylesheet" href="partials/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="imagens/logo.png" />
</head>

<body>
    <?php require_once 'partials/header.php'; ?>


    <main id="editar-perfil" class="perfil-main">
        <section id="hero">
            <div class="hero">
                <div class="hero-centro">
                    <div class="hero-txt">
                        <h1>MINHA CONTA</h1>
                        <div class="hero-bordar-txt">
                            <img src="imagens/barraFooter.png" alt="Ornamento" />
                        </div>

                        <div class="details-txt-hero">
                            <p>
                                Garanta sua experiência no Luce d'Italia. <br>
                                Preencha os dados abaixo e edite sua conta
                            </p>
                        </div>
                    </div>

                </div>
                <div class="hero-right">
                    <img src="imagens/imgHero.png">
                </div>
            </div>

            <div class="divisao-hero"></div>
        </section>

        <div class="perfil-container">
            <div class="perfil-header">
                <h1>MEU PERFIL</h1>

                <div class="perfil-ornamento">
                    <span></span>
                    <b>✦</b>
                    <span></span>
                </div>

                <p>Atualize suas informações pessoais.</p>
            </div>

            <div class="perfil-content">
                <aside class="perfil-sidebar">
                    <h2>Silas Carvalho</h2>

                    <p class="perfil-email">
                        silas@email.com
                    </p>

                    <div class="perfil-menu">
                        <a href="#" class="ativo">
                            <span><i class="bi bi-person"></i></span>
                            Meu Perfil
                        </a>

                        <a href="#">
                            <span><i class="bi bi-calendar"></i></span>
                            Minhas Reservas
                        </a>

                        <a href="#">
                            <span><i class="bi bi-journal"></i></span>
                            Meus Pedidos
                        </a>

                        <a href="#" class="sair">
                            <span>↪</span>
                            Sair da Conta
                        </a>

                    </div>

                </aside>

                <section class="perfil-form-area">
                    <h2>INFORMAÇÕES PESSOAIS</h2>

                    <p class="form-descricao">
                        Mantenha seus dados sempre atualizados.
                    </p>

                    <form class="perfil-form">
                        <div class="campo">
                            <label for="nome">
                                NOME COMPLETO
                            </label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?= $usuario['nome'] ?>">
                        </div>

                        <div class="campo">
                            <label for="email">
                                E-MAIL
                            </label>
                            <input type="email" id="email" name="email" placeholder="Digite seu e-mail"
                                value="<?= $usuario['email']?>">
                        </div>

                        <div class="campo">
                            <label for="telefone">
                                TELEFONE
                            </label>
                            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" value="<?= $usuario['telefone'] ?>">
                        </div>

                        <div class="campo">
                            <label for="senha">
                                SENHA
                            </label>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua nova senha">
                            <small>
                                Deixe em branco para manter a senha atual.
                            </small>
                        </div>


                        <div class="form-acoes">
                            <button type="reset" class="btn-cancelar">
                                CANCELAR
                            </button>

                            <button type="submit" class="btn-salvar">
                                SALVAR ALTERAÇÕES
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>

    <?php include 'partials/footer.php'; ?>
</body>

</html>