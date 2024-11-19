<?php
session_start();

$background_color = isset($_SESSION['background_color']) ? $_SESSION['background_color'] : 'white';

if (isset($_GET['reset'])) {
    session_unset();
    session_destroy();
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina siguiente</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($background_color); ?>;">

<h1>Color de fondo seleccionado</h1>
<p>El color de fondo seleccionado es: <strong><?php echo htmlspecialchars($background_color); ?></strong></p>

<p><a href="exercici125fonsSessio1.php">Volver a la pàgina anterior</a></p>

<p><a href="exercici125fonsSessio1.php?reset=true">Vaciar la sesion i volver a la pagina anterior</a></p>

</body>
</html>