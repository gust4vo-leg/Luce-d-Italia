<?php
require_once './crud.php';
session_start();
print_r($_SESSION);


$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user = read($pdo, 'usuarios', "email = '$email' AND senha = '$senha'"
    );

    if ($user) {

        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['tipo'] = $user['tipo'];

        header('Location: ./login.php');
        exit;

    } else {

        $erro = 'E-mail ou senha incorretos.';

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <section class="master">
        <div class="img-cadastro">
            <img src="./imagens/img-cadastro2.png" alt="img-logo">
        </div>

         <div class="form-cadastro">
            <div class="center-text">
            <div class="form-text">
                <h1>Bem vindo <span class="span-color2">de volta!</span></h1>
        
                <p>Entre na sua conta para continuar<span class="quebra-linha">sua experiência conosco.</span></p>
            </div>

                <form class="informacoes" action="./login.php" method="POST">
                    <div class="input-cadastro">
                        <input type="email" name="email" placeholder="E-mail">
                        <input type="password" name="senha" placeholder="Senha">
                        
                    </div>   

                    <div class="check-cadastro">
                        <input type="checkbox" name="checkbox">
                        <div class="check-op"><p>Lembrar-se</p>
                        <a href="#" class="span-color2">Esqueci minha senha</a>
                        </div>
                        

                    </div>
                    <button class="button-login">Entrar</button>
                    <p>Não tem uma conta? <a href="cadastro.html" class="span-color2">Cadastre-se</a></p>
                </form>
                
            
         </div>
         </div>
    </section>
</body>
</html>