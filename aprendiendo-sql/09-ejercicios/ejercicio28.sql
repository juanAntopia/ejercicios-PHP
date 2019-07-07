
/*
    28. Mostrar todos los vendedores y el número de clientes se deben mostrar
    tengan  o no clientes.
*/

SELECT v.nombre, COUNT(cl.id) 
FROM vendedores v
LEFT JOIN clientes cl ON cl.vendedor_id = v.id
GROUP BY v.id;