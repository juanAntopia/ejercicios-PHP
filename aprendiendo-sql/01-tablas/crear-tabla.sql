/*
crear tabla

tipos de datos

int(n° de cifras) entero
interger(n° de cifras) entero
varchar(n° de caracteres) string/alfanumerico (maximo 255)
char (n° de caracteres) string/alfanumerico
float(n° de caracteres) decimal/coma flotante
date, time, timestamp

//string más grandes
TEXT 65535 de caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

//int más grandes
MEDIUMINT
BIGINT
*/

CREATE TABLE usuarios (
	id int(11) auto_increment not null,
	nombre varchar(100) not null,
	apellidos varchar(100) default 'Hernández',
	email varchar(100) not null,
	pass varchar(255) not null, 
	CONSTRAINT pk_usuarios PRIMARY KEY(id)
);