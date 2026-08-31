USE db_luce;

CREATE TABLE usuarios (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL, -- Aumentado para suportar hashes de senha (ex: bcrypt)
    telefone VARCHAR(100) NOT NULL,
    tipo ENUM('cliente', 'admin') DEFAULT 'cliente',
    cpf VARCHAR(11) UNIQUE NOT NULL -- CPF deve ser VARCHAR para preservar zeros à esquerda
);

CREATE TABLE reservas_mesas (
    id_reservas INT AUTO_INCREMENT PRIMARY KEY,
    status ENUM('disponivel', 'indisponivel') DEFAULT 'disponivel', -- Adicionado aspas e valor padrão
    cadeiras INT NOT NULL
);

CREATE TABLE pratos (
    id_pratos INT AUTO_INCREMENT PRIMARY KEY,
    nome_prato VARCHAR(100) NOT NULL,
    num_prato INT NOT NULL,
    foto_prato VARCHAR(1000),
    categoria VARCHAR(100)
);

CREATE TABLE estoques (
    id_ingrediente INT AUTO_INCREMENT PRIMARY KEY,
    nome_ingredientes VARCHAR(100) NOT NULL,
    num_ingrediente INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL -- DECIMAL é o tipo correto para valores monetários
);