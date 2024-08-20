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


INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Bajo un cielo Blanco', 'Elizabeth Kolbert', 'Ensayo', 'Elizabeth Kolbert reflexiona sobre el mundo que hemos creado y los cambios que hemos ocasionado en nuestro planeta. En su recorrido habla con especialistas biólogos, físicos, ingenieros de distintas partes del mundo que, con distintos proyectos, tratan de hacer un mundo más sostenible.', 
'img/BAJO-UN-CIELO-BANCO.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Sólo humo', 'Juan José Millas', 'Ensayo', 'Cuando Carlos cumple 18 años recibe la noticia de que su padre, a quien nunca conoció, ha muerto. Lo más sorpresivo es que recibe en herencia su casa y allí descubrirá un mundo que lo transformará por completo.', 
'img/solo-humo.jpg');