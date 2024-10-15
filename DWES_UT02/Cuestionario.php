<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario 2º DAW</title>
</head>
<body>
<h2>Responde a las siguientes preguntas (10)</h2>

<form method="get">

    <label for="1">Numero con variable X:</label>
    <input type="text" id="1" name="1" required><br><br>

    <label for="2">Numero sin variable:</label>
    <input type="text" id="2" name="2" required><br><br>

    <input type="submit" value="He acabado">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $Primera = htmlspecialchars($_GET['1']);
    $Segunda = htmlspecialchars($_GET['2']);
    $Tercera = htmlspecialchars($_GET['3']);
    $Cuarta = htmlspecialchars($_GET['4']);
    $Quinta = htmlspecialchars($_GET['5']);
    $Sexta = htmlspecialchars($_GET['6']);
    $Septima = htmlspecialchars($_GET['7']);
    $Octava = htmlspecialchars($_GET['8']);
    $Novena = htmlspecialchars($_GET['9']);
    $Decima = htmlspecialchars($_GET['10']);

    echo "<h3></h3>";
}
?>
</body>
</html>

