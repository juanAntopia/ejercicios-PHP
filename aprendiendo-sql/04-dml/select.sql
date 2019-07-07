#mostrar todos los registros de una tabla#
SELECT nombre, apellidos FROM usuarios;

#mostrar todos los campos y registros#
SELECT * FROM usuarios;

#operadores aritméticos#
SELECT email, (4+7) AS 'OPERACION' FROM usuarios;
SELECT id, email, (7*7) AS 'OPERACION' FROM usuarios;

#operaciones dentro de una consulta#
SELECT id, email, (7*7) AS 'OPERACION' FROM usuarios ORDER BY(id) DESC; /*ORDER BY nos sirve para acomodar los datos de manera en que elijas*/

#funciones matematicas#


#funciones para textos#
SELECT UPPER(email) FROM usuarios;

SELECT LOWER(email) FROM usuarios;

SELECT UPPER(CONCAT(nombre, ' ' , apellidos)) AS 'CONVERSIÓN' FROM usuarios;

#funciones para fechas#
SELECT fecha, CURDATE() AS 'Fecha actual' FROM usuarios;

SELECT DATEDIFF(fecha, CURDATE()) AS 'Fecha actual' FROM usuarios;

SELECT DAYNAME(fecha) FROM usuarios;
SELECT DAYOFMONTH(fecha) FROM usuarios;
SELECT DAYOFWEEK(fecha) FROM usuarios;
SELECT DAYOFYEAR(fecha) FROM usuarios;

SELECT CURTIME() FROM usuarios;

//formatear fecha
SELECT DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;
