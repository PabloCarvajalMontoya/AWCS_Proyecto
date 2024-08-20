<!DOCTYPE HTML>
<html lang="es">

<head>
    <title> Recomendador Libros </title>
    <meta charset="utf-8">
    <!--ayuda a visualizar en dispositivos moviles, desactiva el zoom, y permite al usuario moverse solo de arriba a abajo, width=device-width ancho sea igual al ancho del dispositivo, inicio y maximo sea igual a 1 para no usar zoom-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--fuente de Googlefonts-->
    <link href="http://fonts.googleapis.com/css?family=indie+flower" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="script.js"></script>
</head>

<?php

// Verificar la conexión
include 'config.php';
// Función para generar opciones en el menú desplegable
function getOptions($conn, $column) { // recibe el parametro de la conexion y el nombre de la columna de la tabla
    $sql = "SELECT DISTINCT $column FROM Sugerencias"; //Hace un select de la columna
    $result = $conn->query($sql);//Guarda el resultado de la consulta
    $options = "";
    while ($row = $result->fetch_assoc()) { //Recorre cada registro
        $options .= "<option value='" . htmlspecialchars($row[$column]) . "'>" . htmlspecialchars($row[$column]) . "</option>";
    }//Crea una opcion desplegable segun lo que encuentre en la base de datos
    return $options;
}

// Obtener opciones para los selects
$nombre_libros_options = getOptions($conn, 'nombre_libro'); // Guarda en la variable $nombre_libros_options, los nombres de los libros existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$autor_libros_options = getOptions($conn, 'autor_libro'); // Guarda en la variable $autores_options, los nombres de los autores existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$descripcion_libros_options = getOptions($conn, 'descripcion_libro');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$genero_libros_options = getOptions($conn, 'genero_libro');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$anio_publicaciones_options = getOptions($conn, 'anio_publicacion');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$idioma_libros_options = getOptions($conn, 'idioma_libro');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$editorial_libros_options = getOptions($conn, 'editorial_libro');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$recomendaciones_options = getOptions($conn, 'recomendacion');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$nombre_usuarios_options = getOptions($conn, 'nombre_usuario');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$email_usuarios_options = getOptions($conn, 'email_usuario');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
// Cerrar la conexión
$conn->close();
?>

