<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ingresar.php");
    exit();
}

require 'config.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

// Consulta para obtener todos los libros
$sql = "SELECT * FROM Libros";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
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

    <h1>Listado de Libros</h1>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Sinopsis</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($libro = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['nombre_libro']; ?></td>
                <td><?php echo $libro['autor']; ?></td>
                <td><?php echo $libro['genero']; ?></td>
                <td><?php echo $libro['sinopsis']; ?></td>
                <td>
                    <!-- Aquí puedes agregar un enlace para eliminar o editar el libro -->
                    <a href="eliminar_libro.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>