<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="datos.css">
</head>
<body>
<div class="container">
    <header class="header">
        <div class="iconos">
            <a href ="https://www.facebook.com/juanjo.amengualfar/"><img src="Imagenes/icono-facebook.png" alt="Facebook" width="60" height="60"></a>
            <a href ="https://x.com/juanjo94314516"><img src="Imagenes/icono-twitter.png" alt="Twitter" width="50" height="50"></a>
            <a href ="https://www.instagram.com/_jonch1_/"><img src="Imagenes/icono-instagram.png" alt="Instagram" width="40" height="40"></a>
            <div class="dropdown">
                <button type="button" class="btn btn-outline-white" data-bs-toggle="dropdown"><img src="Imagenes/dropdown.png" alt="dropdown" height="50" width="50"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mi trabajo</a>
                    <a class="dropdown-item" href="index.html">Página principal</a>
                </div>
            </div>
        </div>
    </header>
    <h1 class="titulo">Gracias por contactar!!</h1><br>
    <h4 class="subtitulo">Trataré de ponerme en contacto con usted lo antes posible</h4>

    <div class="datos">
        <ul>
            <p class="datosintroducidos"><strong>DATOS INTRODUCIDOS:</strong></p>
            <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
            <li><strong>Teléfono:</strong> <?php echo $telefono; ?></li>
            <li><strong>Correo:</strong> <?php echo $correo; ?></li>
        </ul>
    </div>

    <footer class="footer">
        <span>juanjoamengualfar5@gmail.com</span>
        <span>601018859</span>
    </footer>
</div>
</body>
</html>