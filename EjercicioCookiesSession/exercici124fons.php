<?php

$cookie_name = "background_color";

if (isset($_POST['color'])) {
    $selected_color = $_POST['color'];
    setcookie($cookie_name, $selected_color, time() + 86400);
} elseif (isset($_COOKIE[$cookie_name])) {
    $selected_color = $_COOKIE[$cookie_name];
} else {
    $selected_color = "white";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambia el color de fondo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($selected_color); ?>;">

<h1>Selecciona el color de fondo</h1>

<form method="post" action="">
    <label for="color">Elige un color:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($selected_color == "white") echo "selected"; ?>>Blanco</option>
        <option value="lightgrey" <?php if ($selected_color == "grey") echo "selected"; ?>>Gris</option>
        <option value="lightblue" <?php if ($selected_color == "blue") echo "selected"; ?>>Azul</option>
        <option value="lightgreen" <?php if ($selected_color == "green") echo "selected"; ?>>Verde</option>
        <option value="lightyellow" <?php if ($selected_color == "yellow") echo "selected"; ?>>Amarillo</option>
    </select>
    <button type="submit">Cambiar color</button>
</form>

</body>
</html>