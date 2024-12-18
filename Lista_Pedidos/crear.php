<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear producto</title>
    <link rel="stylesheet" href="listado.css">
</head>
<body>

<form action = "crear.php" method="POST">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

    <button type="submit">Crear</button>
</form>

<?php
global $conn;
include "Conexion.php";

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];


    $sql = "INSERT INTO pedidos (producto) VALUES ('$nombre')";
    $stmt = $conn->query($sql);
    header("Location: listado.php");
    exit();
    }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>

</body>
</html>