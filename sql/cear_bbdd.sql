CREATE DATABASE proyectos_daw_ddbb;

CREATE TABLE minijuegos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(150) NOT NULL,
    urlMinijuego varchar(150) NOT NULL,
    imagenMinijuego varchar(150) NOT NULL,
    descripcion varchar(250) NOT NULL
);