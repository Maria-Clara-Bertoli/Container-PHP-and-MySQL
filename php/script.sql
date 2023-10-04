CREATE DATABASE sociedade;

USE sociedade;

CREATE TABLE pessoa (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20),
idade INT,
profissao VARCHAR(20)
);

SELECT * FROM pessoa;

INSERT INTO pessoa (nome, idade, profissao) VALUES (“Jessica”, 38, “Desenvolvedora”);

INSERT INTO pessoa (nome, idade, profissao) VALUES (“Bruno”, 27, “Analista de Testes”);

SELECT * FROM pessoa;

