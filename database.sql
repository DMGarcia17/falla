0# Creaci&oacute;n de la Base de Datos

CREATE DATABASE punto_comercial;
USE punto_comercial;

# Creaci&oacute;n de las tablas

CREATE TABLE usuarios(
    username VARCHAR (16) NOT NULL,
    pass VARCHAR (50) NOT NULL,
    nombre VARCHAR (200) NOT NULL,
    PRIMARY KEY (username)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;


CREATE TABLE categorias(
    id_cat VARCHAR (60) NOT NULL,
    categoria VARCHAR (200) NOT NULL,
    PRIMARY KEY (id_cat)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;


CREATE INDEX cate_img 
ON categorias (id_cat);

# intento 1 de galeria

/**CREATE TABLE label_img(
    id_label INT NOT NULL AUTO_INCREMENT,
    label VARCHAR (150),
    PRIMARY KEY (id_label)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;
  
CREATE INDEX lab_img
ON label_img (id_label);


CREATE TABLE img_cat(
    id_ima INT NOT NULL AUTO_INCREMENT,
    label INT NOT NULL,
    img VARCHAR (300) NOT NULL,
    categoria VARCHAR (60) NOT NULL,
    PRIMARY KEY (id_ima),
    CONSTRAINT img_cat_fk FOREIGN KEY (categoria) REFERENCES categorias(id_cat),
    CONSTRAINT img_lab_fk FOREIGN KEY (label) REFERENCES label_img(id_label)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;*/


# intento 2 de galeria

CREATE TABLE proyectos(
    id_proyecto INT NOT NULL AUTO_INCREMENT,
    p_rank INT NOT NULL,
    n_proy VARCHAR(300) NOT NULL,
    img_proy VARCHAR(900) NOT NULL,
    categoria VARCHAR(200) NOT NULL,
    folder VARCHAR (300) NOT NULL,
    PRIMARY KEY (id_proyecto),
    CONSTRAINT fk_categorias FOREIGN KEY (categoria) REFERENCES categorias (id_cat) 
    ON DELETE CASCADE ON UPDATE CASCADE
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;
  
CREATE INDEX img_p 
ON proyectos(id_proyecto);

CREATE TABLE img_proy(
    id_imgproy INT NOT NULL AUTO_INCREMENT,
    img VARCHAR(800) NOT NULL,
    proyectos INT NOT NULL,
    PRIMARY KEY (id_imgproy),
    CONSTRAINT fk_proy FOREIGN KEY (proyectos) REFERENCES proyectos(id_proyecto)
    ON DELETE CASCADE ON UPDATE CASCADE
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;


# imagenes de la galeria

CREATE TABLE img_sli(
    id_ima INT NOT NULL AUTO_INCREMENT,
    img VARCHAR(300) NOT NULL,
    PRIMARY KEY(id_ima)
)
  ENGINE = INNODB
  DEFAULT CHARSET = utf8;


# Inserci&oacute;n de datos

INSERT INTO img_sli VALUES 
(NULL, 'assets/img/slider/slide1.jpg'),
(NULL, 'assets/img/slider/slide2.jpg'),
(NULL, 'assets/img/slider/slide3.jpg');

INSERT INTO usuarios VALUES
('punto', '0cc175b9c0f1b6a831c399e269772661', 'Administrador de Prueba');

INSERT INTO categorias VALUES 
('remodelacion', 'Remodelaci&oacute;n'),
('diseno', 'Dise&ntilde;o'),
('kioscos', 'Kioscos');

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
(NULL, 1, 'assets/img/image1.jpg', 'remodelacion'),
(NULL, 2, 'assets/img/image2.jpg', 'remodelacion'),
(NULL, 3, 'assets/img/image3.jpg', 'remodelacion'),
(NULL, 4, 'assets/img/image4.jpg', 'diseno'),
(NULL, 5, 'assets/img/image5.jpg', 'diseno'),
(NULL, 6, 'assets/img/image6.jpg', 'diseno'),
(NULL, 7, 'assets/img/image7.jpg', 'kioscos'),
(NULL, 8, 'assets/img/image8.jpg', 'kioscos'),
(NULL, 9, 'assets/img/image9.jpg', 'kioscos');

# datos de prueba

INSERT INTO proyectos VALUES 
(NULL, 1, 'proyecto1', 'assets/img/proyecto1/portada.jpg', 'remodelacion', 'assets/img/proyecto1/'),
(NULL, 2, 'proyecto2', 'assets/img/proyecto2/portada.jpg', 'diseno', 'assets/img/proyecto2/'),
(NULL, 3, 'proyecto3', 'assets/img/proyecto3/portada.jpg', 'kioscos', 'assets/img/proyecto3/');

INSERT INTO img_proy VALUES (NULL, 'assets/img/proyecto1/img1.jpg', 1),
(NULL, 'assets/img/proyecto1/img2.jpg', 1),
(NULL, 'assets/img/proyecto1/img3.jpg', 1);

INSERT INTO img_proy VALUES (NULL, 'assets/img/proyecto2/img1.jpg', 2),
(NULL, 'assets/img/proyecto2/img2.jpg', 2),
(NULL, 'assets/img/proyecto2/img3.jpg', 2);

INSERT INTO img_proy VALUES (NULL, 'assets/img/proyecto3/img1.jpg', 3),
(NULL, 'assets/img/proyecto3/img2.jpg', 3),
(NULL, 'assets/img/proyecto3/img3.jpg', 3);