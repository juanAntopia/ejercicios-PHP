#Crear base de datos#
CREATE DATABASE IF NOT EXISTS altevoice;
USE altevoice;

#CREAR tabla REDES#
CREATE TABLE redes(
    id INT(11) AUTO_INCREMENT NOT NULL,
    red VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    CONSTRAINT pk_red PRIMARY KEY(id)
)Engine=InnoDb; 

#Tabla Usuarios#
CREATE TABLE usuarios(
    id INT(11) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha DATE,
    CONSTRAINT pk_usuario PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

#Tabla Peticiones#
CREATE TABLE peticiones(
    id INT(11) AUTO_INCREMENT NOT NULL,
    usuario_id INT(11) NOT NULL,
    texto VARCHAR(255) NOT NULL,
    CONSTRAINT pk_peticion PRIMARY KEY(id),
    CONSTRAINT fk_peticion_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) 
)ENGINE=InnoDb;
