<?php
session_start();

// Guardar los datos del primer formulario en la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellidos'] = $_POST['apellidos'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['url'] = $_POST['url'];
    $_SESSION['sexo'] = $_POST['sexo'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario 2</title>
</head>
<body>

<h1>Formulario 2: Informació Addicional</h1>

<form action="exercici127formulari3.php" method="post">
    <label for="convivientes">Número de convivientes:</label>
    <input type="number" id="convivientes" name="convivientes" min="0" required><br>

    <label for="aficiones">Aficiones:</label>
    <input type="text" id="aficiones" name="aficiones"><br>

    <label for="menu">Elige un menú:</label>
    <select name="menu" id="menu" required>
        <option value="normal">Normal</option>
        <option value="vegetariano">Vegetariano</option>
    </select><br>

    <button type="submit">Enviar datos</button>

</form>



</body>
</html>