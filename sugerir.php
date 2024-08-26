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
    <script src="./js/jquery-3.7.1.js"></script>
    <script src="./js/script.js"></script>
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
        <?php
        session_start();
        ?>

        <nav>
            <ul>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li><a href="agregar_libro.php">Añadir libros</a></li>
                    <li><a href="libros.php">Ver Libros</a></li>
                    <li><a href="ver_sugerencias.php">Ver Sugerencias</a></li>
                    <li><a href="salir.php">Salir</a></li>
                <?php else: ?>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="recomendador.php">Recomendador de libros</a></li>
                    <li><a href="bibliotecas.php">Bibliotecas</a></li>
                    <li><a href="ingresar.php">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>

    <section>
    <div class="contenedor">
        <h1>Sugerir un Libro</h1>
        <form id="formSugerir" action="procesar_sugerencia.php" method="post">
            <label for="nombre_libro">Nombre del libro:</label>
            <input type="text" id="nombre_libro" name="nombre_libro">

            <label for="autor_libro">Autor del libro:</label>
            <input type="text" id="autor_libro" name="autor_libro">

            <label for="descripcion_libro">Breve descripción:</label>
            <textarea id="descripcion_libro" name="descripcion_libro"></textarea>

            <label for="genero_libro">Género literario:</label>
            <select id="genero_libro" name="genero_libro">
                <option value="ficcion">Ficción</option>
                <option value="no_ficcion">No ficción</option>
                <option value="fantasia">Fantasía</option>
                <option value="ciencia_ficcion">Ciencia ficción</option>
                <option value="biografia">Biografía</option>
                <option value="otros">Otros</option>
            </select>

            <label for="anio_publicacion">Año de publicación:</label>
            <input type="number" id="anio_publicacion" name="anio_publicacion">

            <label for="idioma_libro">Idioma:</label>
            <select id="idioma_libro" name="idioma_libro">
                <option value="espanol">Español</option>
                <option value="ingles">Inglés</option>
                <option value="otros">Otros</option>
            </select>

            <label for="editorial_libro">Editorial:</label>
            <input type="text" id="editorial_libro" name="editorial_libro">

            <label for="recomendacion">¿Por qué recomiendas este libro?</label>
            <textarea id="recomendacion" name="recomendacion"></textarea>

            <label for="nombre_usuario">Tu nombre (opcional):</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario">

            <label for="email_usuario">Tu correo electrónico (opcional):</label>
            <input type="email" id="email_usuario" name="email_usuario">

            <input type="submit" value="Enviar sugerencia">
        </form>
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