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
                    <li><a href="sugerir.php">Sugerir Libros</a></li>
                    <li><a href="bibliotecas.php">Bibliotecas</a></li>
                    <li><a href="ingresar.php">Iniciar Sesión</a></li>
                    
                <?php endif; ?>
            </ul>
        </nav>

    </header>

    <section>        
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