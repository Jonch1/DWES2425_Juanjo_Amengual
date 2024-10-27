<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Producto y Categoría</title>
    <style>
        h1 {text-align: center}
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: auto; }
        .producto, .categoria, .filtrado{ border: 1px solid #ddd; padding: 15px; margin-top: 20px; border-radius: 5px; }
        h2 { margin-top: 0; }
        .label { font-weight: bold; }
    </style>
</head>
<body>

<?php

include_once 'funcions.php';

//Productos
$producte1 = crearProducte('Samarreta', 'Samarreta de cotó', 19.99);
$producte2 = crearProducte('Pantalons', 'Pantalons vaquer', 39.99);
$producte3 = crearProducte('Samsung', 'Samsung Galaxy S24', 999.99);

//Categorias
$categoria1 = crearCategoria('Roba', 'Selecció de roba');
$categoria2 = crearCategoria('Home', 'Productes per a home');
$categoria3 = crearCategoria('Electronica', 'Smartphone de última generación');

//Funcion agregar categoria al producto
agregarCategoriaAProducte($producte1, $categoria1);
agregarCategoriaAProducte($producte2, $categoria2);
agregarCategoriaAProducte($producte3, $categoria3);

//Funcion agregar producto al array
agregarProducto($producte1);
agregarProducto($producte2);
agregarProducto($producte3);

//Funcion obtener productos segun su categoría
$productosElegidos = obtenirProductesPerCategoria($categoria1);

?>

<div class="container">
    <h1>Detalles del Producto y Categoría</h1>

    <div class="producto">
        <h2>Productos</h2> <?php mostrarProductos(); ?>
    </div>

    <div class="categoria">
        <h2>Categorías</h2> <?php mostrarCategorias(); ?>
    </div><br><br>

    <div class="filtrado">
        <h2>Filtrado manual por categoría</h2>
        <?php foreach ($productosElegidos as $producto) { ?>
        <p><span class="label">Nombre:</span> <?php echo htmlspecialchars($producto->nombreProducto); ?></p>
        <p><span class="label">Descripción:</span> <?php echo htmlspecialchars($producto->descripcionProducto); ?></p>
        <p><span class="label">Precio:</span> <?php echo htmlspecialchars($producto->precio); }?></p>
    </div><br><br>

    <div class="filtrado">
        <h2>Filtro por categoría</h2>

            <form method="post">
                <input type="radio" id="Roba" name="categoria" value="Roba">
                <label for="Roba">Ropa</label><br>
                <input type="radio" id="Home" name="categoria" value="Hombre">
                <label for="Home">Hombre</label><br>
                <input type="radio" id="Electronica" name="categoria" value="Electronica">
                <label for="Electronica">Electronica</label><br><br>
                <input type="submit" value="Enviar"><br><br>
            </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoriaSeleccionada = $_POST['categoria'];

            switch ($categoriaSeleccionada) {
                case 'Roba':
                    echo "<h2>Ropa</h2>";
                        echo "<p>Nombre del Producto: $producte1->nombreProducto</p>";
                        echo "<p>Descripción: $producte1->descripcionProducto</p>";
                        echo "<p>Precio: $producte1->precio</p>";
                    break;

                case 'Hombre':
                    echo "<h2>Hombre</h2>";
                    echo "<p>Nombre del Producto: $producte2->nombreProducto</p>";
                    echo "<p>Descripción: $producte2->descripcionProducto</p>";
                    echo "<p>Precio: $producte2->precio</p>";
                    break;

                case 'Electronica':
                    echo "<p>Nombre del Producto: $producte3->nombreProducto</p>";
                    echo "<p>Descripción: $producte3->descripcionProducto</p>";
                    echo "<p>Precio: $producte3->precio</p>";
                    break;
            }
        }
        ?>

    </div>

</div>

</body>
</html>