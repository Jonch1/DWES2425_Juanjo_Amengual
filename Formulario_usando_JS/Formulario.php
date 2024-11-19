<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    $dni = $_GET['dni'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h1>Informació introducida</h1>

<h1>Resumen de los Datos Introducidos</h1>

<ul>
    <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
    <li><strong>DNI:</strong> <?php echo $dni; ?></li>
    <li><strong>Edad:</strong> <?php echo $edad; ?></li>
</ul>

</body>
</html>