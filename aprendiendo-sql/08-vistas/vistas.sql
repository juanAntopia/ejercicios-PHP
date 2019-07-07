/*Vistas:
    Las podemos definir como una consulta almacenada en la 
    base de datos que se utiliza como una tabla virtual que no almacena 
    datos sino que utiliza asociaciones y los datos de las tablas originales
    de las tablas, de forma que siempre está actualizada
*/

#Crear la vista#
#mostrar las entradas con el nombre del usuario y nombre de la categoria#
CREATE VIEW v_entradasConNombres
AS
SELECT e.id, e.titulo, CONCAT(u.nombre, ' ', u.apellidos) AS 'Usuario', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

/*borrar vista*/
DROP VIEW v_entradasconnombres;