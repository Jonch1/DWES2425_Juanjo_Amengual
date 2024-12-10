<?php
// pruebas.php

// "SERVIDOR", "USUARIO", "CONTRASEÑA", "BASE DE DATOS"
$conexion = mysqli_connect("127.0.0.1","root","1234","MiBaseDeDatos");

// COMPROBAMOS LA CONEXIÓN
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "<h1>Bienvenid@ a MySQL !!</h1>";
?>