/*
CONSULTA MULTITABLA:
son conultas que sirven para consultar varias tablas en una sentencia
*/

#mostrar las entradas con el nombre del usuario y nombre de la categoria#
SELECT e.id, e.titulo, CONCAT(u.nombre, ' ', u.apellidos) AS 'Usuario', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#Inner Join de este ejemplo#
SELECT e.id, e.titulo, CONCAT(u.nombre, ' ', u.apellidos) AS 'Usuario', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

#Mostrar el nombre de las categorias y a lado cuantas entradas tienen#
SELECT c.nombre, COUNT(e.id) AS 'Número de entradas'
FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) AS 'Número de entradas'
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

#Mostrar el email de los usuarios y a lado cuantas entradas tiene#
SELECT u.email, COUNT(titulo)
FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

