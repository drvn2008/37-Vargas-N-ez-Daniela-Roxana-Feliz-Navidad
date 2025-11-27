<?php
$conexion = new mysqli("localhost", "root", "", "base_de_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
