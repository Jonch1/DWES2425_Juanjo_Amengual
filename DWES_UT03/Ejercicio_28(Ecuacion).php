<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de volumen de cono</title>
    </head>
    <body>
    <h1>Introduce los valores</h1>

    <form method="get">

        <label for="Ax">Número con variable X:</label>
        <input type="text" id="Ax" name="Ax" required><br><br>

        <label for="B">Numero sin variable:</label>
        <input type="text" id="B" name="B" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $Ax = htmlspecialchars($_GET['Ax']);
        $B = htmlspecialchars($_GET['B']);
        $resultado = (-$B) / $Ax;

        echo "<h3>El resultado de $Ax x + $B = 0 es: $resultado</h3>";
    }
    ?>

    </body>
    </html>