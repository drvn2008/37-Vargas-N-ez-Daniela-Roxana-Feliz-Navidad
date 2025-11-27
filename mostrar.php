<?php
include("conexion.php");

$consulta = "SELECT * FROM carta ORDER BY id DESC";
$resultado = $conexion->query($consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cartas a Santa 🎅</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h2 class="text-center mb-4">📬 Cartas enviadas a Santa</h2>

<table class="table table-bordered table-striped">
    <thead class="table-danger">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Carta</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    <?php while($fila = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['email'] ?></td>
            <td><?= $fila['mensaje'] ?></td>

            <td>
                <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>
