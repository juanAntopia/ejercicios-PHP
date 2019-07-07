#CONSULTAS DE AGRUPAMIENTO nos permite agrupar filas y no se pueden utilizar condiciones WHERE porque controla columnas#
SELECT titulo FROM entradas;


SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id; 


#CONSULTAS DE AGRUPAMIENTO con condición#
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 2; 

/*
AVG      Nos permite sacar la media

COUNT    Contar el número de elementos

MAX      Valor Máximo del grupo

MIN      Valor mínimo del grupo

SUM      Nos permite sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;

SELECT MAX(id) AS 'Máximo ID', titulo FROM entradas;

SELECT MIN(id) AS 'Mínimo ID', titulo FROM entradas;

SELECT SUM(id) AS 'SUMA de ID´s', titulo FROM entradas;
