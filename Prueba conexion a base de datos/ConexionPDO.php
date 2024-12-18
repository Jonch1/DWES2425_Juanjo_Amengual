<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>

<?php
try {
    $host = "127.0.0.1";
    $dbname = "prueba";
    $user = "root";
    $password = "1234";


    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    $stmt = $conn->query("SELECT * FROM pedidos");

    // Mostrar los resultados en una tabla HTML
    echo "<h2>Lista de Productos</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Usuario_ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
          </tr>";

    // Recorrer los resultados
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['usuario_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['producto']) . "</td>";
        echo "<td>" . htmlspecialchars($row['cantidad']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

</body>
</html>
