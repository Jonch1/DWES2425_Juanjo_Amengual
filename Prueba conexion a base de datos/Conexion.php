<?php
$host = "127.0.0.1";
$user = "root";
$password = "1234";
$database = "prueba";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
