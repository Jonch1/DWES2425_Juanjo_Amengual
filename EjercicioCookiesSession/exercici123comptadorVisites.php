<?php

$cookie_name = "contador_visitas";

if (isset($_POST['reiniciar'])) {
    setcookie($cookie_name, "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if (isset($_COOKIE[$cookie_name])) {

    $contador = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name, $contador, time() + (86400 * 30));
    echo "Bienvenido de nuevo. Esta es tu visita número: $contador";
} else {
    $contador = 1;
    setcookie($cookie_name, $contador, time() + (86400 * 30));
    echo "Bienvenido por primera vez. Esta es tu visita número: $contador";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
<form method="post">
    <button type="submit" name="reiniciar">Reiniciar contador</button>
</form>
</body>
</html>
