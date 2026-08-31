<?php
require_once './crud.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['senha'] === $_POST['confirmar']) {
        $add = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'telefone' => $_POST['telefone'],
            'cpf' => $_POST['cpf']
        ];

        create($pdo, 'usuarios', $add);
        header('Location: ./login.php');
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
                    <h1>Crie sua <span class="span-color2">conta</span></h1>

                    <p>Cadastre-se e aproveite beneficios exclusivos, <span class="quebra-linha">promoções especiais e
                            muito mais.</span></p>
                </div>

                <form class="informacoes" action="./cadastro.php" method="POST">
                    <div class="input-cadastro">
                        <input type="text" name="nome" placeholder="Nome completo">
                        <input type="email" name="email" placeholder="E-mail">
                        <input type="tel" name="telefone" placeholder="Número de telefone ">
                        <input type="text" name="cpf" placeholder="CPF">
                        <input type="password" name="senha" placeholder="Senha">
                        <input type="password" name="confirmar" placeholder="Confirmar senha">
                    </div>

                    <div class="check-cadastro">
                        <input type="checkbox" name="checkbox">
                        <p>Aceito os <span class="span-color2">Termos de Uso</span> e a <span
                                class="span-color2">Política de Privacidade.</span></p>
                    </div>
                    <button class="button-cadastro">Criar conta</button>
                    <p>Já tem uma conta? <a href="login.html" class="span-color2">Entrar</a></p>
                </form>


            </div>
        </div>
    </section>
</body>

</html>