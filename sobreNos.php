<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="partials/css/header.css">
    <link rel="stylesheet" href="partials/css/footer.css">
    <link rel="stylesheet" href="css/sobreNos.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php require_once './partials/header.php'; ?>
    <section id="hero">
        <div class="hero">
            <div class="hero-centro">
                <div class="hero-txt">
                    <h1>SOBRE NÓS</h1>
                    <div class="hero-bordar-txt">
                        <img src="imagens/barraFooter.png" alt="Ornamento" />
                    </div>

                    <div class="details-txt-hero">
                        <p>
                            Mais que um restaurante, a Luce D'Italia é um pedaço da Italia no coração de São Paulo.
                            Aqui, tradição, sabor e paixão se encontram para criar experiência<strong> inesquecíveis à
                                mesa.</strong>
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

    <section id="hero2">
        <div class="img-hero2">
            <img src="imagens/imgSobreNosRestaurante.png" alt="">
        </div>
        <div class="text-hero2">
            <div class="title-cardapio">
                <div class="linha-decorativa esquerda"></div>
                <h1>NOSSA HISTÓRIA</h1>
                <div class="linha-decorativa direita"></div>

            </div>
            <p>A Luce D'Italia nasceu em 1998, do sonho de uma família italiana em <span
                    class="quebra-linha">compatilhar receitas tradicionais passadas de geração em geração.</span> <span
                    class="quebra-linha">ㅤ</span><span class="quebra-linha">Cada detalhe do nosso restaurante foi
                    pensado para proporcionar</span><span class="quebra-linha">acolhimento e uma verdadeira imersão na
                    cultura italiana.</span><span class="quebra-linha">ㅤ</span><span class="quebra-linha">Ao longo dos
                    anos, seguimos fiéis aos nossos princípios: ingredientes</span><span class="quebra-linha">de
                    qualidade, preparo artesanal e amor em cada prato servido.</span> </p>
        </div>
    </section>

    <section id="hero3">
        <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>NOSSOS VALORES</h1>
            <div class="linha-decorativa direita"></div>
        </div>
        <div class="icons-hero3">
            <div class="valores">
                <img src="imagens/icon1.png" alt="">
                <h2>TRADIÇÃO</h2>
                <p>Receitas autênticas que <span class="quebra-linha">carregam a essência da</span>culinária italiana.
                </p>
            </div>
            <div class="valores">
                <img src="imagens/icon2.png" alt="">
                <h2>QUALIDADE</h2>
                <p>Selecionamos os melhores <span class="quebra-linha">ingredientes para garantir</span>sabor e excelência.
                </p>
            </div>
            <div class="valores">
                <img class="coracao" src="imagens/icon3.png" alt="">
                <h2>PAIXÃO</h2>
                <p>Cozinhar é o que nos move, <span class="quebra-linha">Paixão presente em cada</span>detalhe, todos os dias.
                </p>
            </div>
            <div class="valores">
                <img src="imagens/icon4.png" alt="">
                <h2>ACOLHIMENTO</h2>
                <p>Mais que clientes, recebemos<span class="quebra-linha">amigos para momentos</span>especiais à mesa.
                </p>
            </div>
        </div>
    </section>
    <section id="hero4">

        <div class="title-cardapio">
            <div class="linha-decorativa esquerda"></div>
            <h1>NOSSOS COMPROMISSO</h1>
            <div class="linha-decorativa direita"></div>
        </div>

        <div class="descHero4">
            <div class="paragrafo4">
                <p>Comprometemo-nos a oferecer <span class="quebra-linha"></span>uma excelência completa, <span class="quebra-linha"></span>que vai além da comida.
                    <span class="quebra-linha"></span>
                    Buscamos sempre inovar <span class="quebra-linha"></span>sempre perder nossas raízes,<span class="quebra-linha"></span>respeitando a tradição e <span class="quebra-linha"></span>valorizando cada cliente<span class="quebra-linha"></span>que faz parte da nossa história.
                </p>
            </div>
            <div class="iconHero4">
                <div class="compromisso">
                    <img src="imagens/icon5.png" alt="">
                    <p>Ingredientes frescos <span class="quebra-linha"></span>e selecionados</p>
                </div>
                <div class="compromisso">
                    <img src="imagens/icon6.png" alt="">
                    <p>Preparo artesanal <span class="quebra-linha"></span>em cada receita</p>
                </div>
                <div class="compromisso">
                    <img src="imagens/icon7.png" alt="">
                    <p>Harmonização perfeita <span class="quebra-linha"></span>entre pratos e vinhos</p>
                </div>
                <div class="compromisso">
                    <img src="imagens/icon8.png" alt="">
                    <p>Atendimento<span class="quebra-linha"></span>atencioso e dedicado</p>
                </div>
            </div>
        </div>
    </section>

    <?php require_once './partials/footer.php'; ?>
</body>

</html>