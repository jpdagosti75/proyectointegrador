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

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        //todo bien, puedo seguir con el proceso!
        if(!empty($id)){
            //todo bien, puedo seguir con el proceso!
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_Integrador2");

            $query = "DELETE FROM productos WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);

            mysqli_close($conexion);

            if($resultado){
                //entro cuando $resultado es igual a verdadero!
                echo "Salio todo bien!";
                echo "<br>";
                header('Location: productos.php');
            }
            else{          
                //todo mal, no borro nada!
                echo "Error al borrar el producto!";
                echo "<br>";
            }
        }
        else{            
            //todo mal, no borro nada!
            echo "Error al borrar el producto!";
            echo "<br>";
        }
    }
    else{
        //todo mal, no borro nada!
        echo "Error al borrar el producto!";
        echo "<br>";
    }

?>