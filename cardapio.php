<?php
require_once 'crud.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';

$pratos = readAll($pdo, 'pratos');

$categorias = [
    'entradas' => 'entradas',
    'massas' => 'massas'
]

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cardápio - Luce D'Italia</title>
  <link rel="stylesheet" href="./partials/css/header.css" />
  <link rel="stylesheet" href="./partials/css/footer.css" />
  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/cardapio.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/cardapio.css" />
</head>

<body>
    <?php 
      require_once './partials/header.php';
    ?>

  <main id="cardapio">
    <section id="hero">
      <div class="hero">
        <div class="hero-centro">
          <div class="hero-txt">
            <h1>CARDÁPIO</h1>
            <div class="hero-bordar-txt">
              <img src="imagens/barraFooter.png" alt="Ornamento" />
            </div>

            <div class="details-txt-hero">
              <p>
                Nossos pratos são preparados com ingredientes selecionados e
                muito amor em cada detalhe. <strong>Bun appetito!</strong>
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

    <section id="filtros">
      <div class="filtros-container">
        <div class="filtros">
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-grid"></i>
              <p>TODOS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-cloud-fog"></i>
              <p>ENTRADAS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-egg-fried"></i>
              <p>PRATOS PRINCIPAIS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-cup-hot"></i>
              <p>MASSAS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-pie-chart"></i>
              <p>PIZZAS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-cake2"></i>
              <p>SOBREMESAS</p>
            </a>
          </div>
          <div class="group-filtros">
            <a href="#">
              <i class="bi bi-cup-straw"></i>
              <p>BEBIDAS</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="produtos">
      <div class="comidas-container">
        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>ENTRADAS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <?php 
              foreach ($pratos as $prato) {
                if($prato['categoria'] === "Entradas") {
                  print '
                    <div class="card-comida">
                    <div class="img-prato">
                      <img src="'.$prato['foto_prato'].'">
                  ';
                }
              }
            ?>
            <div class="card-comida">
              <div class="img-prato">
                <img src="./imagens/entrada.jpg">
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="./imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="./imagens/entrada.jpg">
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="./imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="./imagens/entrada.jpg">
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="./imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="./imagens/entrada.jpg">
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>PRATOS PRINCIPAIS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pratoPrincipal.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pratoPrincipal.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pratoPrincipal.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pratoPrincipal.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>MASSAS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/massa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/massa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/massa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/massa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>PIZZAS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pizza.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pizza.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pizza.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/pizza.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>SOBREMESAS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/sobremesa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/sobremesa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/sobremesa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/sobremesa.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardapio">
          <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>BEBIDAS</h1>
            <div class="linha-decorativa direita"></div>
          </div>

          <div class="card-cardapio">
            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/bebida.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/bebida.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/bebida.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>

            <div class="card-comida">
              <div class="img-prato">
                <img src="../imagens/bebida.jpg" />
              </div>

              <div class="detalhes-comida">
                <div class="titulo-comida">
                  <h2>Paccheri ao pomodoro</h2>
                </div>

                <div class="descricao-comida">
                  Massa artesanal envolvida em um molho de
                  tomate,tomates-cereja, folhas de manjericão e azeite
                  extravirgem.
                </div>

                <div class="preco-comida">
                  <p>R$ 32,90</p>
                </div>

                <div class="borda-card-comida">
                  <img src="../imagens/barraFooter.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <br><br><br>
      </div>
    </section>
  </main>

 <?php 
      require_once './partials/footer.php';
    ?>
</body>

</html>