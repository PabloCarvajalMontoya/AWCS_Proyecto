<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bibliotecas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/jquery-3.7.1.js"></script>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="recomendador.php">Recomendador de libros</a></li>
                    <li><a href="sugerir.php">Sugerir Libros</a></li>
                    <li><a href="ingresar.php">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>
    <!-- <h1>¡Encuentra la bibloteca más cercana de acuerdo a tu Provincia!</h1> -->
    <form id="form-buscar-bibliotecas">
        <label for="provincia">Selecciona tu provincia:</label>
        <select id="provincia" name="provincia">
            <option value="">Haz click aquí</option>
            <!-- Provincias -->
        </select>
        <button type="submit">Buscar</button>
    </form>

    <div id="resultado-bibliotecas">
        <!-- Aquí se mostrarán las bibliotecas -->
    </div>

    <script>
        $(document).ready(function() {
            // Carga de las provincias al cargar la página
            $.ajax({
                url: 'procesar_provincias.php',
                type: 'GET',
                success: function(data) {
                    $('#provincia').append(data);
                }
            });

            // Manejo del envío del formulario
            $('#form-buscar-bibliotecas').submit(function(event) {
                event.preventDefault();
                var provinciaId = $('#provincia').val();

                $.ajax({
                    url: 'procesar_bibliotecas.php',
                    type: 'POST',
                    data: { provincia_id: provinciaId },
                    success: function(data) {
                        $('#resultado-bibliotecas').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
