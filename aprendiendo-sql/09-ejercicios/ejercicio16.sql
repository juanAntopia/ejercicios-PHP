/*
    16. Obtener el listado de clientes atendidos por el vendedor 'Junior Salgado'
*/

SELECT * FROM clientes WHERE vendedor_id IN
    (SELECT id FROM vendedores WHERE nombre = 'Pedro' AND apellidos = 'Jimenez Pérez');