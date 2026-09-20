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
    unidade INT NOT NULL
);