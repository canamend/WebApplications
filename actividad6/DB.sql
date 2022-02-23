CREATE DATABASE votaciones;

USE votaciones;

CREATE TABLE partidos(
    id_partido INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    partido VARCHAR(50) NOT NULL,
    imagen LONGBLOB,
    descripcion VARCHAR(200)
);

CREATE TABLE ciudadanos(
    INE VARCHAR(10) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE
);

use votaciones;
CREATE TABLE votos(
    id_voto INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cd VARCHAR(10) NOT NULL,
    id_pt INT(5) NOT NULL,
    FOREIGN KEY(id_cd) REFERENCES ciudadanos(INE),
    FOREIGN KEY(id_pt) REFERENCES partidos(id_partido)
);

/*Datos de prueba*/

INSERT INTO ciudadanos(INE,nombre,fecha_nacimiento) VALUES(1,'Jonathan De La Cruz Huerta','1999/02/01');
INSERT INTO ciudadanos(INE,nombre,fecha_nacimiento) VALUES(2,'Angel Hernandez Ramos','1999/06/15');
INSERT INTO ciudadanos(INE,nombre,fecha_nacimiento) VALUES(3,'Isaac Canalizo Mendoza','1998/08/25');
INSERT INTO ciudadanos(INE,nombre,fecha_nacimiento) VALUES(4,'Jorge Silvano Pérez Hernández','1998/01/10');

INSERT INTO partidos(partido,imagen,descripcion) VALUES('Nueva_Alianza','assets/partido1.png','En Nueva Alianza Puebla somos un Partido Politico, moderno para y por el pueblo.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('Movimiento_Ciudadano','assets/partido2.png','Movimiento Ciudadano es un partido político mexicano de centroizquierda.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('PRI','assets/partido3.png','El Partido Revolucionario Institucional es un partido político mexicano de centroderecha.​​');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('PRD','assets/partido4.png','El Partido de la Revolución Democrática es un partido político mexicano, fundado el 5 de mayo de 1989, con una ideología política de izquierda.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('PAN','assets/partido5.png','El Partido Acción Nacional es un partido político mexicano de derecha, cristiano, de doctrina política conservadora.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('Verde','assets/partido6.png','El Partido Verde Ecologista de México, también conocido simplemente como Verde, es un partido político mexicano.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('PES','assets/partido7.png','El Partido Encuentro Solidario fue un partido político mexicano afín a las ideas de ideología de derecha y de la derecha cristiana existente entre 2020 y 2021.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('Morena','assets/partido8.png','El Movimiento Regeneración Nacional (Morena) nació del anhelo del pueblo de México por vivir en una auténtica democracia.');
INSERT INTO partidos(partido,imagen,descripcion) VALUES('NULL','assets/calcelar.png','Voto anulado');
