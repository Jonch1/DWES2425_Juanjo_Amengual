<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del producto</title>
    <link rel="stylesheet" href="listado.css">
</head>
<body>

<?php
global $conn;
include "Conexion.php";

try {
        $sql = "SELECT * FROM pedidos where id IN ('id')";
        $stmt = $conn->query($sql);
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['producto']) . "</td>";
            echo "</tr>";
        }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>

</body>
</html>