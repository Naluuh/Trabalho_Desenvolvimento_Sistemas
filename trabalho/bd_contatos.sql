CREATE DATABASE IF NOT EXISTS cadastro_contatos DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cadastro_contatos;


CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    rg VARCHAR(20) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    endereco TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);



