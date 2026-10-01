<?php
session_start();

if (!$_SESSION) {
    header('location: ../login.php');
    exit;
}

if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== 'admin') {
    header('location: ../index.php');
    exit;
}

require_once '../crud.php';

$id = intval($_GET['id'] ?? 0);
$prato = read($pdo, 'pratos', "id_pratos = $id");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $preco = $_POST['preco'] ?? 0;
    $descricao = $_POST['descricao'] ?? '';
    $imgPrato = $prato['foto_prato'];

    if (!empty($_FILES['imagem']['name'])) {
        $nomeImagem = $_FILES['imagem']['name'];
        $tmpImagem = $_FILES['imagem']['tmp_name'];
        $pasta = '../imagens/pratos/';
        $caminho = $pasta . $nomeImagem;

        move_uploaded_file($tmpImagem, $caminho);

        $imgPrato = $caminho;
    }

    $dados = [
        'nome_prato' => $nome,
        'categoria' => $categoria,
        'preco' => $preco,
        'descricao' => $descricao,
        'foto_prato' => $imgPrato

    ];

    update(
        $pdo,
        'pratos',
        $dados,
        "id_pratos = $id"
    );

    header('Location: ./admin.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pratos</title>
    <link rel="icon" href="../imagens/logo.png" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../partials/css/header.css" />
    <link rel="stylesheet" href="../partials/css/footer.css" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/updateIngredientes.css" />
</head>

<body>
    <?php require_once "../partials/header.php" ?>

    <div class="pagina-editar">
        <div class="editar-header">
            <div class="editar-titulo">
                <i class="bi bi-pencil-square"></i>
                <div>
                    <h1>Editar Prato</h1>
                    <p>Atualize as informações do prato abaixo.</p>
                </div>
            </div>
            <a href="admin.php" class="btn-voltar">
                <i class="bi bi-arrow-left"></i>
                Voltar
            </a>
        </div>

        <div class="editar-container">
            <div class="editar-card">
                <div class="card-header-editar">
                    <i class="bi bi-egg-fried"></i>
                    <h2>Informações do prato</h2>
                </div>

                <form id="formPrato" method="POST" enctype="multipart/form-data">
                    <div class="campo-modal">
                        <label for="nomePrato">Nome do prato</label>
                        <input type="text" id="nomePrato" name="nome" placeholder="Ex: Spaghetti al Pomodoro" value="<?= $prato['nome_prato'] ?? '' ?>" required>
                    </div>

                    <div class="linha-modal">
                        <div class="campo-modal">
                            <label for="categoriaPrato">Categoria</label>
                            <select id="categoriaPrato" name="categoria" required>
                                <option value="">Selecione</option>
                                <option value="Entradas"
                                    <?= $prato['categoria'] === 'Entradas' ? 'selected' : '' ?>>
                                    Entradas
                                </option>

                                <option value="Pratos Principais"
                                    <?= $prato['categoria'] === 'Pratos Principais' ? 'selected' : '' ?>>
                                    Pratos Principais
                                </option>

                                <option value="Massas"
                                    <?= $prato['categoria'] === 'Massas' ? 'selected' : '' ?>>
                                    Massas
                                </option>

                                <option value="Pizzas"
                                    <?= $prato['categoria'] === 'Pizzas' ? 'selected' : '' ?>>
                                    Pizzas
                                </option>

                                <option value="Sobremesas"
                                    <?= $prato['categoria'] === 'Sobremesas' ? 'selected' : '' ?>>
                                    Sobremesas
                                </option>

                                <option value="Bebidas"
                                    <?= $prato['categoria'] === 'Bebidas' ? 'selected' : '' ?>>
                                    Bebidas
                                </option>
                            </select>
                        </div>

                        <div class="campo-modal">
                            <label for="precoPrato">Preço</label>
                            <input type="number" id="precoPrato" name="preco" placeholder="0,00" step="0.01" min="0" value="<?= $prato['preco'] ?? '' ?>" required>
                        </div>

                    </div>

                    <div class="campo-modal">
                        <label for="descricaoPrato">Descrição</label>
                        <textarea id="descricaoPrato" name="descricao" placeholder="Descreva os pratoedientes e detalhes do prato..."
                            rows="4"><?= htmlspecialchars($prato['descricao'] ?? '') ?></textarea>
                    </div>

                    <div class="campo-modal">
                        <label for="imagemPrato">Imagem do prato</label>

                        <div class="upload-imagem">
                            <i class="bi bi-image"></i>
                            <span>Selecionar imagem</span>

                            <input type="file" id="imagemPrato" name="imagem" accept="image/*">
                        </div>
                    </div>

                    <div class="acoes-modal">
                        <a href="admin.php" class="btn-cancelar">
                            Cancelar
                        </a>

                        <button type="submit" class="btn-salvar">
                            <i class="bi bi-check-lg"></i>
                            salvar alteração
                        </button>
                    </div>
                </form>

                <div class="editar-info">
                    <i class="bi bi-info-circle"></i>
                    <span>
                        Confira os dados antes de salvar as alterações.
                        A quantidade informada será utilizada para controle
                        do estoque.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../partials/footer.php" ?>
</body>

</html>