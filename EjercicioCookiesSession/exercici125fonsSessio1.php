<?php
session_start();

if (isset($_POST['color'])) {

    $_SESSION['background_color'] = $_POST['color'];
}

$background_color = isset($_SESSION['background_color']) ? $_SESSION['background_color'] : 'white';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambia el color del fondo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($background_color); ?>;">

<h1>Selecciona el color de fondo</h1>

<form method="post" action="">
    <label for="color">Elige un color:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($background_color == "blanco") echo "selected"; ?>>Blanco</option>
        <option value="grey" <?php if ($background_color == "gris") echo "selected"; ?>>Gris</option>
        <option value="blue" <?php if ($background_color == "azul") echo "selected"; ?>>Azul</option>
        <option value="green" <?php if ($background_color == "verde") echo "selected"; ?>>Verde</option>
        <option value="yellow" <?php if ($background_color == "amarillo") echo "selected"; ?>>Amarillo</option>
    </select>
    <button type="submit">Cambiar color</button>
</form>

<p><a href="exercici126fonsSessio2.php">Ir a la siguiente pagina</a></p>

</body>
</html>

