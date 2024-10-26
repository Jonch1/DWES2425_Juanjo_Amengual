<?php

class Producte {
    public $nombreProducto;
    public $precio;
    public $descripcionProducto;
    public $productos = [];

    function __construct($nom, $descripcio, $preu) {
        $this->nombreProducto = $nom;
        $this->descripcionProducto = $descripcio;
        $this->precio = $preu;
    }

}

    function crearProducte($nom, $descripcio, $preu) {
        $producte = new Producte($nom, $descripcio, $preu);
        return $producte;
    }

function mostrarProductes() {
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


    }

    function obtenirProductsPorCategoria (Categoria $categoria) {


    }

?>