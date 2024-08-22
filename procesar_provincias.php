<?php
include 'config.php';

$query = "SELECT id, nombre FROM provincias";
$result = mysqli_query($conn, $query);

$options = "";
while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='{$row['id']}'>{$row['nombre']}</option>";
}

echo $options;
?>