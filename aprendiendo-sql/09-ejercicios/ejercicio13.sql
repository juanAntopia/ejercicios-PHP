/*
    13. sacar la media de sueldos entre todos los vendedores por 
    grupo.
*/

SELECT CEIL(AVG(v.sueldo)) AS 'Media Salarial', g.nombre AS 'Grupo', g.ciudad as 'Ciudad'
FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;