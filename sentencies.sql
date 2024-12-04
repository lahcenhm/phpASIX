/* Taula */
CREATE TABLE nba (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    equipo VARCHAR(100) NOT NULL,
    fecha_debut DATE NOT NULL,
    anillos_ganados INT DEFAULT 0
);

/* Inserts */
INSERT INTO nba (nombre, equipo, fecha_debut, anillos_ganados)
VALUES ('LeBron James', 'Los Angeles Lakers', '2003-10-29', 4);

INSERT INTO nba (nombre, equipo, fecha_debut, anillos_ganados)
VALUES ('Michael Jordan', 'Chicago Bulls', '1984-10-26', 6);

INSERT INTO nba (nombre, equipo, fecha_debut, anillos_ganados)
VALUES ('Kobe Bryant', 'Los Angeles Lakers', '1996-11-03', 5);

INSERT INTO nba (nombre, equipo, fecha_debut, anillos_ganados)
VALUES ('Stephen Curry', 'Golden State Warriors', '2009-10-28', 4);

INSERT INTO nba (nombre, equipo, fecha_debut, anillos_ganados)
VALUES ('Shaquille O\'Neal', 'Miami Heat', '1992-11-06', 4);
