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

CREATE TABLE usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  name varchar(50) NOT NULL
);

-- admin@email.com 123456
INSERT INTO usuario (email, password, name) VALUES
('admin@email.com', '$2y$10$d6POOPxvzXHrTHBT./UyAe.bZFH90l1ZWDpfZZ7i7mCZEY5DejzNq', 'Admin');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Bajo un cielo Blanco', 'Elizabeth Kolbert', 'Ensayo', 'Elizabeth Kolbert reflexiona sobre el mundo que hemos creado y los cambios que hemos ocasionado en nuestro planeta. En su recorrido habla con especialistas biólogos, físicos, ingenieros de distintas partes del mundo que, con distintos proyectos, tratan de hacer un mundo más sostenible.', 
'img/BAJO-UN-CIELO-BANCO.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Sólo humo', 'Juan José Millas', 'Ensayo', 'Cuando Carlos cumple 18 años recibe la noticia de que su padre, a quien nunca conoció, ha muerto. Lo más sorpresivo es que recibe en herencia su casa y allí descubrirá un mundo que lo transformará por completo.', 
'img/solo-humo.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Diario de Ana Frank', 'Ana Frank', 'Autobiografía', 'El diario de Ana Frank es un diario escrito por la niña Ana Frank entre el 12 de junio de 1942 y el 4 de agosto de 1944. Oculta con su familia y otros judíos en una buhardilla de unos almacenes de Ámsterdam durante la ocupación nazi de Holanda, Ana Frank con trece años cuenta en su diario la vida del grupo.', 
'img/AnaFrank.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('El arte de amar', 'Erich Fromm', 'Autoayuda', 'Fromm nos explica que el amor no es sólo una relación personal, sino un rasgo de madurez que se manifiesta en diversas formas: amor erótico, amor fraternal, amor filial, amor a uno mismo.', 
'img/ArteDeAmar.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Un saco de canicas', 'Joseph Joffo', 'Novela Autobiográfica', 'El peluquero Joffo, un honrado judío establecido en el París ocupado por los nazis, decide dispersar a su familia para evitar el cruel y posible destino que les espera. Sus hijos, Joseph (el autor de esta obra) y Maurice tienen, a sus diez y doce años, que sobrevivir solos en un universo desquiciado, en el que la barbarie, la amistad, la picaresca y, sobre todo, el miedo, imponen una sola ley: la supervivencia.', 
'img/SacoCanicas.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Crónica de una muerte anunciada', 'Gabriel García Márquez', 'Novela Policial', 'Relata la historia del asesinato de Santiago Nasar, un joven de 21 años, con ascendencia árabe y católico, quien gobernaba la hacienda de su difunto padre y estaba comprometido con Flora Miguel.', 
'img/CronicaMuerte.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('La metamorfosis', 'Franz Kafka', 'Literatura Fantástica', 'La historia trata sobre Gregorio Samsa, cuya repentina transformación en un enorme insecto dificulta cada vez más la comunicación de su entorno social con él, hasta que es considerado intolerable por su familia y finalmente perece.', 
'img/Metamorfosis.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('El principito', 'Antoine de Saint-Exupéry', 'Literatura Infantil', 'El Principito narra la historia de un niño príncipe que vive en un pequeño asteroide y que cae a la Tierra, donde conoce a un piloto varado en el desierto. Ambos entablan una conversación en clave poética donde hablan de filosofía, de crítica social, del amor, del honor y de mucho de lo que nos hace humanos.', 
'img/Principito.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('La Divina Comedia', 'Dante Alighieri', 'Poesía', 'La Divina Comedia sigue el camino desde el centro de la Tierra, donde se halla Lucifer, hasta el dominio de Dios. El tema de la obra es el recorrido del poeta a través del más allá. En su obra se encuentra gran capacidad para describir el infierno, los círculos, los sufrimientos y los pecadores.', 
'img/DivinaComedia.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('El señor de los anillos', 'J. R. R. Tolkien', 'Ficción de aventuras', 'Su historia se desarrolla en la Tercera Edad del Sol de la Tierra Media, un lugar ficticio poblado por hombres y otras razas antropomorfas, como los hobbits, los elfos o los enanos, así como por muchas otras criaturas reales y fantásticas. La novela narra el viaje del protagonista principal, Frodo Bolsón, hobbit de la Comarca, para destruir el Anillo Único y la consiguiente guerra que provocará el enemigo para recuperarlo, ya que es la principal fuente de poder de su creador, el señor oscuro Sauron.', 
'img/SenorAnillos.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Rayuela', 'Julio Cortázar', 'Ficción', 'El amor turbulento de Oliveira y La Maga, los amigos del Club de la Serpiente, las caminatas por Paría en busca del cielo y el infierno tienen su reverso en la aventura simétrica de Oliveira, Talira y Traveler en un Buenos Aires teñido por el recuerdo.', 
'img/Rayuela.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Los cuentos de mi tía Panchita', 'Carmen Lyra', 'Cuento', 'Es una colección de veintitrés cuentos de hadas que tradicionalmente se han agrupado en dos partes: los cuentos de la tía Panchita y los cuentos de tío Conejo', 
'img/mitia.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Leyendas ticas y otras vainas', 'María Mayela Padilla Monge', 'Cuento', 'Una recopilación de algunas historias relacionadas con las tradiciones de Costa Rica', 
'img/leyendasticas.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('Leyendo leyendas', 'Pedro Núñez Martínez', 'Cuento', 'Esta obra es el resultado de una oportuna amalgama de pasión por la historia patria y de añoranza de las memorias de infancia de su autor. En ella desfilan, sazonados con amenas y pertinentes referencias historiográficas y geográficas, algunos de los personajes más célebres de las leyendas costarricenses.', 
'img/leyendoleye.jpg');

INSERT INTO Libros (nombre_libro, autor, genero, sinopsis, imagen) 
VALUES ('El resplandor', 'Stephen King', 'Novela', 'Al escritor Jack Torrance le es ofrecido un empleo como cuidador del hotel Overlook durante el invierno junto a su familia. ', 
'img/resplandor.jpg');



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