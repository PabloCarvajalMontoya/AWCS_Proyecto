<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ingresar.php");
    exit();
}

require 'config.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

// Consulta para obtener todas las sugerencias
$sql = "SELECT * FROM Sugerencias";
$resultado = $conn->query($sql);

// Verifica si se ha enviado una solicitud para eliminar
if (isset($_GET['eliminar_id'])) {
    $id_a_eliminar = intval($_GET['eliminar_id']);
    $sql_delete = "DELETE FROM Sugerencias WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $id_a_eliminar);

    if ($stmt->execute()) {
        echo "Sugerencia eliminada con éxito.";
    } else {
        echo "Error al eliminar la sugerencia.";
    }

    $stmt->close();
    // Recarga la página después de eliminar para mostrar los cambios
    header("Location: ver_sugerencias.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Sugerencias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
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

    <h1>Listado de Sugerencias</h1>
    <table border="1" width=100%>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Libro</th>
                <th>Autor</th>
                <th>Descripción</th>
                <th>Género</th>
                <th>Año de Publicación</th>
                <th>Idioma</th>
                <th>Editorial</th>
                <th>Recomendación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($sugerencia = $resultado->fetch_assoc()): ?>

            <tr>
                <td><?php echo $sugerencia['id']; ?></td>
                <td><?php echo $sugerencia['nombre_libro']; ?></td>
                <td><?php echo $sugerencia['autor_libro']; ?></td>
                <td><?php echo $sugerencia['descripcion_libro']; ?></td>
                <td><?php echo $sugerencia['genero_libro']; ?></td>
                <td><?php echo $sugerencia['anio_publicacion']; ?></td>
                <td><?php echo $sugerencia['idioma_libro']; ?></td>
                <td><?php echo $sugerencia['editorial_libro']; ?></td>
                <td><?php echo $sugerencia['recomendacion']; ?></td>
                <td>
                    <a href="?eliminar_id=<?php echo $sugerencia['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta sugerencia?');">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody> 
    </table>
    
</body>
</html>

<?php
$resultado->free();
$conn->close();
?>