DROP DATABASE IF EXISTS  db_reto2;
CREATE DATABASE IF NOT EXISTS db_reto2;

GRANT ALL PRIVILEGES ON db_reto2.* TO 'admin'@'localhost' IDENTIFIED BY '12345';
FLUSH PRIVILEGES;

USE db_reto2;

CREATE TABLE Usuarios(
    id INT NOT NULL AUTO_INCREMENT,
    tipousuarios INT(1) NOT NULL,
    nickname VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(40) NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellido1 VARCHAR(40) NOT NULL,
    apellido2 VARCHAR(40),
    email VARCHAR(64),
    descripcion VARCHAR(500),
    edad INTEGER(2),
    imagen VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE Preguntas(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    descripcion VARCHAR(500) NOT NULL,
    fecha DATE NOT NULL,
    tema VARCHAR(20),
    usuarioid INT NOT NULL,
    FOREIGN KEY (usuarioid) REFERENCES Usuarios(id) ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE Respuestas(
    id INT NOT NULL AUTO_INCREMENT,
    comentario VARCHAR(300) NOT NULL,
    fecha DATE NOT NULL,
    preguntaid INT NOT NULL,
    usuarioid INT NOT NULL,
    replica INT,
    FOREIGN KEY (preguntaid) REFERENCES Preguntas(id) ON DELETE CASCADE,
    FOREIGN KEY (usuarioid) REFERENCES Usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (replica) REFERENCES Respuestas(id) ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE Favoritos(
    id INT NOT NULL AUTO_INCREMENT, 
    preguntaid INT NOT NULL,
    usuarioid INT NOT NULL,
    FOREIGN KEY (preguntaid) REFERENCES Preguntas(id) ON DELETE CASCADE,
    FOREIGN KEY (usuarioid) REFERENCES Usuarios(id) ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE Likes(
    id INT NOT NULL AUTO_INCREMENT,
    usuarioid INT NOT NULL,
    respuestaid INT NOT NULL,
    FOREIGN KEY (usuarioid) REFERENCES Usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (respuestaid) REFERENCES Respuestas(id) ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE Alertas(
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(300) NOT NULL,
    respuestaid INT,
    likeid INT,
    usuarioid INT NOT NULL,
    FOREIGN KEY (respuestaid) REFERENCES Respuestas(id) ON DELETE CASCADE, 
    FOREIGN KEY (likeid) REFERENCES Likes(id) ON DELETE CASCADE,
    FOREIGN KEY (usuarioid) REFERENCES Usuarios(id) ON DELETE CASCADE,
    PRIMARY KEY (id)
);
