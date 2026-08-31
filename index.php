<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luce d'Itália — Tradição, sabor e paixão em cada detalhe</title>
    <meta name="description"
        content="Restaurante Luce d'Itália: culinária italiana autêntica em São Paulo desde 1879. Cardápio, reservas e delivery.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="partials/css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="partials/css/footer.css">
</head>

<body>
    <?php 
      require_once './partials/header.php';
    ?>
    <main id="conteudo">
        <section id="hero">
            <div class="hero">
                <div class="hero-left">
                    <div class="hero-txt">
                        <h1>AUTÊNTICA
                            <span>COMO A ITÁLIA</span>
                            FEITA PARA VOCÊ
                        </h1>
                    </div>

                    <div class="detail-img-hero">
                        <img src="imagens/ornamento.png" alt="" role="presentation">
                    </div>

                    <div class="details-txt-hero">
                        <p>Desde 1879, levamos até a sua mesa o melhor da culinária italiana, com ingredientes
                            selecionados e muito amor em cada prato.</p>
                    </div>

                    <div class="btn-hero">
                        <a class="reserva-hero" href="#reservas">
                            <i class="bi bi-calendar"></i>
                            <span>FAZER RESERVA</span>
                        </a>

                        <a class="cardapio-hero" href="cardapio.php">
                            <i class="bi bi-book"></i>
                            <span>VER CARDÁPIO</span>
                        </a>
                    </div>
                </div>

                <div class="hero-right">
                    <div class="imagem">
                        <img src="imagens/hero-massa.jpg" alt="Prato de massa italiana artesanal">
                    </div>
                </div>
            </div>
        </section>

        <section id="navegacao">
            <div class="navegacao-top">
                <img src="imagens/ornamento.png" alt="" role="presentation" class="ornamento-img">

                <div class="hero-navegacao">
                    <div class="linha-decorativa esquerda"></div>

                    <h2 class="texto">
                        TUDO O QUE VOCÊ PRECISA<br>
                        <span>EM UM SÓ LUGAR</span>
                    </h2>

                    <div class="linha-decorativa direita"></div>
                </div>
            </div>

            <div class="navegacao-table">

                <div class="from-group-navegacao cardapio">
                    <div class="icon-navegacao">
                        <i class="bi bi-map"></i>
                    </div>

                    <h3>CARDÁPIO</h3>
                    <p>Pratos preparados com receita tradicional italiana e ingredientes de alta qualidade.</p>

                    <div class="link-navegacao">
                        <a href="janelas/cardapio.html">VER CARDÁPIO &rarr;</a>
                    </div>
                </div>

                <div class="from-group-navegacao reserva">
                    <div class="icon-navegacao">
                        <i class="bi bi-calendar3"></i>
                    </div>

                    <h3>RESERVAS</h3>
                    <p>Reserve sua mesa de forma rápida e prática e tenha uma experiência inesquecível.</p>

                    <div class="link-navegacao">
                        <a href="#reservas">FAZER RESERVA &rarr;</a>
                    </div>
                </div>

                <div class="from-group-navegacao delivery">
                    <div class="icon-navegacao">
                        <i class="bi bi-scooter"></i>
                    </div>

                    <h3>DELIVERY</h3>
                    <p>Peça seus pratos favoritos e receba em casa com rapidez, segurança e muito sabor.</p>

                    <div class="link-navegacao">
                        <a href="#">PEDIR AGORA &rarr;</a>
                    </div>
                </div>

                <div class="from-group-navegacao pedidos">
                    <div class="icon-navegacao">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <h3>MEUS PEDIDOS</h3>
                    <p>Acompanhe seu histórico de pedidos e visualize suas compras anteriores.</p>

                    <div class="link-navegacao">
                        <a href="#">VER HISTÓRICO &rarr;</a>
                    </div>
                </div>

            </div>

        </section>

        <section id="sobre" class="sobre-nos-section">
            <div class="sobre-nos-container">

                <span class="sobre-subtitulo">A NOSSA HISTÓRIA</span>

                <h2 class="sobre-titulo">
                    MAIS QUE UM RESTAURANTE,<br>
                    <span class="sobre-titulo-destaque">UMA TRADIÇÃO.</span>
                </h2>

                <div class="sobre-divisor">
                    <svg width="260" height="20" viewBox="0 0 260 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <line x1="0" y1="10" x2="110" y2="10" stroke="#d4af37" stroke-width="1" />
                        <rect x="125" y="5" width="10" height="10" fill="#d4af37" transform="rotate(45 130 10)" />
                        <line x1="150" y1="10" x2="260" y2="10" stroke="#d4af37" stroke-width="1" />
                    </svg>
                </div>

                <div class="sobre-conteudo">
                    <p class="sobre-paragrafo destaque-texto">
                        Inspirados na rica tradição italiana, criamos um espaço onde cada detalhe celebra a cultura, a
                        família e os bons momentos à mesa.
                    </p>
                    <p class="sobre-paragrafo">
                        Desde as nossas origens, selecionamos ingredientes de produtores locais e importamos os melhores
                        trigos e azeites diretamente da Itália. Aqui, cada receita conta uma história que atravessa
                        gerações, mantendo viva a alma da verdadeira gastronomia clássica.
                    </p>
                </div>

                <div class="sobre-acao">
                    <a href="#" class="btn-sobre">
                        CONHEÇA MAIS SOBRE NÓS
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M12 1L17 6M17 6L12 11M17 6H1" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

            </div>
        </section>

    </main>
    <?php 
      require_once './partials/footer.php';
    ?>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const headerList = document.getElementById('header-list');

        menuToggle.addEventListener('click', () => {
            const isOpen = headerList.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', String(isOpen));
        });

        document.querySelectorAll('.header-list a').forEach((link) => {
            link.addEventListener('click', () => {
                headerList.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>