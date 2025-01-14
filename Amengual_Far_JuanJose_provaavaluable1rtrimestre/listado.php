<?php

$host = '127.0.0.1';
$dbname = 'proyecto_alumno07';
$user = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    echo "Conexión exitosa a la base de datos.";

} catch (PDOException $e) {

    echo "Error de conexión: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Gestión de productos</h2>

<div class = "contenedor">
    <a href= "crear.php" class="btn btn-secondary btn-custom">Crear</a>
    <table class="tabla">
        <tr>
            <th>Detalle</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td><a href= "detalle.php" class="btn btn-secondary btn-custom">Detalle</a></td>
            <td>1</td>
            <td>Portatil ACER</td>
            <td><a href= "update.php" class="btn btn-secondary btn-custom">Actualizar</a><a href= "borrar.php" class="btn btn-secondary btn-custom">Borrar</a></td>
        </tr>
    </table>
</div>

</body>
</html>