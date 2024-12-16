<?php
try {
    $host = "127.0.0.1";
    $dbname = "prueba";
    $user = "root";
    $password = "1234";


    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    echo "Conexión exitosa a la base de datos.";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>