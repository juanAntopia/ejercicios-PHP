/*
    10. Visualizar los apellidos de los vendedores, su fecha y su número de grupo 
    ordenado por fecha descendente, mostrar los 4 últimos
*/

SELECT v.apellidos, v.fechaAlta, v.grupo_id
FROM vendedores v
ORDER BY fechaAlta DESC limit 4;