<!DOCTYPE HTML>
<html lang="es">
<?php
include 'config.php';
?>

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

    <section>
        
        <div class="contenedor">
            <h1>Sugerir un Libro</h1>
            <form id="formSugerir" action="procesar_sugerencia.php" method="post">
                <label for="nombre_libro">Nombre del libro:</label>
                <input type="text" id="nombre_libro" name="nombre_libro">

                <label for="autor_libro">Autor del libro:</label>
                <input type="text" id="autor_libro" name="autor_libro" >

                <label for="descripcion_libro">Breve descripción:</label>
                <textarea id="descripcion_libro" name="descripcion_libro" ></textarea>

                <label for="genero_libro">Género literario:</label>
                <select id="genero_libro" name="genero_libro" >
                    <option value="ficcion">Ficción</option>
                    <option value="no_ficcion">No ficción</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia ficción</option>
                    <option value="biografia">Biografía</option>
                    <option value="otros">Otros</option>
                </select>

                <label for="anio_publicacion">Año de publicación:</label>
                <input type="number" id="anio_publicacion" name="anio_publicacion" >

                <label for="idioma_libro">Idioma:</label>
                <select id="idioma_libro" name="idioma_libro" >
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                    <option value="otros">Otros</option>
                </select>

                <label for="editorial_libro">Editorial:</label>
                <input type="text" id="editorial_libro" name="editorial_libro" >

                <label for="recomendacion">¿Por qué recomiendas este libro?</label>
                <textarea id="recomendacion" name="recomendacion" ></textarea>

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