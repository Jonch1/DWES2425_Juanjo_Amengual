<?php

class Producte {
    public $nombreProducto;
    public $precio;
    public $descripcionProducto;
    public $productos;

    function __construct($nom, $descripcio, $preu) {
        $this->nombreProducto = $nom;
        $this->descripcionProducto = $descripcio;
        $this->precio = $preu;
    }

    function __construct1(array $productes) {
        $this -> productos = $productes;


    }

}

    function crearProducte($nom, $descripcio, $preu) {
        $producte = new Producte($nom, $descripcio, $preu);

        return $producte;
    }

    function mostrarProductes($productes) {



    }

class Categoria {

    public $nombreCategoria;
    public $descripcionCategoria;


    function __construct($nom, $descripcio) {
        $this->nombreCategoria = $nom;
        $this->descripcionCategoria = $descripcio;


    }

    function __construct1(Categoria $categoria) {
        return $this->nombreCategoria;


    }

}

    function crearCategoria($nom, $descripcio) {


    }

    function obtenirProductsPorCategoria (Categoria $categoria) {


    }

   function agregarCategoriaAProducte(Producte $producte, Categoria $categoria) {


   }

?>