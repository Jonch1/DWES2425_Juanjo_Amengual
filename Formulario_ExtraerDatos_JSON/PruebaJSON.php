<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Datos JSON</title>
</head>
<body>
<h1>Estos son los datos que contiene el JSON</h1>

<?php
// Leer el archivo JSON
$json = file_get_contents('Datos.json');
$datos = json_decode($json, true);

// Extraer los datos
$nombre = $datos['nombre'];
$edad = $datos['edad'];
$dni = $datos['dni'];
$ciudad = $datos['ciudad'];
?>

<ul>
    <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
    <li><strong>Edad:</strong> <?php echo $edad; ?></li>
    <li><strong>Dni:</strong> <?php echo $dni; ?></li>
    <li><strong>Ciudad:</strong> <?php echo $ciudad; ?></li>
</ul>
</body>
</html>