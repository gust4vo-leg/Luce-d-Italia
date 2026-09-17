<?php
session_start();

require_once '../crud.php';

$estoques = readAll($pdo, 'estoques');
$pratos = readAll($pdo, 'pratos');
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luce`d Italia - Admin</title>
  <link rel="stylesheet" href="../partials/css/header.css" />
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body id="pagina">
  <?php require_once "../partials/header.php" ?>

  <main id="conteudo">
    <section id="hero">
      <div class="hero-container">
        <h2>PAINEL ADMINISTRATIVO</h2>
        <h1>CONTROLE DE ESTOQUE & CARDÁPIO</h1>
        <div class="hero-border-txt">
          <img src="../imagens/barraFooter.png" alt="Ornamento" />
        </div>
      </div>
    </section>

    <section id="card-estoque">
      <div class="estoque-container">
        <div class="top-estoque">
          <div class="left-top-estoque">
            <div class="txt">
              <i class="bi bi-box-seam"></i>
              <h2>CONTROLE DE ESTOQUE</h2>
            </div>
            <img src="../imagens/ornamento.png" alt="" />
          </div>

          <div class="right-top-estoque">
            <button type="button" id="btnAdicionar">
              <i class="bi bi-plus-lg"></i>Adicionar ingrediente
            </button>
          </div>
        </div>


        <table>
          <thead>
            <tr>
              <th>INGREDIENTE</th>
              <th>CATEGORIA</th>
              <th class="txt-direita">QUANTIDADE(kg)</th>
              <th class="txt-centro">UNIDADE</th>
              <th class="txt-direita">ESTOQUE MÍNIMO</th>
              <th class="txt-centro">STATUS</th>
              <th class="txt-centro">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($estoques as $estoque) {
              print '
                  <tr>
                    <td>
                      <div class="ingrediente">
                        <span>' . $estoque['nome'] . '</span>
                      </div>
                    </td>
                    <td>Vegetais</td>
                    <td class="txt-direita">' . $estoque['quantidade'] . '</td>
                    <td class="txt-centro">' . $estoque['unidade'] . '</td>
                    <td class="txt-direita">' . $estoque['minimo'] . '</td>
                    <td class="txt-centro">
                      <span class="status-badge status-em-estoque">' . $estoque['status'] . '</span>
                    </td>
                    <td>
                      <div class="acao">
                        <button type="button" id="btnEditar">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn-excluir">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
              ';
            }
            ?>
            <tr>
              <td>
                <div class="ingrediente">
                  <span>Tomate Pelado</span>
                </div>
              </td>
              <td>Vegetais</td>
              <td class="txt-direita">12,50</td>
              <td class="txt-centro">kg</td>
              <td class="txt-direita">5 kg</td>
              <td class="txt-centro">
                <span class="status-badge status-em-estoque">Em estoque</span>
              </td>
              <td>
                <div class="acao">
                  <button type="button" id="btnEditar">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn-excluir">
                    <i class="bi bi-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section id="card-gerenciamento">
      <div class="gerenciamento-container">

        <div class="top-gerenciamento">
          <div class="left-top-gerenciamento">
            <div class="txt">
              <i class="bi bi-menu-button-wide"></i>
              <h2>GERENCIAR CARDÁPIO</h2>
            </div>

            <img src="../imagens/ornamento.png" alt="">
          </div>

          <div class="right-top-gerenciamento">
            <div class="filtros-cardapio">
              <select id="filtroCategoria">
                <option value="todos">Todas as Categorias</option>
                <option value="entradas">Entradas</option>
                <option value="massas">Massas</option>
                <option value="pizzas">Pizzas</option>
                <option value="sobremesas">Sobremesas</option>
              </select>

              <button type="button" id="btnAdicionarPrato">
                <i class="bi bi-plus-lg"></i>
                Adicionar Prato
              </button>
            </div>
          </div>
        </div>

        <div class="grid-cardapio">
          <?php
          foreach ($pratos as $prato) {
            print '
               <div class="card-prato" data-categoria="pizzas">
                  <div class="foto-prato">
                    <img src="../imagens/' . $prato["foto_prato"] . '" alt="Pizza Margherita">
                  </div>

                  <div class="info-geral">
                    <div class="info-prato">
                      <h3>' . $prato["nome_prato"] . '</h3>
                      <span>' . $prato["categoria"] . '</span>
                      <strong>' . $prato["preco"] . '</strong>
                    </div>

                    <div class="acoes-prato">
                      <button type="button" class="btn-editar">
                        <i class="bi bi-pencil"></i>
                        Editar
                      </button>

                      <button type="button" class="btn-excluir-prato">
                        <i class="bi bi-trash"></i>
                        Excluir
                      </button>
                    </div>
                  </div>
                </div>
            ';
          }
          ?>
          <div class="card-prato" data-categoria="pizzas">
            <div class="foto-prato">
              <img src="../imagens/pizza.jpg" alt="Pizza Margherita">
            </div>

            <div class="info-geral">
              <div class="info-prato">
                <h3>Pizza Margherita</h3>
                <span>Pizzas</span>
                <strong>R$ 59,90</strong>
              </div>

              <div class="acoes-prato">
                <button type="button" class="btn-editar" id="btnEditarPrato">
                  <i class="bi bi-pencil"></i>
                  Editar
                </button>

                <button type="button" class="btn-excluir-prato">
                  <i class="bi bi-trash"></i>
                  Excluir
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="ver-cardapio">
          <a href="cardapio.php">
            Ver todos os pratos do cardápio
            <i class="bi bi-chevron-right"></i>
          </a>
        </div>

      </div>
    </section>

    <section id="KPIs">
      <div class="kpis-container">
        <div class="grid-kpi">
          <div class="group-kpi ingredientes">
            <div class="icon-kpi">
              <i class="bi bi-box-seam"></i>
            </div>

            <div class="info-kpi">
              Total de Ingredientes
              <h3>28</h3>
            </div>
          </div>
          <div class="group-kpi cardapio">
            <div class="icon-kpi">
              <i class="bi bi-box-seam"></i>
            </div>

            <div class="info-kpi">
              Total de Pratos
              <h3>18</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MODAL IGREDIENTE -->
    <div id="modalIngrediente" class="oculto modal">
      <div class="modal-card">
        <div class="modal-header">
          <div>
            <h2>Adicionar Ingrediente</h2>
            <p>Cadastre um novo ingrediente no estoque</p>
          </div>

          <button type="button" id="fecharModalIngrediente" class="fechar-modal">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>

        <form id="formIngrediente">
          <div class="campo-modal">
            <label for="nomeIngrediente">
              Nome do ingrediente
            </label>

            <input type="text" id="nomeIngrediente" name="nome" placeholder="Ex: Tomate Pelado" required>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="categoriaIngrediente">
                Categoria
              </label>

              <select id="categoriaIngrediente" name="categoria" required>
                <option value="">Selecione</option>
                <option value="vegetais">Vegetais</option>
                <option value="laticinios">Laticínios</option>
                <option value="carnes">Carnes</option>
                <option value="massas">Massas</option>
                <option value="temperos">Temperos</option>
                <option value="bebidas">Bebidas</option>
                <option value="outros">Outros</option>
              </select>
            </div>

            <div class="campo-modal">
              <label for="unidadeIngrediente">
                Unidade
              </label>

              <select id="unidadeIngrediente" name="unidade" required>
                <option value="">Selecione</option>
                <option value="kg">Kg</option>
                <option value="g">Gramas</option>
                <option value="l">Litros</option>
                <option value="ml">Mililitros</option>
                <option value="un">Unidade</option>
              </select>
            </div>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="quantidadeIngrediente">
                Quantidade atual
              </label>

              <input type="number" id="quantidadeIngrediente" name="quantidade" placeholder="Ex: 10" min="0" step="0.01"
                required>
            </div>

            <div class="campo-modal">
              <label for="estoqueMinimo">
                Estoque mínimo
              </label>

              <input type="number" id="estoqueMinimo" name="estoque_minimo" placeholder="Ex: 5" min="0" step="0.01"
                required>
            </div>
          </div>

          <div class="campo-modal">
            <label for="observacaoIngrediente">
              Observação
            </label>

            <textarea id="observacaoIngrediente" name="observacao" rows="3"
              placeholder="Alguma informação sobre este ingrediente..."></textarea>
          </div>

          <div class="acoes-modal">
            <button type="button" id="cancelarModalIngrediente" class="btn-cancelar">
              Cancelar
            </button>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-check-lg"></i>
              Adicionar Ingrediente
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- EDITAR IGREDIENTE -->
    <div id="modalEditar" class="oculto modal">
      <div class="modal-card">
        <div class="modal-header">
          <div>
            <h2>Editar Ingrediente</h2>
            <p>Cadastre um novo ingrediente no estoque</p>
          </div>

          <button type="button" id="fecharModalEditar" class="fechar-modal">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>

        <form id="formEditar">
          <div class="campo-modal">
            <label for="nomeIngrediente">
              Nome do ingrediente
            </label>

            <input type="text" id="nomeEditar" name="nome" placeholder="Ex: Tomate Pelado" required>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="categoriaIngrediente">
                Categoria
              </label>

              <select id="categoriaEditar" name="categoria" required>
                <option value="">Selecione</option>
                <option value="vegetais">Vegetais</option>
                <option value="laticinios">Laticínios</option>
                <option value="carnes">Carnes</option>
                <option value="massas">Massas</option>
                <option value="temperos">Temperos</option>
                <option value="bebidas">Bebidas</option>
                <option value="outros">Outros</option>
              </select>
            </div>

            <div class="campo-modal">
              <label for="unidadeIngrediente">
                Unidade
              </label>

              <select id="unidadeEditar" name="unidade" required>
                <option value="">Selecione</option>
                <option value="kg">Kg</option>
                <option value="g">Gramas</option>
                <option value="l">Litros</option>
                <option value="ml">Mililitros</option>
                <option value="un">Unidade</option>
              </select>
            </div>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="quantidadeIngrediente">
                Quantidade atual
              </label>

              <input type="number" id="quantidadeEditar" name="quantidade" placeholder="Ex: 10" min="0" step="0.01"
                required>
            </div>

            <div class="campo-modal">
              <label for="estoqueMinimo">
                Estoque mínimo
              </label>

              <input type="number" id="estoqueMinimoEditar" name="estoque_minimo" placeholder="Ex: 5" min="0" step="0.01"
                required>
            </div>
          </div>

          <div class="campo-modal">
            <label for="observacaoIngrediente">
              Observação
            </label>

            <textarea id="observacaoEditar" name="observacao" rows="3"
              placeholder="Alguma informação sobre este ingrediente..."></textarea>
          </div>

          <div class="acoes-modal">
            <button type="button" id="cancelarModalEditar" class="btn-cancelar">
              Cancelar
            </button>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-check-lg"></i>
              Editar Ingrediente
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- MODAL PRATO -->
    <div id="modal" class="oculto modal">
      <div class="modal-card">

        <div class="modal-header">
          <div>
            <h2>Adicionar Prato</h2>
            <p>Cadastre um novo prato no cardápio</p>
          </div>

          <button type="button" id="fecharModal" class="fechar-modal">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>

        <form id="formPrato">
          <div class="campo-modal">
            <label for="nomePrato">Nome do prato</label>
            <input type="text" id="nomePrato" name="nome" placeholder="Ex: Spaghetti al Pomodoro" required>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="categoriaPrato">Categoria</label>
              <select id="categoriaPrato" name="categoria" required>
                <option value="">Selecione</option>
                <option value="entradas">Entradas</option>
                <option value="massas">Massas</option>
                <option value="pizzas">Pizzas</option>
                <option value="sobremesas">Sobremesas</option>
              </select>
            </div>

            <div class="campo-modal">
              <label for="precoPrato">Preço</label>
              <input type="number" id="precoPrato" name="preco" placeholder="0,00" step="0.01" min="0" required>
            </div>

          </div>

          <div class="campo-modal">
            <label for="descricaoPrato">Descrição</label>
            <textarea id="descricaoPrato" name="descricao" placeholder="Descreva os ingredientes e detalhes do prato..."
              rows="4"></textarea>
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
            <button type="button" id="cancelarModal" class="btn-cancelar">
              Cancelar
            </button>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-check-lg"></i>
              Adicionar Prato
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- MODAL: EDITAR PRATO -->
    <div id="modalPratoEditar" class="oculto modal">
      <div class="modal-card">

        <div class="modal-header">
          <div>
            <h2>Editar Prato</h2>
            <p>Cadastre um novo prato no cardápio</p>
          </div>

          <button type="button" id="fecharModalPratoEditar" class="fechar-modal">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>

        <form id="formPratoEditar">
          <div class="campo-modal">
            <label for="nomePrato">Nome do prato</label>
            <input type="text" id="nomePratoEditar" name="nome" placeholder="Ex: Spaghetti al Pomodoro" required>
          </div>

          <div class="linha-modal">
            <div class="campo-modal">
              <label for="categoriaPrato">Categoria</label>
              <select id="categoriaPratoEditar" name="categoria" required>
                <option value="">Selecione</option>
                <option value="entradas">Entradas</option>
                <option value="massas">Massas</option>
                <option value="pizzas">Pizzas</option>
                <option value="sobremesas">Sobremesas</option>
              </select>
            </div>

            <div class="campo-modal">
              <label for="precoPrato">Preço</label>
              <input type="number" id="precoPratoEditar" name="preco" placeholder="0,00" step="0.01" min="0" required>
            </div>

          </div>

          <div class="campo-modal">
            <label for="descricaoPrato">Descrição</label>
            <textarea id="descricaoPratoEditar" name="descricao" placeholder="Descreva os ingredientes e detalhes do prato..."
              rows="4"></textarea>
          </div>

          <div class="campo-modal">
            <label for="imagemPrato">Imagem do prato</label>

            <div class="upload-imagem">
              <i class="bi bi-image"></i>
              <span>Selecionar imagem</span>

              <input type="file" id="imagemPratoEditar" name="imagem" accept="image/*">
            </div>
          </div>

          <div class="acoes-modal">
            <button type="button" id="cancelarModalPratoEditar" class="btn-cancelar">
              Cancelar
            </button>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-check-lg"></i>
              Salvar Alterações
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script>
    //ESTOQUE
    const botaoIngrediente = document.querySelector("#btnAdicionar");
    const botaoFecharIngrediente = document.querySelector("#fecharModalIngrediente");
    const botaoCancelarIngrediente = document.querySelector("#cancelarModalIngrediente");

    function abrirModalIngrediente() {
      const modalIngrediente = document.querySelector("#modalIngrediente");
      const conteudo = document.querySelector("#conteudo");

      modalIngrediente.classList.remove("oculto");
      modalIngrediente.classList.add("visivel");
      conteudo.classList.add("fundo");
    }

    function fecharModalIngrediente() {
      const modalIngrediente = document.querySelector("#modalIngrediente");
      const conteudo = document.querySelector("#conteudo");
      modalIngrediente.classList.remove("visivel");
      modalIngrediente.classList.add("oculto");
      conteudo.classList.remove("fundo");
    }

    botaoIngrediente.addEventListener("click", abrirModalIngrediente);
    botaoFecharIngrediente.addEventListener("click", fecharModalIngrediente);
    botaoCancelarIngrediente.addEventListener("click", fecharModalIngrediente);

    //GERENCIAMENTO
    const botaoPrato = document.querySelector("#btnAdicionarPrato");
    const botaoFecharPrato = document.querySelector("#fecharModal");
    const botaoCancelarPrato = document.querySelector("#cancelarModal");

    botaoPrato.addEventListener("click", abrirModal);
    botaoFecharPrato.addEventListener("click", fecharModal);
    botaoCancelarPrato.addEventListener("click", fecharModal);

    function abrirModal() {
      const modal = document.querySelector("#modal");
      const conteudo = document.querySelector("#conteudo");

      modal.classList.remove("oculto");
      modal.classList.add("visivel");

      conteudo.classList.add("fundo");
    }

    function fecharModal() {
      const modal = document.querySelector("#modal");
      const conteudo = document.querySelector("#conteudo");

      modal.classList.remove("visivel");
      modal.classList.add("oculto");

      conteudo.classList.remove("fundo");
    }


    // EDITAR
    const botaoEditar = document.querySelector("#btnEditar");
    const botaoFecharEditar = document.querySelector("#fecharModalEditar");
    const botaoCancelarEditar = document.querySelector("#cancelarModalEditar");

    function abrirModalEditar() {
      const modalEditar = document.querySelector("#modalEditar");
      const conteudo = document.querySelector("#conteudo");

      modalEditar.classList.remove("oculto");
      modalEditar.classList.add("visivel");
      conteudo.classList.add("fundo");
    }

    function fecharModalEditar() {
      const modalEditar = document.querySelector("#modalEditar");
      const conteudo = document.querySelector("#conteudo");
      modalEditar.classList.remove("visivel");
      modalEditar.classList.add("oculto");
      conteudo.classList.remove("fundo");
    }

    botaoEditar.addEventListener("click", abrirModalEditarPrato);
    botaoFecharEditar.addEventListener("click", fecharModalEditar);
    botaoCancelaEditar.addEventListener("click", fecharModalEditar);

    // EDITAR PRATO

    const botoesEditarPrato = document.querySelectorAll("#btnEditarPrato");
    const botaoFecharPratoEditar = document.querySelector("#fecharModalPratoEditar");
    const botaoCancelarPratoEditar = document.querySelector("#cancelarModalPratoEditar");

    function abrirModalPrato() {
      const modalPratoEditar = document.querySelector("#modalPratoEditar");
      const conteudo = document.querySelector("#conteudo");

      modalPratoEditar.classList.remove("oculto");
      modalPratoEditar.classList.add("visivel");

      conteudo.classList.add("fundo");
    }

    function fecharModalPrato() {
      const modalPratoEditar = document.querySelector("#modalPratoEditar");
      const conteudo = document.querySelector("#conteudo");

      modalPratoEditar.classList.remove("visivel");
      modalPratoEditar.classList.add("oculto");

      conteudo.classList.remove("fundo");
    }

    botoesEditarPrato.forEach(function(botao) {
      botao.addEventListener("click", abrirModalPrato);
    });

    if (botaoFecharPratoEditar) {
      botaoFecharPratoEditar.addEventListener("click", fecharModalPrato);
    }
    if (botaoCancelarPratoEditar) {
      botaoCancelarPratoEditar.addEventListener("click", fecharModalPrato);
    }
  </script>
</body>

</html>