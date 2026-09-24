USE db_luce;

CREATE TABLE usuarios (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL, 
    telefone VARCHAR(100) NOT NULL,
    tipo ENUM('cliente', 'admin') DEFAULT 'cliente',
    cpf VARCHAR(11) UNIQUE NOT NULL 
);

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    data_reserva DATE NOT NULL,
    horario_reserva TIME NOT NULL,
    quantidade_pessoas INT NOT NULL,
    ambiente_preferido ENUM('interno', 'varanda', 'privativo') DEFAULT 'interno',
    observacoes VARCHAR(200) NULL,
    status_reserva ENUM('Pendente', 'Confirmada', 'Cancelada') DEFAULT 'Pendente'
);

CREATE TABLE pratos (
    id_pratos INT AUTO_INCREMENT PRIMARY KEY,
    nome_prato VARCHAR(100) NOT NULL,
    num_prato INT NOT NULL,
    foto_prato VARCHAR(1000),
    categoria VARCHAR(100),
    preco DECIMAL(10, 2) NOT NULL,
    descricao VARCHAR(255) NOT NULL
);

CREATE TABLE estoques (
    id_ingrediente INT AUTO_INCREMENT PRIMARY KEY,
    nome_ingredientes VARCHAR(100) NOT NULL,
    qtd_ingrediente INT NOT NULL,
    categoria ENUM('Vegetais', 'Laticínios', 'Carnes', 'Massas', 'Tempero', 'Bebidas') NOT NULL,
    estoque_min INT NOT NULL,
    unidade ENUM('KG', 'G', 'L', 'ML') NOT NULL
);

INSERT INTO usuarios (nome, email, senha, telefone, tipo, cpf) VALUES
('Giovanni Luce', 'giovanni@luce.com.br', '$2y$10$e0MYzXy...', '(11) 98765-4321', 'admin', '12345678901'),
('Mariana Silva', 'mariana.silva@email.com', '$2y$10$R9hKca...', '(11) 99122-3344', 'cliente', '98765432100'),
('Carlos Eduardo', 'carlos.edu@email.com', '$2y$10$PqZxw...', '(11) 97555-6677', 'cliente', '45678912344'),
('Beatriz Souza', 'beatriz.souza@email.com', '$2y$10$LmNop...', '(11) 96111-2233', 'cliente', '78912345622');

INSERT INTO reservas (nome, email, telefone, data_reserva, horario_reserva, quantidade_pessoas, ambiente_preferido, observacoes, status_reserva) VALUES
('Mariana Silva', 'mariana.silva@email.com', '(11) 99122-3344', '2026-10-15', '20:30:00', 4, 'varanda', 'Preferência por mesa perto das oliveiras decorativas.', 'Confirmada'),
('Carlos Eduardo', 'carlos.edu@email.com', '(11) 97555-6677', '2026-10-16', '21:00:00', 2, 'interno', 'Noite de namoro, se possível uma mesa mais reservada.', 'Pendente'),
('Beatriz Souza', 'beatriz.souza@email.com', '(11) 96111-2233', '2026-10-17', '19:30:00', 6, 'privativo', 'Jantar de família. Comemoração de aniversário.', 'Confirmada'),
('Juliana Ribeiro', 'juliana.rib@email.com', '(11) 94444-5555', '2026-10-15', '13:00:00', 2, 'interno', NULL, 'Cancelada');

INSERT INTO pratos (nome_prato, num_prato, foto_prato, categoria, preco, descricao) VALUES
("Bruschetta Al Pomodoro", 101, "https://www.italyabroad.com/resources/images/bruschette-al-pomodoro1.jpg", "Entradas", 38.00, "Pão de fermentação natural tostado, tomates frescos marinados no azeite, alho e manjericão."),
("Spaghetti Alla Carbonara", 201, "https://s2-receitas.glbimg.com/n18JLJvQ-hlXaYzgabkZQ1haU54=/0x0:1000x667/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_1f540e0b94d8437dbbc39d567a1dee68/internal_photos/bs/2020/M/0/fJpbMQTfutNTLQs72IjQ/carbonara.jpg", "Massas", 64.00, "Massa de grano duro, guanciale artesanal, gemas de ovos caipiras, queijo Pecorino Romano e pimenta preta."),
("Gnocchi Al Tartufo e Funghi", 202, "https://classic.exame.com/wp-content/uploads/2023/10/piccini-gnocchi-divulgacao.jpg", "Massas", 72.00, "Gnocchi de batata artesanal com molho cremoso de cogumelos frescos e azeite de trufas brancas."),
("Pizza Margherita Verace", 501, "https://rossopizza.com.br/salao/wp-content/uploads/2019/09/istock-181175167-900x600.jpg", "Pizzas", 58.00, "Molho de tomate San Marzano, fior di latte artesanal, manjericão fresco e azeite de oliva extra virgem."),
("Pizza Quattro Formaggi", 502, "https://www.vibrok.it/wp-content/uploads/2024/06/pizza-quattro-formaggi.jpg", "Pizzas", 68.00, "Base branca com fior di latte, queijo Gorgonzola Dolce, Parmigiano-Reggiano ralado e queijo Fontina italiano.");


INSERT INTO estoques (nome_ingredientes, qtd_ingrediente, categoria, unidade) VALUES
('Tomate Pelado Italiano', 80, 'Vegetais', 1),
('Queijo Parmigiano-Reggiano', 45, 'Laticínios', 1),
('Guanciale (Bochecha Suína)', 25, 'Carnes', 1),
('Farinha de Trigo Tipo 00', 100, 'Massas', 1),
('Manjericão Fresco Orgânico', 15, 'Tempero', 1),
('Vinho Chianti Classico DOCG', 40, 'Bebidas', 2);
