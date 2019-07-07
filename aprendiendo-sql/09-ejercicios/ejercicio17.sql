/*
    17. Obtener listado con los encargos realizados por el cliente 
    'Construcciones Diaz Inc'
*/

SELECT e.id as 'N° de encargo', e.cantidad, c.nombre, co.modelo, e.fecha 
FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
    (SELECT c.id FROM clientes c WHERE nombre = 'Construcciones Diaz Inc');