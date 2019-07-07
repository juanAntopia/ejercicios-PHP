/*
    8.Visualizar todos los coches en cuyo marca exista la letra "A"
    y cuyo modelo empiece por "F"
*/

SELECT modelo, marca FROM coches WHERE modelo LIKE '%a%' OR marca LIKE 'F%';