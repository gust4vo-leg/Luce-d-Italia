<?php
session_start();

require_once './crud.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $add = [
        'data' => $_POST['data'],
        'horario_reserva' => $_POST['horario'],
        'quantidade_pessoas' => $_POST['pessoas'],
        'ambiente_preferido' => $_POST['ambiente'],
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'telefone' => $_POST['telefone'],
        'observacao' => $_POST['observacoes']
    ];
    create($pdo, 'reservas_mesas', $add);
    header('Location: ./reserva.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva - Luce'D Italia</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="partials/css/header.css" />
    <link rel="stylesheet" href="partials/css/footer.css">
    <link rel="stylesheet" href="css/reserva.css">
    <link rel="stylesheet" href="css/global.css" />
</head>

<body>
    <?php require_once './partials/header.php'; ?>

    <main id="reserva">
        <section id="hero">
            <div class="hero">
                <div class="hero-centro">
                    <div class="hero-txt">
                        <h1>RESERVA</h1>
                        <div class="hero-bordar-txt">
                            <img src="imagens/barraFooter.png" alt="Ornamento" />
                        </div>

                        <div class="details-txt-hero">
                            <p>
                                Garanta sua experiência no Luce d'Italia. <br>
                                Preencha os dados abaixo e aguarde a confirmação da sua reserva.
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

        <section id="formulario-informacoes">
            <div class="reserva-container">
                <div class="formulario-left">
                    <div class="top-formulario">
                        <i class="bi bi-calendar"></i>
                        <h2>FAÇA SUA RESERVA</h2>
                    </div>

                    <form action="reserva.php" method="POST">
                        <div class="grid-form">
                            <div class="form-group">
                                <label>DATA DA RESERVA</label>
                                <div class="input-icon">
                                    <i class="bi bi-calendar3"></i>
                                    <input type="date" name="data" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>HORÁRIO</label>
                                <div class="input-icon">
                                    <i class="bi bi-clock"></i>
                                    <input type="time" name="horario" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid-form">
                            <div class="form-group">
                                <label>NÚMERO DE PESSOAS</label>
                                <div class="input-icon">
                                    <i class="bi bi-person"></i>
                                    <select name="pessoas" required>
                                        <option value="">
                                            Selecione
                                        </option>
                                        <option value="1">
                                            1 pessoa
                                        </option>
                                        <option value="2">
                                            2 pessoas
                                        </option>
                                        <option value="3">
                                            3 pessoas
                                        </option>
                                        <option value="4">
                                            4 pessoas
                                        </option>
                                        <option value="5">
                                            5 pessoas
                                        </option>
                                        <option value="6">
                                            6 pessoas
                                        </option>
                                        <option value="7">
                                            7 pessoas
                                        </option>
                                        <option value="8">
                                            8 pessoas
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>
                                    AMBIENTE PREFERIDO
                                    <span>(OPCIONAL)</span>
                                </label>

                                <div class="input-icon">
                                    <i class="bi bi-house"></i>
                                    <select name="ambiente">
                                        <option value="interno">
                                            Interno
                                        </option>

                                        <option value="varanda">
                                            Varanda
                                        </option>

                                        <option value="privativo">
                                            Privativo
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>NOME COMPLETO</label>

                            <div class="input-icon">
                                <i class="bi bi-person"></i>
                                <input type="text" name="nome" placeholder="Digite seu nome" required>
                            </div>
                        </div>

                        <div class="grid-form">
                            <div class="form-group">
                                <label>E-MAIL</label>

                                <div class="input-icon">
                                    <i class="bi bi-envelope"></i>
                                    <input type="email" name="email" placeholder="seu@email.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>TELEFONE / WHATSAPP</label>
                                <div class="input-icon">
                                    <i class="bi bi-telephone"></i>
                                    <input type="tel" name="telefone" placeholder="(11) 99999-9999" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>OBSERVAÇÕES <span>(OPCIONAL)</span></label>
                            <div class="textarea-wrapper">
                                <textarea name="observacoes" maxlength="200"
                                    placeholder="Alguma observação especial? Ex: Aniversário, criança, acessibilidade..."></textarea>
                                <span class="contador">
                                    0/200
                                </span>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn-confirmar">
                            <i class="bi bi-calendar-check"></i>
                            CONFIRMAR RESERVA
                        </button>

                        <p class="aviso-reserva">
                            <i class="bi bi-shield-check"></i>
                            Sua reserva só será confirmada após o nosso contato.
                        </p>
                    </form>
                </div>

                <aside class="resumo-reserva">
                    <div class="top-resumo">
                        <i class="bi bi-journal-text"></i>
                        <h2>RESUMO DA RESERVA</h2>
                    </div>

                    <div class="resumo-lista">
                        <div class="resumo-item">
                            <i class="bi bi-calendar3"></i>
                            <span>Data</span>
                            <strong>31/05/2024</strong>
                        </div>

                        <div class="resumo-item">
                            <i class="bi bi-clock"></i>
                            <span>Horário</span>
                            <strong>19:30</strong>
                        </div>

                        <div class="resumo-item">
                            <i class="bi bi-people"></i>
                            <span>Pessoas</span>
                            <strong>4 pessoas</strong>
                        </div>

                        <div class="resumo-item">
                            <i class="bi bi-house"></i>
                            <span>Ambiente</span>
                            <strong>Interno</strong>
                        </div>
                    </div>

                    <div class="aviso-resumo">
                        <div class="icone-aviso">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>
                            <h3>Como funciona?</h3>
                            <p>
                                Entraremos em contato para
                                confirmar sua reserva em até
                                2 horas.
                            </p>
                        </div>
                    </div>
                    
                    <div class="duvidas-resumo">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <h3>Dúvidas?</h3>
                            <p>Fale conosco</p>
                            <strong>
                                (11) 99999-9999
                            </strong>
                        </div>
                    </div>
                </aside>
            </div>
        </section>


        <section id="ambientes">
            <div class="ambientes-container">
                <div class="titulo-ambientes">
                    <img src="imagens/barraFooter.png" alt="">
                    <h2>CONHEÇA NOSSOS AMBIENTES</h2>
                    <img src="imagens/barraFooter.png" alt="">
                </div>


                <div class="ambientes-grid">
                    <article class="card-ambiente">
                        <div class="imagem-ambiente">
                            <img src="imagens/interno.jpg" alt="Ambiente interno do restaurante">
                        </div>

                        <div class="info-ambiente">
                            <h3>INTERNO</h3>

                            <p>
                                Ambiente aconchegante e climatizado,
                                perfeito para qualquer ocasião.
                            </p>

                            <span>
                                <i class="bi bi-people"></i>
                                Capacidade até 60 pessoas
                            </span>
                        </div>
                    </article>

                    <article class="card-ambiente">
                        <div class="imagem-ambiente">
                            <img src="imagens/varanda.jpg" alt="Varanda do restaurante">
                        </div>

                        <div class="info-ambiente">
                            <h3>VARANDA</h3>

                            <p>
                                Ambiente arejado com vista para o jardim,
                                ideal para noites especiais.
                            </p>

                            <span>
                                <i class="bi bi-people"></i>
                                Capacidade até 40 pessoas
                            </span>
                        </div>
                    </article>

                    <article class="card-ambiente">
                        <div class="imagem-ambiente">
                            <img src="imagens/privativo.jpg" alt="Ambiente privativo do restaurante">
                        </div>

                        <div class="info-ambiente">
                            <h3>PRIVATIVO</h3>

                            <p>
                                Espaço exclusivo para eventos e
                                celebrações particulares.
                            </p>

                            <span>
                                <i class="bi bi-people"></i>
                                Capacidade até 20 pessoas
                            </span>
                        </div>
                    </article>
                </div>


                <p class="observacao-ambientes">
                    * A escolha do ambiente está sujeita à disponibilidade
                    no momento da sua reserva.
                </p>
            </div>

        </section>
    </main>

    <footer>
        <div class="footer-main">
            <div class="left">
                <div class="logo-footer">
                    <img src="imagens/logo.png" alt="Luce D'Italia" />
                </div>

                <div class="detalhe-insp">
                    <span>Tradição, sabor e paixão</span>
                    <br />
                    em cada detalhe.
                </div>

                <div class="borda-footer">
                    <img src="imagens/barraFooter.png" alt="Ornamento" />
                </div>

                <div class="txt-footer-left">
                    Do clássico à sua mesa, oferecemos uma experiência italiana
                    autêntica, feita para momentos inesquecíveis.
                </div>
            </div>

            <div class="main-footer">
                <nav class="navegacao">
                    <h2>NAVEGAÇÃO</h2>

                    <img src="imagens/ornamento.png" alt="Ornamento" class="ornamento" />

                    <ul>
                        <li>
                            <a href="#">
                                <i class="bi bi-house-door"></i>
                                <span>Início</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-map"></i>
                                <span>Cardápio</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-calendar"></i>
                                <span>Reservas</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-bicycle"></i>
                                <span>Delivery</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-cart3"></i>
                                <span>Carrinho</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-clock"></i>
                                <span>Histórico de Pedidos</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-person"></i>
                                <span>Minha Conta</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="atendimento">
                <h2>ATENDIMENTO</h2>

                <img src="imagens/ornamento.png" alt="Ornamento" class="ornamento" />

                <div class="atendimento-lista">
                    <div class="info-item">
                        <i class="bi bi-telephone-fill"></i>
                        <span>(11) 99999-9999</span>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-envelope-fill"></i>
                        <span>contato@luceditalia.com.br</span>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-geo-alt-fill"></i>

                        <span>
                            Rua das Massas, 123<br />
                            Bela Vista – São Paulo, SP<br />
                            CEP 01310-000
                        </span>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-clock"></i>

                        <span>
                            Segunda a Domingo<br />
                            <strong>11h às 23h</strong>
                        </span>
                    </div>
                </div>

                <a href="#" class="reserva-footer">
                    <i class="bi bi-cloud-fog"></i>
                    <span>
                        Faça sua <strong>reserva</strong> e garanta<br />
                        momentos especiais!
                    </span>
                </a>
            </div>

            <div class="social-footer">
                <h2>SIGA-NOS</h2>

                <img src="imagens/ornamento.png" alt="Ornamento" class="ornamento" />

                <div class="social-lista">
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                        <span>Instagram</span>
                    </a>

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                        <span>Facebook</span>
                    </a>

                    <a href="#">
                        <i class="bi bi-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-decoration left-decoration">
                <img src="imagens/planta.png" alt="Decoração" />
            </div>

            <div class="copyright">
                <span>© 2026 Luce D'Italia</span>
            </div>

            <div class="footer-center">
                <img src="imagens/ornamento.png" />
                <div class="footer-center-pratos">
                    <img src="imagens/pratos.png" alt="Talheres e prato" />
                </div>
            </div>

            <div class="footer-decoration right-decoration">
                <img src="imagens/plantaRight.png" alt="Decoração" />
            </div>
        </div>
    </footer>
</body>

</html>