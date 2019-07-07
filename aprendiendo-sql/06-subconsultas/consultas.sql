/*
SUBCONSULTAS:
-Son consultas que se ejecutan dentro de otras
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
-Jugando con las claves foráneas
*/

/*usuarios que tienen entradas*/
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

/*usuarios que no tienen entradas*/
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

#Sacar usuarios que tengan una entrada que su titulo hable de GTA#
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Usuario' FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

#Sacar todas las entradas de la categoria accion utilizando su nombre#
SELECT * FROM entradas WHERE categoria_id IN(SELECT id FROM categorias WHERE nombre = 'Acción');

#Mostrar las categorias con más de 3 entradas#
SELECT nombre FROM categorias WHERE 
	id IN
	(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

#Mostrar los usuarios que crearon una entrada un martes de cualquier semana#
SELECT * FROM usuarios WHERE id IN
	(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3);

#Mostrar el nombre del usuario que tenga más entradas#
SELECT  CONCAT(nombre,' ',apellidos) AS 'Usuario con más entradas' FROM usuarios WHERE id =
	(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

SELECT CONCAT(nombre, ' ', apellidos) AS 'Usuario con más entradas' 
FROM usuarios
WHERE id 
IN
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#Mostrar las categorías sin entradas#
SELECT * FROM categorias WHERE id NOT IN
	(SELECT categoria_id FROM entradas);