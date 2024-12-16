<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Productos</title>
</head>
<head>
</style>
</head>
<body>
<header class="header">
    <h1>Escuela de Futbol </h1>
    <h1>"La Pulga"</h1>
    <p>La Pasión nos Une</p>
    <div class="admin-links"> 
        <a href="../../index.html">Volver</a>
    </div>
    </header>
<h1>Tienda Online</h1>
<section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <a href="./formulario_agregar_producto.php">Agregar producto</a>
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Producto</th>
                                        <th>Talle</th>
                                        <th>Stock</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_Integrador2");

                                    $query = "SELECT * FROM productos";
                                    $resultado = mysqli_query($conexion, $query);

                                    while($unaFila = mysqli_fetch_assoc($resultado)){
                                        echo '<tr class="alert" role="alert">
                                                <td>
                                                    <img src="'.$unaFila["imagen_producto"].'">
                                                </td>'.$unaFila["imgagen_producto"].'
                                                <td>
                                                    <div class="email">
                                                        <span>'.$unaFila["nombre_producto"].'</span>
                                                        
                                                    </div>
                                                </td>
                                                <td>'.$unaFila["talle_producto"].'</td>
                                                <td>'.$unaFila["stock_producto"].'</td>
                                                <td>$'.$unaFila["precio_producto"].'</td> 
                                               
                                                <td>
                                                <a href="eliminar_producto.php?id='.$unaFila["id_producto"].'">Eliminar</a>
                                                <a href="formulario_editar_producto.php?id='.$unaFila["id_producto"].'">Editar</a>
                                                </td>                                                
                                            </tr>';
                                    }
                                    mysqli_close($conexion);
                                ?>                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81e64de6db471a92","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
    </body>
</html>
