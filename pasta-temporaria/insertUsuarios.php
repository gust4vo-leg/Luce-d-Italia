<?php 
require_once './crud.php';

$novoUsuario = [
    'nome_completo' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
    'cpf' => $_POST['cpf']
];

create($pdo, 'usuarios', $novoUsuario);

// Abaixo, lógica do filtro

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';

$pratos = readAll($pdo, 'pratos');

$categorias = [
    'entradas' => 'entradas',
    'massas' => 'massas'
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><a href="index.php">Todos</a></li>
        <?php 

            foreach($categorias as $kcat) {
                print '
                <li><a href="?.'. $kcat .'"/>'. $kcat .'</li>
                ';
            };
        ?>

        <?php 
        foreach ($pratos as $prato) {
            if ($categoria_get === '' || $prato['categoria'] === $categoria_get) {
                print '
                    // div com os produtos
                ';
            }
        }
        ?>
    </ul>
</body>
</html>