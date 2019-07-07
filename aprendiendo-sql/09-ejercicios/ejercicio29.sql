/*
    29. Crear una vista llamada vendedoresA que incluirá todos los vendedores
    del grupo que se llame "Vendedores A"
*/

CREATE VIEW v_vendedoresA
AS
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre = "Vendedores A");