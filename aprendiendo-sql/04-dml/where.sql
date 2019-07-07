#consulta con una condición#
SELECT * FROM usuarios WHERE email = 'jerry@hotmail.com';

/*
OPERADORES DE COMPARACIÓN
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
No es cmo       not like
*/

#Ejemplos#

#1.mostrar nombre y apellidos de todos los usuarios registrados en 2006#
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2006;

#2. mostrar nombre y apellidos de todos los usuarios que no se registraron en 2006#
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2006 OR ISNULL(fecha);

#3. mostrar el email cuyo apellido contenga la letra a y además que su contraseña sea 1234#
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND pass = 'prueba';

#sacar todos los registros de la tabla usuarios cuyo año sea PAR#
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);

#sacar todos los registros de de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayusculas#
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'usuario' FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) > 2010;

#LIMIT#

SELECT * FROM usuarios LIMIT 2;