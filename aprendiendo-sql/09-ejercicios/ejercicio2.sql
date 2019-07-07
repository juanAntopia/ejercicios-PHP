/*
2.Modificar la comisión de los vendedores y ponerla al 0.5% cuando ganas más de 30000
*/

UPDATE VENDEDORES SET comision = 0.5 WHERE sueldo >= 30000;
