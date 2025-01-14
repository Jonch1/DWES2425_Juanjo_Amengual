<?php
?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Modificar Producto</h2>

<form action="listado.php" method="POST">

    <div class="Nombre">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
    </div>

    <div class="NombreCompleto">
        <label for="nombrecorto">Nombre Corto:</label><br>
        <input type="text" id="nombrecorto" name="nombrecorto" required><br><br>
    </div>

    <div class ="Precio">
        <label for="precio">Precio (€):</label><br>
        <input type="number" id="precio" name="precio" required><br><br>
    </div>

    <div class = "Familia">
        <label for="familia">Familia<br>
            <select id="familia" name="familia">
                <option value="electronica">Electrónica</option>
                <option value="ropa">Ropa</option>
                <option value="comida">Comida</option>
                <option value="libros">Libros</option>
            </select><br><br>
    </div>

    <label for="nombre">Descripción:<br>
        <textarea name="comentame" style="width:300px; height:300px;"></textarea>
    </label><br>
    <a href= "listado.php" class="btn btn-primary btn-custom">Modificar</a>
    <a href= "" class="btn btn-secondary btn-custom">Volver</a>


</form>

</body>
</html>


