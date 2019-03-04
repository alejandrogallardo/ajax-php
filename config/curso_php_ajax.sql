CREATE DATABASE IF NOT EXISTS `curso_php_ajax` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Tabla Usuarios 1
--
CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nombre` VARCHAR(30) NOT NULL,
`edad` int(3) NOT NULL,
`pais` VARCHAR(10),  
`correo` VARCHAR(150) NOT NULL
);

INSERT INTO usuarios(nombre, edad, pais, correo) 
VALUES('Juan', '30', 'Guatemala', 'juan@juan.com'),
('Roberto', '25', 'Francia', 'beto@beto.com'),
('Francisco', '85', 'Colombia', 'pancho@pancho.com'),
('Diego', '62', 'Mexico', 'diego@diego.com'),
('Sergio', '32', 'Brasil', 'chejo@chejo.com');