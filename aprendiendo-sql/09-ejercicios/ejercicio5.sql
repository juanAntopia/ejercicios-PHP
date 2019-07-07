/*
    5. Mostrar todos los vendedores con su nombvre y el número de dias que llevan en el concesionario
*/

SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Vendedores', DATEDIFF(CURDATE(), fechaAlta) AS 'DÍAS' FROM vendedores; 