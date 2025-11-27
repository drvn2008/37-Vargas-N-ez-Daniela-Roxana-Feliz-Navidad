<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$sql = "INSERT INTO carta (nombre, email, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Carta enviada correctamente 🎄'); window.location='index.html';</script>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
