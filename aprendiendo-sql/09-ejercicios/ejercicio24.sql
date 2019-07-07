/*
    24. Listar los encargos con el nombre del coche, el nombre del cliente y
    el nombre de la ciudad, pero únicamente cuando sean de Monterrey
*/

SELECT e.id, co.modelo, cl.nombre, cl.ciudad
FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id WHERE ciudad = 'Monterrey';