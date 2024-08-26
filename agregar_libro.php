<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Recomendador Libros</title>
    <!-- Ayuda a visualizar en dispositivos móviles, desactiva el zoom, y permite al usuario moverse solo de arriba a abajo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Fuente de Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=indie+flower" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="script.js"></script>
</head>

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
                    <li><a href="recomendador.php">Recomendador de libros</a></li>
                    <li><a href="sugerir.php">Sugerir Libros</a></li>
                    <li><a href="bibliotecas.php">Bibliotecas</a></li>
                    <li><a href="ingresar.php">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>

    <section>
        <div class="contenedor">
            <form action="procesar_libro.php" method="post" enctype="multipart/form-data">
                <label for="nombre_libro">Nombre del libro:</label>
                <input type="text" id="nombre_libro" name="nombre_libro" required>

                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required>

                <label for="genero_libro">Género literario:</label>
                <select id="genero_libro" name="genero_libro">
                    <option value="ficcion">Ficción</option>
                    <option value="no_ficcion">No ficción</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia ficción</option>
                    <option value="biografia">Biografía</option>
                    <option value="otros">Otros</option>
                </select>
                
                <label for="sinopsis">Sinopsis:</label>
                <textarea id="sinopsis" name="sinopsis" required></textarea>

                <input type="submit" value="Agregar Libro">
            </form>
        </div>
    </section>

</body>
</html>