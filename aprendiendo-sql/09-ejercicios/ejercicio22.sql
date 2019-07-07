/*
    22. Mostrar listado de clientes (número de cliente y el nombre)
    mostrar también el número de vendedor y su nombre
*/

SELECT c.id, c.nombre AS 'Cliente', v.id, CONCAT(v.nombre, ' ', v.apellidos) AS ' Vendedor'
FROM clientes c 
INNER JOIN vendedores v ON v.id = c.vendedor_id;