<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bibliotecas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery-3.7.1.js"></script>
</head>
<body>
<header>
        <figure>
            <img src="img/header2.jpg" alt="Recomendador Libros">
        </figure>
        <h1>¡Encuentra la bibloteca más cercana de acuerdo a tu Provincia!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="recomendador.php">Recomendador de libros</a></li>
                <li><a href="sugerir.php">Sugerir Libros</a></li>
                <li><a href="bibliotecas.php">Bibliotecas</a></li>
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
