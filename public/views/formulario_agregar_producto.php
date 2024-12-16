<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Productos</title>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                <header class="header">
                    <h1>Escuela de Futbol </h1>
                    <h1>"La Pulga"</h1>
                    <p>La Pasión nos Une</p>

<form action="agregar_producto.php" method="post" enctype="multipart/form-data">
    <label>Nombre:</label><input type="text" id="nombre_producto" name="nombre_producto" autocomplete="off">
    <br>
    <label>Talle:</label><input type="text" id="marca_producto" name="marca_producto" autocomplete="off">
    <br>
    <label>Stock:</label><input type="text" id="marca_producto" name="marca_producto" autocomplete="off">
    <br>
    <label>Precio:</label><input type="text" id="marca_producto" name="marca_producto" autocomplete="off">
    <br>
    <label>Imagen:</label><input type="file" id="imagen_producto" name="imagen_producto">
    <br>
    <button><a href="./productos.php">Agregar</button><a href="./productos.php">Volver</a>
</form>
