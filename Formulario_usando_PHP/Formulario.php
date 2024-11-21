<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nom'];
    $edad = $_POST['edat'];
    $dni = $_POST['dni'];

    if (empty($nombre) || empty($edad) || empty($dni)) {
    echo "Has dejado campos sin rellenar...";
    }

    if (is_numeric($nombre) || !is_numeric($edad)) {
        echo "Los valores introducidos no son correctos";
}
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