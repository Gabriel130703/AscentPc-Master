CREATE DATABASE IF NOT EXISTS crudSenac;
USE crudSenac;

CREATE TABLE IF NOT EXISTS usuarios (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  nome_completo TEXT,
  email TEXT UNIQUE,
  senha TEXT,
);
INSERT INTO usuarios
(nome_completo, email, senha)
VALUES
('ADM','admin@gmail.com', '123');

INSERT INTO usuarios
(nome_completo, email, senha)
VALUES
('Jeremias','jeremias@gmail.com', '123');