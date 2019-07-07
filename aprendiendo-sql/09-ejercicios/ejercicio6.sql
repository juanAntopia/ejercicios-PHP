/*
    Visualizar el nombre y los apellidos de los vendedores en uhna misma columna,
    su fecha de resgitro y el día de la semana en la que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Vendedor', fechaAlta, DAYNAME(fechaAlta)
FROM vendedores;