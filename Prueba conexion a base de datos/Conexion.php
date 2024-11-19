<?php
// Pruebas.php

// "SERVIDOR", "USUARIO", "CONTRASEÑA", "BASE DE DATOS"
$conexion = mysqli_connect("sql108.infinityfree.com","if0_37620349","Juanjo01042003","if0_37620349_001");

// COMPROBAMOS LA CONEXIÓN
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "<h1>Bienvenido a MySQL !!</h1>";
?>