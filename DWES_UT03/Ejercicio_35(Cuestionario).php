<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario 2º DAW</title>
</head>
<body>
<h2>Responde a las siguientes 10 preguntas</h2>
<h3>Cada respuesta correcta sumará un punto, buena suerte :)</h3><br>

<form method="post">

    <label for="1">Este ciclo se llama DAM o DAW?</label><br>
    <input type="text" id="1" name="1" required><br><br>

    <label for="2">Como se llama el profesor de Entorno Cliente?</label><br>
    <input type="text" id="2" name="2" required><br><br>

    <label for="3">Cual es el lenguaje que utilizamos mas en entorno servidor?</label><br>
    <input type="text" id="3" name="3" required><br><br>

    <label for="4">Cual es el lenguaje que utilizamos mas en entorno cliente?</label><br>
    <input type="text" id="4" name="4" required><br><br>

    <label for="5">Que directiva se utiliza en Apache para crear un directorio?</label><br>
    <input type="text" id="5" name="5" required><br><br>

    <label for="6">Que directiva se utiliza en Apache para crear un archivo?</label><br>
    <input type="text" id="6" name="6" required><br><br>

    <label for="7">Que directiva se utiliza en Apache para ser usuario root?</label><br>
    <input type="text" id="7" name="7" required><br><br>

    <label for="8">Que lenguaje utilizamos en Diseño de interfaces para aplicar un estilo?</label><br>
    <input type="text" id="8" name="8" required><br><br>

    <label for="9">JavaScript es exactamente igual que Java pero para prog web? (Si/No)</label><br>
    <input type="text" id="9" name="9" required><br><br>

    <label for="10">Que tipo de lenguaje es PHP?</label><br>
    <input type="text" id="10" name="10" required><br><br><br>

    <input type="submit" value="He acabado">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Primera = htmlspecialchars($_POST['1']);
    $Segunda = htmlspecialchars($_POST['2']);
    $Tercera = htmlspecialchars($_POST['3']);
    $Cuarta = htmlspecialchars($_POST['4']);
    $Quinta = htmlspecialchars($_POST['5']);
    $Sexta = htmlspecialchars($_POST['6']);
    $Septima = htmlspecialchars($_POST['7']);
    $Octava = htmlspecialchars($_POST['8']);
    $Novena = htmlspecialchars($_POST['9']);
    $Decima = htmlspecialchars($_POST['10']);

    $PuntosTotales = 0;

    if (strcasecmp($Primera,"DAW") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Segunda,"Xavi") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Tercera,"PHP") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Cuarta,"JavaScript") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Quinta,"mkdir") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Sexta,"nano") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Septima,"sudo su") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Octava,"CSS") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Novena,"No") == 0) {
        $PuntosTotales++;
    }
    if (strcasecmp($Decima,"Interpretado") == 0) {
        $PuntosTotales++;
    }

    echo "<h3>Has sacado un total de $PuntosTotales puntos.</h3>";
}
?>

</body>
</html>
