<?php 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
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
                    <li><a href="bibliotecas.php">Bibliotecas</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>
    <main>
        <section>
            <h2>Iniciar sesion</h2>
            <form method="post" action="procesar_ingresar.php">
                <label>Usuario:</label>
                <input type="text" name="usuario">
                <br>
                <label>Clave:</label>
                <input type="password" name="clave">
                <br>
                <button type="submit">Ingresar</button>
            </form>
        </section>
    </main>
    <footer>
        <span>Proyecto Final - Grupo 5</span>
    </footer>
</body>

</html>