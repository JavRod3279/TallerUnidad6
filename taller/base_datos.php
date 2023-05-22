<?php

include 'conexion.php';

$query = mysqli_query($conn, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js\datos.js"></script>
    <link rel="stylesheet" href="basedatos.css">
    <title>Base de datos</title>
</head>

<body>
    <div class="main-cal">
        <a href="index.html#section_ejercicios">
            <img class="home" src="img\laptop.png" href="index.html" alt="imagen">
        </a>
        <a  href= "https://www.localhost\atenea\backend\taller\ingre_datos.php">Ingresar Datos</a>
        <div id="searchtools">
            <h2>Advanced Search Tools</h2>
            <table width="100%" border="0" align="center">
                <tr>
                    <td style="width: 24%;" align="right">NOMBRE: </td>
                    <td style="width: 76%;"><input type="text" id="search-val-name" class="input-textbox"
                            placeholder="All"></td>
                </tr>

                <tr>
                    <td align="right">APELLIDO: </td>
                    <td><input type="text" id="search-val-city" class="input-textbox" placeholder="All"></td>
                </tr>
                <tr>
                    <td>TIENE DOCUMENTO</td>
                    <td style="padding-left: 20px;">
                        Yes: <input type="radio" value="true" name="searchvalhasphone" class="inputradio" checked>
                        &nbsp; &nbsp;
                        No: <input type="radio" value="false" name="searchvalhasphone" class="inputradio">
                    </td>
                </tr>

            </table>
        </div>


        <!-- THE HTML TABLE DATA -->
        <table cellpadding="0" cellspacing="0" id="resultTable">
            
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DOCUMENTO</th>
            </tr>
            
            <?php

            while ($datos = mysqli_fetch_array($query)) {
                $cont = $datos['id'];
                $name = $datos['nombre'];
                $lastn = $datos['apellido'];
                $cc = $datos['documento'];
                echo '
                    <tr>
                    <td>'.$cont.'</td>
                    <td>'.$name.'</td>
                    <td>'.$lastn.'</td>
                    <td>'.$cc.'</td>
                    </tr>'
                    ;
            }

            ?>
           
        </table>
    </div>
</body>

</html>