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
                <li><a href="bibliotecas.php">Bibliotecas</a></li>
            </ul>
        </nav>
    </header>

    <?php
    include 'config.php';


    // Obtener los parámetros del formulario con el metodo POST
    $nombre_libro = $_POST['nombre_libro'];
    $autor_libro = $_POST['autor_libro'];
    $descripcion_libro = $_POST['descripcion_libro'];
    $genero_libro = $_POST['genero_libro'];
    $anio_publicacion = $_POST['anio_publicacion'];
    $idioma_libro = $_POST['idioma_libro'];
    $editorial_libro = $_POST['editorial_libro'];
    $recomendacion = $_POST['recomendacion'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $email_usuario = $_POST['email_usuario'];

    // Consulta SQL para obtener la información del libro
    //$sql = "INSERT INTO sugerencias (nombre_libro, autor_libro, descripcion_libro, genero_libro, anio_publicacion, idioma_libro, editorial_libro, recomendacion, nombre_usuario, email_usuario)
    //        VALUES (:nombre_libro, :autor_libro, :descripcion_libro, :genero_libro, :anio_publicacion, :idioma_libro, :editorial_libro, :recomendacion, :nombre_usuario, :email_usuario)";

    $sql = "SELECT * FROM Sugerencias WHERE nombre_libro LIKE ? AND autor_libro LIKE ? AND descripcion_libro LIKE ? AND genero_libro LIKE ? AND anio_publicacion LIKE ? AND idioma_libro LIKE ? AND editorial_libro LIKE ? AND recomendacion LIKE ? AND nombre_usuario LIKE ? AND email_usuario LIKE ?"; //Realiza la consulta para que los 3 valores escogidos en el menú coincidan con lo que tenemos en la BD
    $stmt = $conn->prepare($sql); //se prepara la consulta
    $like_nombre_libro = '%' . $nombre_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del libro
    $like_autor_libro = '%' . $autor_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_descripcion_libro = '%' . $descripcion_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_genero_libro = '%' . $genero_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_anio_publicacion = '%' . $anio_publicacion . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_idioma_libro = '%' . $idioma_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_editorial_libro = '%' . $editorial_libro . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_recomendacion = '%' . $recomendacion . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_nombre_usuario = '%' . $nombre_usuario . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del autor
    $like_email_usuario = '%' . $email_usuario . '%'; //Guarda en una variable cualquier coincidencia que tenga el nombre del genero
    $stmt->bind_param("ssssssssss", $like_nombre_libro, $like_autor_libro, $like_descripcion_libro, $like_genero_libro, $like_anio_publicacion, $like_idioma_libro, $like_editorial_libro, $like_recomendacion, $like_nombre_usuario, $like_email_usuario); // Se asocian los valores para los marcadores de la consulta . Los marcadores son los signos "?" que se muestran en el select
    $stmt->execute(); //Se ejecuta la consulta 
    $result = $stmt->get_result(); //Se obtiene el resultado


    // Configurar el correo electrónico
    $para = "brandonbonilla43@gmail.com";
    $asunto = "Nueva Sugerencia de Libro";
    $mensaje = "
    Se ha recibido una nueva sugerencia de libro:
    
    Nombre del libro: $nombre_libro
    Autor del libro: $autor_libro
    Descripción: $descripcion_libro
    Género literario: $genero_libro
    Año de publicación: $anio_publicacion
    Idioma: $idioma_libro
    Editorial: $editorial_libro
    Recomendación: $recomendacion
    Nombre del usuario: $nombre_usuario
    Correo del usuario: $email_usuario
";

   // // Enviar el correo electrónico
   $headers = "From: brandonbonilla43@gmail.com\r\n";
   $headers .= "Reply-To: brandonbonilla43@gmail.com\r\n";
   $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "Sugerencia enviada y guardada con éxito.";
    } else {
        echo "Error al enviar la sugerencia.";
    }
    // Redirigir a la página de agradecimiento
    header('Location: agradecimiento.html');
    exit();
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados de Recomendación</title>
    </head>

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

        <body>
            <h1>Resultados de Recomendación</h1>
            <?php
            if ($result->num_rows > 0) { //Validar si existen registros con el resultado obtenido en la consulta
                while ($row = $result->fetch_assoc()) { //Recorre cada fila que encontró en el resultado
                    //Se imprime la información. htmlspecialchars lo que hace es evitar problemas con caracteres especiales
                    echo "<h2>Detalles del libro:</h2>";
                    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($row["nombre_libro"]) . "</p>";
                    echo "<p><strong>Autor:</strong> " . htmlspecialchars($row["autor"]) . "</p>";
                    echo "<p><strong>Género:</strong> " . htmlspecialchars($row["genero"]) . "</p>";
                    echo "<p><strong>Sinopsis:</strong> " . htmlspecialchars($row["sinopsis"]) . "</p>";
                    echo "<p><strong></strong> <img src='" . htmlspecialchars($row["imagen"]) . "' alt='" . htmlspecialchars($row["nombre_libro"]) . "'></p>";
                }
            } else {
                echo "<p>No se encontraron resultados para los criterios seleccionados.</p>";
            }

            // Cerrar la conexión
            $stmt->close();
            $conn->close();
            ?>
        </body>

    </html>