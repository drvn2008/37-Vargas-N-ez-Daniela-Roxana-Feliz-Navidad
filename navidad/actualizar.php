<?php
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$sql = "UPDATE carta SET nombre='$nombre', email='$correo', mensaje='$mensaje' WHERE id=$id";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Carta actualizada 🎄'); window.location='mostrar.php';</script>";
} else {
    echo "Error: " . $conexion->error;
}
?>
