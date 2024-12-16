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

<?php 

    $producto = array();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        //todo bien, puedo seguir con el proceso!
        if(!empty($id)){
            //todo bien, puedo seguir con el proceso!
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_Integrador2");

            $query = "SELECT * FROM productos WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);

            $producto = mysqli_fetch_assoc($resultado);

            mysqli_close($conexion);
        }
    }
?>

<form action="editar_producto.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="id_producto" name="id_producto" value="<?php echo ((isset($producto["id_producto"])) ? ($producto["id_producto"]) : ("")) ?>">
    <label>Nombre:</label><input type="text" value="<?php echo ((isset($producto["nombre_producto"])) ? ($producto["nombre_producto"]) : ("")) ?>" id="nombre_producto" name="nombre_producto" autocomplete="off">
    <br>
    <label>Talle:</label><input type="text" value="<?php echo ((isset($producto["talle_producto"])) ? ($producto["talle_producto"]) : ("")) ?>" id="stock_producto" name="talle_producto" autocomplete="off">
    <br>
    <label>Stock:</label><input type="text" value="<?php echo ((isset($producto["stock_producto"])) ? ($producto["stock_producto"]) : ("")) ?>" id="stock_producto" name="stock_producto" autocomplete="off">
    <br>
    <label>Precio:</label><input type="text" value="<?php echo ((isset($producto["precio_producto"])) ? ($producto["precio_producto"]) : ("")) ?>" id="precio_producto" name="precio_producto" autocomplete="off">
    <br>
    <img style="max-width: 150px;" class="imagen-preview" src="<?php echo ((isset($producto["imagen_producto"])) ? ($producto["imagen_producto"]) : ("")) ?>">
    <br>
    <label>Imagen:</label><input type="file" id="imagen_producto" name="imagen_producto">
    <br>
    <button><a href="./productos.php">Agregar</button><a href="./productos.php">Volver</a>
</form>
