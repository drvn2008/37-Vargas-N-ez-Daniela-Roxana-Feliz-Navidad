<?php
include("conexion.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM carta WHERE id = $id";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Carta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h2 class="text-center">✏ Editar carta enviada</h2>

<form action="actualizar.php" method="POST" class="card p-4 mt-4">

    <input type="hidden" name="id" value="<?= $fila['id'] ?>">

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control"
               value="<?= $fila['nombre'] ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Correo</label>
        <input type="email" name="correo" class="form-control"
               value="<?= $fila['email'] ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Carta</label>
        <textarea name="mensaje" rows="5" class="form-control" required><?= $fila['mensaje'] ?></textarea>
    </div>

    <button class="btn btn-danger">Actualizar</button>
</form>

</body>
</html>
