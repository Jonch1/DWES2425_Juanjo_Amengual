<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de volumen de cono</title>
    </head>
    <body>
    <h2>Introduce los valores</h2>

    <form method="get">

        <label for="radio">Radio:</label>
        <input type="text" id="radio" name="radio" required><br><br>

        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $radio = htmlspecialchars($_GET['radio']);
        $altura = htmlspecialchars($_GET['altura']);
        $resultado = 1/3 * M_PI * pow($radio,2) * $altura;

        echo "<h3>El resultado es: $resultado</h3>";
    }
    ?>
    </body>
    </html>
