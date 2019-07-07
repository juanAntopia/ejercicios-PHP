#crear tablas#
#Base de datos#
CREATE DATABASE IF NOT EXISTS blog;
USE blog;

#tabla usuario#
CREATE TABLE usuarios(
	id INT(10) AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	fecha DATE NOT NULL,
	CONSTRAINT pk_usuarios PRIMARY KEY (id),
	CONSTRAINT uq_email UNIQUE(email)
)ENGINE = InnoDB;

#tabla categorias#
CREATE TABLE categorias(
	id INT(255) AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE = InnoDB;

#tabla entradas#
CREATE TABLE entradas(
	id INT(255) AUTO_INCREMENT NOT NULL,
	usuario_id INT(255) NOT NULL,
	categoria_id INT(255) NOT NULL,
	titulo VARCHAR(255) NOT NULL,
	descripcion MEDIUMTEXT NOT NULL,
	fecha DATE,
	CONSTRAINT pk_entradas PRIMARY KEY(id),
	CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
	CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE NO ACTION
)ENGINE = InnoDB;