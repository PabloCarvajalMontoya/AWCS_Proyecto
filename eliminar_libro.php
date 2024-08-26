<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ingresar.php");
    exit();
}

require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM Libros WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: libros.php");
} else {
    echo "Error al eliminar el libro.";
}
?>