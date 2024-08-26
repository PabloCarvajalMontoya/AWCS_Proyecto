<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre_libro = $_POST['nombre_libro'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero_libro'];
    $sinopsis = $_POST['sinopsis'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO Libros (nombre_libro, autor, genero, sinopsis) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre_libro, $autor, $genero, $sinopsis);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Libro agregado con éxito.";
    } else {
        echo "Error al agregar el libro: " . $stmt->error;
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conn->close();
}