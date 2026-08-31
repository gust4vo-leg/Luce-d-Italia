<?php


/// Função de login

require_once './crud.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user = read($pdo, 'users', "email = '$email' AND senha = '$senha'"
    );

    if ($user) {
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['tipo'] = $user['tipo'];

        header('Location: ./index.php');
        exit;

    } else {

        $erro = 'E-mail ou senha incorretos.';

    }
}


// Fução de Adição de produto em estoque

$add = [
    'nome_ingrediente' => $_POST['nome'],
    'qtd_ingrediente' => $_POST['qtd']
];

create($pdo, 'estoque', $add);


// Fução de adiconar e subtrair no estoque

$id = $_POST['id'] ?? 0;
$acao = $_POST ?? '';

if ($id > 0) {
    if($acao === 'somar') {
        update($pdo, 'estoque', 'qtd_ingredientes = qtd_ingredientes + 1', 'id_ingredientes ='. $id);
    } elseif ($acao === 'subtrair'){
        update($pdo, 'estoque', 'qtd_ingredientes = qtd_ingredientes - 1', 'id_ingredientes ='. $id);
    }
}
?>
<form action="" method="POST">
    <input type="hidden" name="id" value="'.$ingrediente['id_ingrediente'].'">
    <input type="hidden" name="somar" value="somar">
    <button type="submit">+</button>
</form>
<form action="" method="POST">
    <input type="hidden" name="id" value="'.$ingrediente['id_ingrediente'].'">
    <input type="hidden" name="subtrair" value="subtrair">
    <button type="submit">+</button>
</form>
