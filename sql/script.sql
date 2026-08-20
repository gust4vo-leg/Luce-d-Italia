use db_luce;

CREATE TABLE usuarios {
id_user primary key,
nome_completo Varchar(100),
senha Number,
cpf Number
}

CREATE TABLE reservas {
id_reservas primary key,
status Enum (disponivel,indisponivel),
cadeiras Number
}

CREATE TABLE pratos {
id_pratos primary key,
num_prato Number,
status Enum (disponivel,indisponivel),
foto_prato Varchar(1000)
}

CREATE TABLE estoques { 
id_estoques primary key,
num_ingrediente Number,
status Enum(disponivel,indisponivel)
}
