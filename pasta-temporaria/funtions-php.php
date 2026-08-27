<?php


/// Função de login

require_once './crud.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user = read(
        $pdo,
        'users',
        "email = '$email' AND senha = '$senha'"
    );

    if ($user) {

        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['tipo'] = $user['tipo'];

        header('Location: ./index.php');
        exit;

    } else {

        $erro = 'E-mail ou senha incorretos.';

    }
}