<body>
    <header>
        <figure>
            <img src="img/header2.jpg" alt="Recomendador Libros">
        </figure>
        <h1>Recomendador Libros</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="recomendador.php">Recomendador de libros</a></li>
                <li><a href="sugerir.php">Sugerir Libros</a></li>
            </ul>
        </nav>
    </header>


    <!--Slide de Imagenes-->
    <!--<div id="slideContenedor">
        <div id="slider">
            <div class="elemento">
                <a href="#"><img src="img/slider1.jpeg" alt=""> </a>
                <p class="frase">"Cien años de soledad" Gabriel García Márquez</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider2.jpeg" alt=""> </a>
                <p class="frase">"1984" George Orwell</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider3.jpeg" alt=""> </a>
                <p class="frase">"Orgullo y prejuicio" Jane Austen</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider4.jpeg" alt=""> </a>
                <p class="frase">"El hombre en busca de sentido" Viktor Frankl</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider5.jpeg" alt=""> </a>
                <p class="frase">"El temor de un hombre sabio" Patrick Rothfuss</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider6.jpeg" alt=""> </a>
                <p class="frase">"Sapiens: De animales a dioses" Yuval Noah Harari</p>
            </div>
            <div class="elemento">
                <a href="#"><img src="img/slider7.jpeg" alt=""> </a>
                <p class="frase">"El Principito" Antoine de Saint-Exupéry</p>
            </div>
        </div>
    </div>  -->


    <section>
        <!--banner lateral noticias-->
        <div class="noticias">
            <h2>Recomendaciones de la semana</h2>
            <article class="post">
                <figure>
                    <img src="img/Esquirla del amanecer_.jpg" alt="Esquirla del amanecer_">
                </figure>
                <h3>Esquirla del Amanecer: <br>Brandon Sanderson</h3>
                <p>Tras el descubrimiento de un barco fantasma, cuya tripulación al parecer murió intentando
                    llegar a la isla de Akinah, rodeada por tormentas, Navani Kholin deberá enviar una
                    expedición para asegurarse de que la isla no haya caído en manos enemigas. Los Caballeros
                    Radiantes que vuelan demasiado cerca de Akinah se encuentran de pronto con su luz
                    tormentosa drenada, por lo que la travesía debe realizarse por mar.

                    La naviera Rysn Ftori perdió el uso de las piernas, pero ganó la compañía de Chiri-Chiri,
                    una larkin alada que se alimenta de luz tormentosa y pertenece a una especie que se creía
                    extinta.
                    recupere podría encontrarse en el hogar ancestral de los larkin, Akinah.<br><br> Con la ayuda de
                    La mascota de Rysn ha enfermado y la única esperanza de que Chiri-Chiri se
                    Lopen, el Corredor del Viento que antes era manco, Rysn tendrá que aceptar el encargo de
                    Navani y navegar hacia el interior de la peligrosa tormenta, de la que nadie ha vuelto
                    con vida. Si su tripulación no logra desvelar los secretos de la isla oculta antes de
                    que caiga sobre ellos la ira de sus antiguos guardianes, el destino de Roshar y de todo
                    el Cosmere penderá de un hilo.
                </p>
                <iframe width="380" height="315" src="https://www.youtube.com/embed/h5NN3Pogkco?si=pi8ybM9Gzzv1x88p"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </article>
            <article class="post">
                <figure>
                    <img src="img/CAPITANA MARVEL.jpg" alt="AntiHeroe">
                </figure>
                <h3>Life Of Captain Marvel Vol 01 - Marvel Comics</h3>
                <p>Recopila la vida del Capitán Marvel #1-5. ¡Es una de las heroínas más poderosas no solo de
                    la Tierra sino de toda la galaxia! ¡Ahora aprende exactamente cómo Carol Danvers se
                    convirtió en la mujer que es, la Vengadora que es, en el origen definitivo del Capitán
                    Marvel! Cuando los ataques de ansiedad repentinos y paralizantes dejan de lado a Carol
                    en medio de una pelea, se encuentra reviviendo recuerdos de una vida que pensó que había
                    quedado atrás. No puedes huir de donde eres y, a veces, tienes que volver a casa. Pero
                    mientras Carol se ausenta temporalmente del servicio para desentrañar su pasado, los problemas la
                    buscan. Se ha desatado un arma y el tranquilo pueblo costero de Carol está a punto de convertirse en
                    el centro de su mundo. Pero hay esqueletos en el armario de la Capitana Marvel, ¡y lo que descubre
                    cambiará su vida por completo!.</p>
            </article>
        </div>
        <div class="contenedor">
            <h1>Sugerir un Libro</h1>
            <form action="procesar_sugerencia.php" method="post">
                <label for="nombre_libro">Nombre del libro:</label>
                <input type="text" id="nombre_libro" name="nombre_libro" required>

                <label for="autor_libro">Autor del libro:</label>
                <input type="text" id="autor_libro" name="autor_libro" required>

                <label for="descripcion_libro">Breve descripción:</label>
                <textarea id="descripcion_libro" name="descripcion_libro" required></textarea>

                <label for="genero_libro">Género literario:</label>
                <select id="genero_libro" name="genero_libro" required>
                    <option value="ficcion">Ficción</option>
                    <option value="no_ficcion">No ficción</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia ficción</option>
                    <option value="biografia">Biografía</option>
                    <option value="otros">Otros</option>
                </select>

                <label for="anio_publicacion">Año de publicación:</label>
                <input type="number" id="anio_publicacion" name="anio_publicacion" required>

                <label for="idioma_libro">Idioma:</label>
                <select id="idioma_libro" name="idioma_libro" required>
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                    <option value="otros">Otros</option>
                </select>

                <label for="editorial_libro">Editorial:</label>
                <input type="text" id="editorial_libro" name="editorial_libro" required>

                <label for="recomendacion">¿Por qué recomiendas este libro?</label>
                <textarea id="recomendacion" name="recomendacion" required></textarea>

                <label for="nombre_usuario">Tu nombre (opcional):</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario">

                <label for="email_usuario">Tu correo electrónico (opcional):</label>
                <input type="email" id="email_usuario" name="email_usuario">

                <input type="submit" value="Enviar sugerencia">
            </form>
        </div>
        <div class="contenedor2">
            <!-- Párrafos adicionales -->
            <h2>Sobre Nuestro Recomendador de Libros</h2>
            <p>Nuestro recomendador de libros es una herramienta creada por un grupo de apasionados lectores con el objetivo de ayudar a
                otros a encontrar nuevas lecturas. Creemos que la literatura es una puerta abierta a innumerables mundos y queremos compartir
                esa experiencia con todos. Desde novelas de ficción que te transportan a universos desconocidos, hasta ensayos que te hacen
                reflexionar sobre la condición humana, en nuestro sitio puedes encontrar una amplia variedad de recomendaciones literarias.
                Nos esforzamos por ofrecer una selección diversa que satisfaga los gustos de todo tipo de lectores, independientemente de sus
                intereses literarios. No importa si eres un ávido lector o alguien que busca su próxima gran aventura literaria, nuestro
                recomendador de libros tiene algo especial para ti.</p>
            <p>Te invitamos a participar activamente en nuestra comunidad, sugiriendo tus libros favoritos y descubriendo nuevas lecturas
                a través de las recomendaciones de otros usuarios. Compartir tus experiencias literarias no solo enriquece tu propio mundo,
                sino que también puede iluminar el camino de otros lectores en busca de nuevas historias. Al formar parte de esta comunidad,
                estás contribuyendo a la creación de un espacio donde la literatura se celebra y se comparte. Así que no dudes en explorar,
                sugerir y, sobre todo, disfrutar de todo lo que nuestro recomendador de libros tiene para ofrecer. Esperamos que este sitio se
                convierta en tu punto de referencia para todas tus necesidades literarias, donde siempre encontrarás algo que despierte tu
                curiosidad y satisfaga tu amor por los libros.</p>
        </div>
    </section>

    <footer>
        <span>Proyecto Final - Grupo 5</span>
    </footer>
    <!--Codigo de JavaScript para el Contenedor de Imagenes-->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>

    <script type="text/javascript">
        //<![CDATA[
        $(function() {
            $('#slider div:gt(0)').hide();
            setInterval(function() {
                $('#slider div:first-child').fadeOut(0)
                    .next('div').fadeIn(1000)
                    .end().appendTo('#slider');
            }, 3000);
        });
        //]]>
    </script>
    <!--FIN del script de JavaScript-->
</body>

</html>