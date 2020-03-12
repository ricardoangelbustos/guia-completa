Ejercicio 1: Creando una tabla

CREATE TABLE bandas(
  nombre TEXT
);

Ejercicio 2: Ahora con ID

CREATE TABLE bandas(
  id INTEGER PRIMARY KEY,
  nombre TEXT NOT NULL
);

Ejercicio 3: Modificando la tabla

ALTER TABLE bandas
  ADD COLUMN premios INTEGER
;

Ejercicio 4: A borrar, a borrar...

DROP TABLE bandas;

Ejercicio 5: Más Bandas

INSERT into bandas (nombre, premios)
values ("Almendra", 28
);

Ejercicio 6: Aún más bandas...

INSERT into bandas (nombre, premios) values
("Pescado Rabioso", null),
("Sui Generis", 42),
("Seru Giran", 58);

Ejercicio 7: Entran los artistas

INSERT into artistas (nombre, apellido, fecha_de_nacimiento) values
("Luis Alberto", "Spinetta", "1950-01-23"),
("Charly", "Garcia", "1951-10-23"),
("Pedro", "Aznar", "1959-07-23"),
("David", "Lebon", "1952-10-05");

Ejercicio 8: Y las relaciones...

INSERT into banda_artista (id_banda, id_artista) values
(3,2),
(4,2),
(4,3),
(1,1),
(2,1);

Ejercicio 9: Limpiame la tabla

DELETE FROM bandas;

Ejercicio 10:  No te olvides de poner el where...

DELETE FROM bandas
WHERE premios<30;
 
Ejercicio 11:  Dos condiciones

DELETE FROM bandas
WHERE premios<30 OR premios IS NULL;
 
Ejercicio 12:  Poniendo Apodos

UPDATE artistas
SET apodo="El Flaco"
WHERE id=1;

UPDATE artistas
SET apodo="Fito"
WHERE id=5;
 
Ejercicio 13:  Sin apodo

UPDATE artistas
SET apodo="Sin apodo"
WHERE apodo IS null;
 
Ejercicio 14:  Partiendo del apodo

UPDATE artistas
SET nombre="Norberto Anibal", apellido="Napolitano", fecha_de_nacimiento="1950-03-10"
WHERE apodo="Pappo";
 
Fin de archivo