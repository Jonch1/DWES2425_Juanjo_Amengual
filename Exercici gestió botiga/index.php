<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Producto y Categoría</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: auto; }
        .producto, .categoria { border: 1px solid #ddd; padding: 15px; margin-top: 20px; border-radius: 5px; }
        h2 { margin-top: 0; }
        .label { font-weight: bold; }
    </style>
</head>
<body>

<?php

include_once 'funcions.php';

$producte1 = crearProducte('Samarreta', 'Samarreta de cotó', 19.99);
$categoria1 = crearCategoria('Roba', 'Selecció de roba');

?>

<div class="container">
    <h1>Detalles del Producto y Categoría</h1>

    <div class="producto">
        <h2>Producto</h2>
        <p><span class="label">Nombre:</span> <?php echo htmlspecialchars($producte1->nombreProducto); ?></p>
        <p><span class="label">Descripción:</span> <?php echo htmlspecialchars($producte1->descripcionProducto); ?></p>
        <p><span class="label">Precio:</span> <?php echo htmlspecialchars(number_format($producte1->precio, 2)); ?> €</p>
    </div>

    <div class="categoria">
        <h2>Categoría</h2>
        <p><span class="label">Nombre:</span> <?php echo htmlspecialchars($categoria1->nombreCategoria); ?></p>
        <p><span class="label">Descripción:</span> <?php echo htmlspecialchars($categoria1->descripcionCategoria); ?></p>
    </div>
</div>

</body>
</html>
