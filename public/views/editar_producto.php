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

if(isset($_POST["id_producto"])){
$id = $_POST["id_producto"];
if(!empty($id)){
$nombre_producto = $_POST["nombre_producto"];
$talle_producto = $_POST["talle_producto"];
$stock_producto = $_POST["stock_producto"];
$precio_producto = $_POST["precio_producto"];
    
    
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_Integrador2");

        //me fijo si cargue una nueva foto (si cargue, modifico ese campo de la base de datos)
        //si no cargue, no lo modifico
        if(!empty($_FILES["imagen_producto"]["name"])){

            //TRABAJO CON IMAGENES!
            $imagen_producto = $_FILES["imagen_producto"];
            
            //OBTENGO LA EXTENSION DEL ARCHIVO SUBIDO (LO NECESITO PARA BASE64)
            //$type = pathinfo($_FILES["imagen_producto"]["name"], PATHINFO_EXTENSION);
            $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION);
            
            //OBTENGO EL CONTENIDO DE LA IMAGEN EN FORMATO STRING (LO NECESITO PARA BASE64)
            //$data = file_get_contents($_FILES["imagen_producto"]["tmp_name"]);
            $data = file_get_contents($imagen_producto["tmp_name"]);
            
            //OBTENGO LA CODIFICACION EN BASE64 DEL CONTENIDO DE LA IMAGEN
            $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);

            //la query incluye la imagen
            $query = "UPDATE productos SET nombre_producto = '".$nombre_producto."', talle_producto = '".$talle_producto."', stock_producto = '".$stock_producto."', precio_producto = '".$precio_producto."'imagen_producto = '".$imagen_base64."' WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);
        }    
        else{
            //la query no incluye la imagen
            $query = "UPDATE productos SET nombre_producto = '".$nombre_producto."', talle_producto = '".$talle_producto."'stock_producto = '".$stock_producto."', precio_producto = '".$precio_producto."' WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);
        }    
        
        if($resultado){
            //salio todo bien!
            header('Location: productos.php');
        }
        else{
            //mensaje de error!
        }
        
        mysqli_close($conexion);
    }
}
?>