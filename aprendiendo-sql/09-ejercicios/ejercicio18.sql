/*
    18. Listar los clientes que han hecho algún encargo del coche 'Carrera GT'
*/

SELECT * FROM clientes cl 
WHERE cl.id IN
    (SELECT e.cliente_id FROM encargos e WHERE coche_id IN
        (SELECT co.id FROM coches co WHERE co.modelo LIKE '%Mercedes Ranch%')
    );