/*Renombrar tabla*/
ALTER TABLE usuarios RENAME TO usuarios_renom;

/*cambiar nombre de columna*/
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(11) null;

/*modificar colmna sin cambiar nombre*/
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

/*Añadir una nueva columna*/
ALTER TABLE usuarios_renom ADD website varchar(100) null;

/*Añadir restricción a columna*/
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

/*borrar una columna*/
ALTER TABLE usuarios_renom DROP website;