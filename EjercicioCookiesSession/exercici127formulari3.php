<?php
session_start();

// Guardar los datos del segundo formulario en la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['convivientes'] = $_POST['convivientes'];
    $_SESSION['aficiones'] = $_POST['aficiones'];
    $_SESSION['menu'] = $_POST['menu'];
}

if (isset($_GET['end'])) {
    session_unset();
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de los Datos</title>
</head>
<body>

<h1>Resumen de los Datos Introducidos</h1>

<ul>
    <li><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['nombre']); ?></li>
    <li><strong>Apellidos:</strong> <?php echo htmlspecialchars($_SESSION['apellidos']); ?></li>
    <li><strong>Correo electronico:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></li>
    <li><strong>URL:</strong> <?php echo htmlspecialchars($_SESSION['url']); ?></li>
    <li><strong>Sexo:</strong> <?php echo htmlspecialchars($_SESSION['sexo']); ?></li>
    <li><strong>Número de convivientes:</strong> <?php echo htmlspecialchars($_SESSION['convivientes']); ?></li>
    <li><strong>Aficiones:</strong> <?php echo htmlspecialchars($_SESSION['aficiones']); ?></li>
    <li><strong>Menú seleccionado:</strong> <?php echo htmlspecialchars($_SESSION['menu']); ?></li>
</ul>

<p><button type="submit"><a href="exercici127formulari3.php?end=true">Finalizar formulario</a></p></button>

</body>
</html>