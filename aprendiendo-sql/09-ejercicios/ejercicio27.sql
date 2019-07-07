/*
    27. Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendo los que no hayan realizado cargos
*/

SELECT cl.nombre AS 'Cliente', COUNT(e.id) AS 'Encargos realizados'
FROM clientes cl
LEFT JOIN encargos e ON e.cliente_id = cl.id
GROUP BY 1;