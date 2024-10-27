<?php

class Producte { //Clase producto con sus 4 propiedades (nombre, precio, descripcion y categoria)
    public $nombreProducto;
    public $precio;
    public $descripcionProducto;
    public $categoria;

    function __construct($nom, $descripcio, $preu, $categoria = null) { //Constructor
        $this->nombreProducto = $nom;
        $this->descripcionProducto = $descripcio;
        $this->precio = $preu;
        $this->categoria = $categoria;
    }

}

    function crearProducte($nom, $descripcio, $preu) { //Función para crear los productos
        $producte = new Producte($nom, $descripcio, $preu);
        return $producte;
    }

    function agregarProducto(Producte $producto) { //Funcion para meter los productos dentro de un array de productos
        global $productos;
        $productos[] = $producto;
}

class Categoria { //Clase categoria con sus dos propiedades (nombre y descripcion)
    public $nombreCategoria;
    public $descripcionCategoria;


    function __construct($nom, $descripcio) { //Constructor
        $this->nombreCategoria = $nom;
        $this->descripcionCategoria = $descripcio;


    }

}

    function crearCategoria($nom, $descripcio) { //Funcion para crear las categorías
    $categoria = new Categoria($nom, $descripcio);

    return $categoria;

    }

    function agregarCategoria(Categoria $categoria) { //Funcion para meter las categorias dentro de un array de categorias
        global $categorias;
        $categorias[] = $categoria;
}

    function agregarCategoriaAProducte(Producte $producte, Categoria $categoria) { //Funcion para asignarle una categoria a un producto
        $producte->categoria = $categoria;


    }

    function obtenirProductesPerCategoria (Categoria $categoria) { //Función para obtener los productos según la categoría seleccionada
        global $productos;
        $productosFiltrados = [];

        foreach ($productos as $producto) {
            if ($producto->categoria && $producto->categoria->nombreCategoria === $categoria->nombreCategoria) {
                $productosFiltrados[] = $producto;
            }
        }

        return $productosFiltrados;

    }
    function mostrarProductos() { //Función para mostrar todos los productos disponibles
        global $productos;

        foreach ($productos as $producto) {
            echo "Nombre del Producto: " . $producto->nombreProducto . "<br>";
            echo "Descripción: " . $producto->descripcionProducto . "<br>";
            echo "Precio: $" . $producto->precio . "<br>";
            echo "Categoría: " . $producto->categoria->nombreCategoria . "<br>";
            echo "<hr><br>";
        }
    }

    function mostrarCategorias() { //Función para mostrar todas las categorias disponibles
        global $categorias;

        foreach ($categorias as $categoria) {
            echo $categoria->nombreCategoria . "<br>";
            echo "<hr><br>";
        }
    }

?>