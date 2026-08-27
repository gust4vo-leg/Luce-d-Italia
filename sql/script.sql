use db_luce;

CREATE TABLE usuarios {
id_user AUTO_INCREMENT INT PRIMARY KEY,
nome_completo VARCHAR(100),
email VARCHAR(100),
senha VARCHAR(100),
cpf NUMBER
}

CREATE TABLE reservas_mesas {
id_reservas AUTO_INCREMENT INT PRIMARY KEY,
status ENUM(disponivel,indisponivel),
cadeiras Number
}

CREATE TABLE pratos {
id_pratos AUTO_INCREMENT INT PRIMARY KEY,
nome_nome VARCHAR(100),
num_prato NUMBER,
status Enum (disponivel,indisponivel),
foto_prato Varchar(1000),
categoria VARCHAR(100)
}

CREATE TABLE estoques { 
id_estoques AUTO_INCREMENT INT PRIMARY KEY,
nome_ingredientes VARCHAR(100),
num_ingrediente NUMBER
}
