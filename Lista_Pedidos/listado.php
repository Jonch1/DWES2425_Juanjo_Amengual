<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <link rel="stylesheet" href="listado.css">
</head>
<body>

<?php
global $conn;
include "Conexion.php";

try {
    // consulta para obtener los registros
    $sql = "SELECT * FROM pedidos";
    $stmt = $conn->query($sql);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>

<h2 class = "titulo">Lista de Productos</h2>
    <table class = "table">
        <tr>
            <th>Detalles</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </tr>

<?php

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td><a href='detalles.php' class='btn btn-primary btn-custom'>Detalles</a></td>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['producto']) . "</td>";
    echo "<td><a href='actualizar.php' class='btn btn-warning btn-custom'>Actualizar</a>
              <a href='borrar.php' class='btn btn-danger btn-custom'>Borrar</a>
         </td>";
    echo "</tr>";
}

?>

        <a href='crear.php' class='btn btn-success btn-custom'>Crear nuevo producto</a>

</body>
</html>
