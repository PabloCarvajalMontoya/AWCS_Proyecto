CREATE DATABASE RecomendadorWeb;
USE RecomendadorWeb;

-- Tabla para almacenar los libros
CREATE TABLE Libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_libro VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    genero VARCHAR(255) NOT NULL,
    sinopsis TEXT NOT NULL,
    imagen VARCHAR(255) NOT NULL
);

CREATE TABLE Sugerencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_libro VARCHAR(255) NOT NULL,
    autor_libro VARCHAR(255) NOT NULL,
    descripcion_libro TEXT NOT NULL,
    genero_libro VARCHAR(50) NOT NULL,
    anio_publicacion INT NOT NULL,
    idioma_libro VARCHAR(50) NOT NULL,
    editorial_libro VARCHAR(255) NOT NULL,
    recomendacion TEXT NOT NULL,
    nombre_usuario VARCHAR(255),
    email_usuario VARCHAR(255)
);

CREATE TABLE provincias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE bibliotecas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    provincia_id INT,
    FOREIGN KEY (provincia_id) REFERENCES provincias(id)
);


INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Bajo un cielo Blanco', 'Elizabeth Kolbert', 'Ensayo', 'Elizabeth Kolbert reflexiona sobre el mundo que hemos creado y los cambios que hemos ocasionado en nuestro planeta. En su recorrido habla con especialistas biólogos, físicos, ingenieros de distintas partes del mundo que, con distintos proyectos, tratan de hacer un mundo más sostenible.', 
'img/BAJO-UN-CIELO-BANCO.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Sólo humo', 'Juan José Millas', 'Ensayo', 'Cuando Carlos cumple 18 años recibe la noticia de que su padre, a quien nunca conoció, ha muerto. Lo más sorpresivo es que recibe en herencia su casa y allí descubrirá un mundo que lo transformará por completo.', 
'img/solo-humo.jpg');

INSERT INTO provincias (nombre) VALUES
('San Jose'),
('Alajuela'),
('Cartago'),
('Heredia'),
('Guanacaste'),
('Puntarenas'),
('Limón');

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería Alma Mater', '150 metros al Este del Concejo Municipal de, P.º de los Estudiantes, San José, Soledad', 1),
('Librería Vida', 'Calle 18 San José San Sebastian', 1);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería La Madrileña', 'Av. Central Juan López del Corral, Provincia de Alajuela', 2),
('Librería La Madrileña', '175m. Norte de la esquina Nor-Oeste del Mercado, Provincia de Alajuela', 2);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería Cartago', '150m sur de la estación de bomberos, Cartago centro, Provincia de Cartago', 3),
('Librería EBC', 'Frente al parqueo del Colegio Universitario de Cartago, Diag. 8, Provincia de Cartago, Cartago', 3);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería El Lector', '25 metros norte del bar 00, Heredia', 4),
('Librería La Central', '50 M Sur Casino Fiesta, Heredia', 4);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería Avancari', '50 m sur del Cuerpo de Bomberos, Provincia de Guanacaste, Las Juntas', 5),
('Librería La Mansión', 'Costado este de la plaza de deportes la Mansión, Guanacaste', 5);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería Artisan', '125 metros oeste de la farmacia don Gerardo Puntarenas, Provincia de Puntarenas Centro', 6),
('Librería Alemar', 'Contiguo a Oficinas de ICE, C. de los Bomberos, Provincia de Puntarenas, Paquera', 6);

INSERT INTO bibliotecas (nombre, direccion, provincia_id) VALUES
('Librería Papel y Lápiz', 'Limón Centro, avenida 5 entre calle 6 y 7, Contiguo al bar Kun Fú', 7),
('Librería Arcoiris', 'Limón Centro, calle 6, continuo al bar don Juan', 7);