# Creación de la Base de Datos

CREATE DATABASE punto_comercial;
USE punto_comercial;

# Creación de las tablas

CREATE TABLE usuarios(
    username VARCHAR (16) NOT NULL,
    pass VARCHAR (50) NOT NULL,
    nombre VARCHAR (200) NOT NULL,
    PRIMARY KEY (username)
);

CREATE TABLE categorias(
    id_cat VARCHAR (60) NOT NULL,
    categoria VARCHAR (200) NOT NULL,
    PRIMARY KEY (id_cat)
);

CREATE TABLE label_img(
    id_label INT NOT NULL AUTO_INCREMENT,
    label VARCHAR (150),
    PRIMARY KEY (id_label)
);

CREATE TABLE img_cat(
    id_ima INT NOT NULL AUTO_INCREMENT,
    label INT NOT NULL,
    img VARCHAR (300) NOT NULL,
    categoria VARCHAR (60) NOT NULL,
    PRIMARY KEY (id_ima),
    CONSTRAINT img_cat_fk FOREIGN KEY (categoria) REFERENCES categorias(id_cat),
    CONSTRAINT img_lab_fk FOREIGN KEY (label) REFERENCES label_img(id_label)
);

CREATE TABLE img_sli(
    id_ima INT NOT NULL AUTO_INCREMENT,
    img VARCHAR(300) NOT NULL,
    PRIMARY KEY(id_ima)
);

# Inserción de datos

INSERT INTO img_sli VALUES 
(NULL, 'assets/img/slider/slide1.jpg'),
(NULL, 'assets/img/slider/slide2.jpg'),
(NULL, 'assets/img/slider/slide3.jpg');

INSERT INTO usuarios VALUES
('a', '0cc175b9c0f1b6a831c399e269772661', 'Administrador de Prueba');

INSERT INTO categorias VALUES 
('comercial', 'Comercial'),
('corporativo', 'Corporativo'),
('residencial', 'Residencial');

INSERT INTO label_img VALUES 
(NULL, 'Proyecto1'),
(NULL, 'Proyecto2'),
(NULL, 'Proyecto3'),
(NULL, 'Proyecto4'),
(NULL, 'Proyecto5'),
(NULL, 'Proyecto6'),
(NULL, 'Proyecto7'),
(NULL, 'Proyecto8'),
(NULL, 'Proyecto9');

INSERT INTO img_cat VALUES 
(NULL, 1, 'assets/img/image1.jpg', 'comercial'),
(NULL, 2, 'assets/img/image2.jpg', 'comercial'),
(NULL, 3, 'assets/img/image3.jpg', 'comercial'),
(NULL, 4, 'assets/img/image4.jpg', 'corporativo'),
(NULL, 5, 'assets/img/image5.jpg', 'corporativo'),
(NULL, 6, 'assets/img/image6.jpg', 'corporativo'),
(NULL, 7, 'assets/img/image7.jpg', 'residencial'),
(NULL, 8, 'assets/img/image8.jpg', 'residencial'),
(NULL, 9, 'assets/img/image9.jpg', 'residencial');