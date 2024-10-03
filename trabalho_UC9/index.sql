CREATE DATABASE carros;

USE carros;

CREATE TABLE modelos_carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    imagem VARCHAR(255) NOT NULL
);

INSERT INTO modelos_carros (nome, marca, imagem) VALUES
('Bmw x7', 'BMW', 'img/bmw.jpg'),
('Toas', 'Volkswagen', 'img/taos.jpg'),
('Mustang', 'Ford', 'img/mustang-gt.jpg'),
('C-HR', 'Toyota', 'img/C-HR.jpg'),
('Model S', 'Tesla', 'IMG/Tesla.jpg');