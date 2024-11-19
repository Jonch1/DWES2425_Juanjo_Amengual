<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
<h2>Serie de Fibonacci</h2><br>

<form method="post">

    <label for="respuesta">Introduce el número de términos de la serie de Fibonacci que quieres mostrar:</label><br><br>
    <input type="text" id="respuesta" name="respuesta" required><br><br>

    <input type="submit" value="Calcular"><br><br>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = intval($_POST['respuesta']);

    $a = 0;
    $b = 1;

    echo "Los primeros $respuesta términos de la serie de Fibonacci son: \n";

    for ($i = 0; $i < $respuesta; $i++) {
        echo $a . " ";
        $siguiente = $a + $b;
        $a = $b;
        $b = $siguiente;
    }
    
}
?>

</body>
</html>
