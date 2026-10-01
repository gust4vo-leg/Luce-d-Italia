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

$ingr = read($pdo, 'estoques', "id_ingrediente =  $id");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $unidade = $_POST['unidade'];
    $quantidade = $_POST['quantidade'];
    $observacao = $_POST['observacao'];

    $add = [
        'nome_ingredientes' => $nome,
        'categoria' => $categoria,
        'unidade' => $unidade,
        'qtd_ingrediente' => $quantidade,
    ];
    update($pdo, 'estoques', $add, "id_ingrediente = $id");

    header('Location: ./admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Igrediente</title>
    <link rel="icon" href="../imagens/logo.png"/>
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
                    <h1>Editar Ingrediente</h1>
                    <p>Atualize as informações do ingrediente abaixo.</p>
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
                    <i class="bi bi-box-seam"></i>
                    <h2>Informações do Ingrediente</h2>
                </div>

                <form action="" method="POST">
                    <div class="campo-modal">
                        <label for="nomeEditar">Nome do ingrediente</label>
                        <input type="text" id="nomeEditar" name="nome" placeholder="Ex: Tomate Pelado"
                            value="<?= $ingr['nome_ingredientes'] ?? '' ?>" required>
                    </div>

                    <div class="linha-modal">
                        <div class="campo-modal">
                            <label for="categoriaEditar">Categoria</label>
                            <select id="categoriaEditar" name="categoria" required>
                                <option value="">Selecione</option>
                                <option value="vegetais" <?= strtolower($ingr['categoria']) == 'vegetais' ? 'selected' : '' ?>>
                                    Vegetais
                                </option>
                                <option value="laticinios" <?= strtolower($ingr['categoria']) == 'laticinios' ? 'selected' : '' ?>>
                                    Laticínios
                                </option>
                                <option value="carnes" <?= strtolower($ingr['categoria']) == 'carnes' ? 'selected' : '' ?>>
                                    Carnes
                                </option>
                                <option value="massas" <?= strtolower($ingr['categoria']) == 'massas' ? 'selected' : '' ?>>
                                    Massas
                                </option>
                                <option value="temperos" <?= strtolower($ingr['categoria']) == 'temperos' ? 'selected' : '' ?>>
                                    Temperos
                                </option>
                                <option value="bebidas" <?= strtolower($ingr['categoria']) == 'bebidas' ? 'selected' : '' ?>>
                                    Bebidas
                                </option>
                                <option value="outros" <?= strtolower($ingr['categoria']) == 'outros' ? 'selected' : '' ?>>
                                    Outros
                                </option>
                            </select>

                        </div>

                        <div class="campo-modal">
                            <label for="unidadeEditar">Unidade</label>
                            <select id="unidadeEditar" name="unidade" required>
                                <option value="">Selecione</option>
                                <option value="kg" <?= strtolower($ingr['unidade']) == 'kg' ? 'selected' : '' ?>>
                                    Kg
                                </option>
                                <option value="g" <?= strtolower($ingr['unidade']) == 'g' ? 'selected' : '' ?>>
                                    Gramas
                                </option>
                                <option value="l" <?= strtolower($ingr['unidade']) == 'l' ? 'selected' : '' ?>>
                                    Litros
                                </option>
                                <option value="ml" <?= strtolower($ingr['unidade']) == 'ml' ? 'selected' : '' ?>>
                                    Mililitros
                                </option>
                                <option value="un" <?= strtolower($ingr['unidade']) == 'un' ? 'selected' : '' ?>>
                                    Unidade
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="campo-modal">
                        <label for="quantidadeEditar">Quantidade atual</label>
                        <input type="number" id="quantidadeEditar" name="quantidade" value="<?= $ingr['qtd_ingrediente'] ?>"
                            placeholder="Ex: 10" min="0" step="0.01" required>
                    </div>

                    <div class="campo-modal">
                        <label for="observacaoEditar">Observação</label>
                        <textarea id="observacaoEditar" name="observacao" rows="3"
                            placeholder="Alguma informação sobre este ingrediente..."></textarea>
                    </div>

                    <div class="acoes-modal">
                        <button type="button" id="cancelarModalEditar" class="btn-cancelar">Cancelar</button>
                        <button type="submit" class="btn-salvar">
                            <i class="bi bi-check-lg"></i>
                            Editar Ingrediente
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