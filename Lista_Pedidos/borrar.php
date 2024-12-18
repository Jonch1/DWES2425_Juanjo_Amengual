<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar producto</title>
    <link rel="stylesheet" href="listado.css">
</head>
<body>

<?php
global $conn;
include "Conexion.php";

try {
    $sql = "DELETE FROM pedidos WHERE id IN ('id')";
    $stmt = $conn->query($sql);

    header("Location: listado.php");
    exit();
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>

</body>
</html>
