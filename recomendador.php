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
    $sql = "SELECT DISTINCT $column FROM Libros"; //Hace un select de la columna
    $result = $conn->query($sql);//Guarda el resultado de la consulta
    $options = "";
    while ($row = $result->fetch_assoc()) { //Recorre cada registro
        $options .= "<option value='" . htmlspecialchars($row[$column]) . "'>" . htmlspecialchars($row[$column]) . "</option>";
    }//Crea una opcion desplegable segun lo que encuentre en la base de datos
    return $options;
}

// Obtener opciones para los selects
$nombre_libros_options = getOptions($conn, 'nombre_libro'); // Guarda en la variable $nombre_libros_options, los nombres de los libros existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$autores_options = getOptions($conn, 'autor'); // Guarda en la variable $autores_options, los nombres de los autores existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable
$generos_options = getOptions($conn, 'genero');// Guarda en la variable $generos_options, los nombres de los generos existentes despues de recorrer la tabla y asi tener mas opciones en el menu desplegable

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
                <li><a href="sugerir.html">Sugerir Libros</a></li>
            </ul>
        </nav>
    </header>


 

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

        
        <!--articulo-->
        <article class="recomienda reco1">
        <form action="procesar_recomendacion.php" method="POST"> <!--Los datos se enviarán a procesar_recomendacion.php por medio del metodo POST-->
            <label for="nombre_libro">Nombre del libro:</label>
            <select name="nombre_libro" id="nombre_libro">
                <option value="">Ver todos</option> <!--"Ver todos" tiene un valor vacío entonces no seleccionara un nombre en especifico-->
                <?php echo $nombre_libros_options; ?> <!--Esta variable me guarda los nombres de los libros que tiene la base de datos para mostrarla en el menú-->
            </select>
            <br><br>

            <label for="autor">Autor:</label>
            <select name="autor" id="autor">
                <option value="">Ver todos</option>
                <?php echo $autores_options; ?>
            </select>
            <br><br>

            <label for="genero">Género:</label>
            <select name="genero" id="genero">
                <option value="">Ver todos</option>
                <?php echo $generos_options; ?>
            </select>
            <br><br>

            <input type="submit" value="Buscar recomendación">
        </form>
    </article>
        
    </section>

    <footer>
        <span>Proyecto Final - Grupo 5</span>
    </footer>
    <!--Codigo de JavaScript para el Contenedor de Imagenes-->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>

    <script type="text/javascript">//<![CDATA[
        $(function () {
            $('#slider div:gt(0)').hide();
            setInterval(function () {
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