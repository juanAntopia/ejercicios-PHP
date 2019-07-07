/*
    15. Mostrar los clientes que más encargos han hecho y mostrar cuantos hicieron
*/

SELECT c.nombre AS 'Cliente', COUNT(e.id) 
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY e.cliente_id ORDER BY 2 DESC LIMIT 2;