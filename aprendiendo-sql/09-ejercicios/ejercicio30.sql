/*
    30. Mostrar los datos del vendedor con más antiguedad en el concesionario
*/

SELECT nombre, fechaAlta FROM vendedores ORDER BY fechaAlta ASC limit 1;

/*
    30Plus. Obtener los coches con más unidades vendidas
*/

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
    (SELECT MAX(cantidad) FROM encargos)); 