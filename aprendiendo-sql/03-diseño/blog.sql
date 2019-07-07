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

/*prueba*/
CREATE TABLE entradas(
	id INT(255) AUTO_INCREMENT NOT NULL,
	usuario_id INT(255) NOT NULL,
	categoria_id INT(255) NOT NULL,
	titulo VARCHAR(255) NOT NULL,
	descripcion MEDIUMTEXT NOT NULL,
	fecha DATE NOT NULL,
	CONSTRAINT pk_entradas PRIMARY KEY(id),
	CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
	CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

CREATE TABLE categorias(
	id int(255) auto_increment not null,
	nombre varchar(100) not null,
	constraint pk_categorias primary key(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
	id int(255) auto_increment not null,
	usuario_id int(255) not null,
	categoria_id int(255) not null,
	titulo varchar(255) not null,
	descripcion mediumtext not null, 
	fecha date not null,
	constraint pk_entradas primary key(id),
	constraint fk_entrada_usuario foreign key(usuario_id) references usuarios(id),
	constraint fk_entrada_categoria foreign key(categoria_id) references categorias(id) on delete cascade/*permite borrar el registro que esté relacionado*/
)ENGINE=InnoDb;


/*ENGINE=MyISAM;*/
el engine nos sirve para la forma en que se almacenan datos en la db para mejorar la velocidad, de los 
comandos /*insert*/ y /*update*/ y mantener la integridad referencial de la relación de tablas en la bd
hay dos tipos InnoDb y MyISAM
