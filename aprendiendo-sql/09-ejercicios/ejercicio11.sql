/*
    11. Visualizar todos los cargos y el número de vendedores que hay en 
    cada cargo
*/

SELECT v.cargo, COUNT(v.id) AS 'Cargos' FROM vendedores v GROUP BY cargo ORDER BY COUNT(v.id) DESC;
