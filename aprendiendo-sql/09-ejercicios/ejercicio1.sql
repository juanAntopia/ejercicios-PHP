/*
    1.Diseñar la base de datos de un concesionario
*/
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE COCHES(
    id INT(10) auto_increment NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    precio INT(20) NOT NULL,
    stock INT(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE GRUPOS(
    id INT(10) auto_increment NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL, 
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE VENDEDORES(
    id INT(10) auto_increment NOT NULL,
    grupo_id INT(10) NOT NULL,
    jefe INT(10),
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100),
    cargo VARCHAR(100),
    fechaAlta DATE NOT NULL,
    sueldo FLOAT(20,2),
    comision FLOAT(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES GRUPOS(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES VENDEDORES(id)
)ENGINE=InnoDb;

CREATE TABLE CLIENTES(
    id INT(10) auto_increment NOT NULL,
    vendedor_id INT(10),
    nombre VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255),
    gastado FLOAT(50,2),
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES VENDEDORES(id)
)ENGINE = InnoDb;

CREATE TABLE ENCARGOS(
    id INT(10) auto_increment NOT NULL,
    cliente_id INT(10) NOT NULL,
    coche_id INT(10) NOT NULL,
    cantidad INT(100),
    fecha DATE,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES CLIENTES(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES COCHES(id)
)ENGINE = InnoDb;


#Rellenar la base de datos con información#
#Coches#
INSERT INTO COCHES VALUES(null, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO COCHES VALUES(null, 'Seat Panda', 'SEAT', 500000, 13);
INSERT INTO COCHES VALUES(null, 'Mercedes Ranch ', 'Mercedes', 1200000, 13);
INSERT INTO COCHES VALUES(null, 'Ferrari Maxz', 'Ferrari', 2500000, 13);
INSERT INTO COCHES VALUES(null, 'Lamborghini Aventador', 'Lamborghini', 3202000, 13);
INSERT INTO COCHES VALUES(null, 'Carrera GT', 'Porshe', 264578, 13);

#Grupos#
INSERT INTO GRUPOS VALUES(null, 'Vendedores A', 'Madrid');
INSERT INTO GRUPOS VALUES(null, 'Vendedores B', 'Monterrey');
INSERT INTO GRUPOS VALUES(null, 'Directores mecanicos', 'Tijuana');
INSERT INTO GRUPOS VALUES(null, 'Vendedores A', 'Murcia');
INSERT INTO GRUPOS VALUES(null, 'Vendedores B', 'Valladolid');
INSERT INTO GRUPOS VALUES(null, 'Vendedores C', 'New York');
INSERT INTO GRUPOS VALUES(null, 'Vendedores A', 'Tampico');
INSERT INTO GRUPOS VALUES(null, 'Vendedores B', 'Tamaulipas');
INSERT INTO GRUPOS VALUES(null, 'Vendedores B', 'Munguia');
INSERT INTO GRUPOS VALUES(null, 'Vendedores A', 'Torreon');

#Vendedores#
INSERT INTO VENDEDORES VALUES(null, 1, null, 'Pedro', 'Jimenez Pérez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO VENDEDORES VALUES(null, 1, 1, 'Rolando', 'Castillo Prieto', 'Ayudante en tienda', CURDATE(), 23000, 2);
INSERT INTO VENDEDORES VALUES(null, 2, null, 'Nelson', 'Mandela López', 'Responsable de tienda', CURDATE(), 38000, 6);
INSERT INTO VENDEDORES VALUES(null, 2, 3, 'Jerry', 'Cantú Reyes', 'Ayudante en tienda', CURDATE(), 12000, 7);
INSERT INTO VENDEDORES VALUES(null, 3, null, 'Junior', 'Salgado Rodríguez', 'Mecánico Jefe', CURDATE(), 35000, 6);
INSERT INTO VENDEDORES VALUES(null, 3, null, 'Ramón', 'Pérez de león', 'Vendedor de recambios', CURDATE(), 25000, 4);
INSERT INTO VENDEDORES VALUES(null, 4, null, 'Tom', 'Castillo Ordaz', 'Vendedor experto', CURDATE(), 18000, 3);
INSERT INTO VENDEDORES VALUES(null, 5, null, 'Oliver', 'Karren Flores', 'Ejecutivo de cuentas', CURDATE(), 16500, 2);
INSERT INTO VENDEDORES VALUES(null, 6, 8, 'Marcos', 'Holguín Sánchez', 'Ayudante en la tienda', CURDATE(), 10000, 10);

#Clientes#
INSERT INTO CLIENTES VALUES(null, 1, 'Construcciones Diaz Inc', 'Monterrey', 200000);
INSERT INTO CLIENTES VALUES(null, 1, 'Frutería Antonia Inc', 'Torreón', 240000);
INSERT INTO CLIENTES VALUES(null, 1, 'Imprenta Martínez Inc', 'Barcelona', 210000);
INSERT INTO CLIENTES VALUES(null, 1, 'Jesús colchones Inc', 'El Prat', 120000);
INSERT INTO CLIENTES VALUES(null, 1, 'Bar pepe Inc', 'Valencia', 155000);
INSERT INTO CLIENTES VALUES(null, 1, 'Tienda PC Inc', 'Murcia', 310000);

#Encargos#
INSERT INTO ENCARGOS VALUES(null, 1, 1, 2, CURDATE());
INSERT INTO ENCARGOS VALUES(null, 2, 2, 5, CURDATE());
INSERT INTO ENCARGOS VALUES(null, 3, 3, 3, CURDATE());
INSERT INTO ENCARGOS VALUES(null, 4, 3, 2, CURDATE());
INSERT INTO ENCARGOS VALUES(null, 5, 5, 1, CURDATE());
INSERT INTO ENCARGOS VALUES(null, 6, 1, 1, CURDATE());