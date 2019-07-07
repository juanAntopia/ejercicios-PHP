/*
    7. Mostrar el nombre y el salario de los vendedores con cargo de 
    'Ayudante de tienda'
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Vendedor', sueldo
FROM vendedores
WHERE cargo LIKE '%Ayudante%';