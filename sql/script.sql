use db_luce;

CREATE TABLE usuarios {
id_user  INT PRIMARY KEY,
nome_completo VARCHAR(100),
email VARCHAR(100),
senha NUMBER,
cpf NUMBER
}

CREATE TABLE reservas_mesas {
id_reservas INT PRIMARY KEY,
status ENUM(disponivel,indisponivel),
cadeiras Number
}

CREATE TABLE pratos {
id_pratos INT PRIMARY KEY,
nome_nome VARCHAR(100),
num_prato NUMBER,
status Enum (disponivel,indisponivel),
foto_prato Varchar(1000)
}

CREATE TABLE estoques { 
id_estoques INT PRIMARY KEY,
nome_ingredientes VARCHAR(100),
num_ingrediente NUMBER
}
