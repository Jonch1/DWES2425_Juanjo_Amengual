<?php

class Producte {
    public $nombreProducto;
    public $precio;
    public $descripcionProducto;
    public $categoria;

    function __construct($nom, $descripcio, $preu, $categoria = null) {
        $this->nombreProducto = $nom;
        $this->descripcionProducto = $descripcio;
        $this->precio = $preu;
        $this->categoria = $categoria;
    }

}

    function crearProducte($nom, $descripcio, $preu) {
        $producte = new Producte($nom, $descripcio, $preu);
        return $producte;
    }

    function agregarProducto(Producte $producto) {
        global $productos;
        $productos[] = $producto;
}

class Categoria {
    public $nombreCategoria;
    public $descripcionCategoria;


    function __construct($nom, $descripcio) {
        $this->nombreCategoria = $nom;
        $this->descripcionCategoria = $descripcio;


    }

}

    function crearCategoria($nom, $descripcio) {
    $categoria = new Categoria($nom, $descripcio);

    return $categoria;

    }

    function agregarCategoriaAProducte(Producte $producte, Categoria $categoria) {
        $producte->categoria = $categoria;


    }

    function obtenirProductesPerCategoria (Categoria $categoria) {
        global $productos;
        $productosFiltrados = [];

        foreach ($productos as $producto) {
            if ($producto->categoria && $producto->categoria->nombreCategoria === $categoria->nombreCategoria) {
                $productosFiltrados[] = $producto;
            }
        }

        return $productosFiltrados;

    }
    function mostrarProductos() {
        global $productos;

        foreach ($productos as $producto) {
            echo "Nombre del Producto: " . $producto->nombreProducto . "<br>";
            echo "Descripción: " . $producto->descripcionProducto . "<br>";
            echo "Precio: $" . $producto->precio . "<br>";
            echo "Categoría: " . $producto->categoria->nombreCategoria . "<br>";
            echo "<hr><br>";
        }
    }

    function mostrarCategorias() {
        global $productos;

        foreach ($productos as $producto) {
            echo $producto->categoria->nombreCategoria . "<br>";
            echo "<hr><br>";
        }
    }


?>