<?php

require_once 'funcions.php';

$producte1 = crearProducte('Samarreta', 'Samarreta de cotó', 19.99);

echo "$producte1->nombreProducto, ";
echo "$producte1->descripcionProducto, ";
echo $producte1->precio;

?>
