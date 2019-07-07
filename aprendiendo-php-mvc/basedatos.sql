CREATE DATABASE IF NOT EXISTS notas_master ;
USE notas_master;

CREATE TABLE usuarios(
	id int(255) auto_increment not null,
	nombre varchar(100) not null,
	apellidos varchar(100) not null,
	email varchar(255) not null,
	pass varchar(255) not null,
	fecha date not null,
	constraint pk_usuarios primary key(id),
	constraint uq_usuarios unique(email)
)ENGINE=InnoDb;


CREATE TABLE notas(
	id INT(255) AUTO_INCREMENT NOT NULL,
	usuario_id INT(255) NOT NULL,
	titulo VARCHAR(255) NOT NULL,
	descripcion MEDIUMTEXT NOT NULL,
	fecha DATE NOT NULL,
	CONSTRAINT pk_notas PRIMARY KEY(id),
	CONSTRAINT fk_nota_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;