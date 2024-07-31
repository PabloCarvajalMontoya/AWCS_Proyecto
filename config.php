<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "Tucson08";
$dbname = "RecomendadorWeb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}