<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario 1</title>
</head>
<body>

<h1>Formulario 1: Datos Personales</h1>

<form action="exercici127formulari2.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="url">URL:</label>
    <input type="url" id="url" name="url"><br><br>

    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
    </select><br><br><br>

    <button type="submit">Enviar datos</button>
</form>

</body>
</html>