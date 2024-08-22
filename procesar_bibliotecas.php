<?php
include 'config.php';

$provincia_id = $_POST['provincia_id'];

$query = "SELECT nombre, direccion FROM bibliotecas WHERE provincia_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $provincia_id);
$stmt->execute();
$result = $stmt->get_result();

$salida = "<ul>";
while ($row = $result->fetch_assoc()) {
    $salida .= "<li>{$row['nombre']} - {$row['direccion']}</li>";
}
$salida .= "</ul>";

echo $salida;
?>
