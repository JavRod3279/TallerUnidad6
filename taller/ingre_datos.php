<?php

include 'conexion.php';

$query = mysqli_query($conn, "SELECT * FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">

<head>    <meta charset="UTF-8">
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
    <title>ingresar datos</title>
</head>

<body>
    <a href="index.html#section_ejercicios">
        <img class="home" src="img\laptop.png" href="index.html" alt="imagen">
    </a>
    <a href="https://www.localhost\atenea\backend\taller\base_datos.php">Atras </a>
    <div class="main-cal">
        <form action="" method="post">
            <div class="form-group">
                <h1>Ingresar registro de Usuario</h1>
            </div>
            <div class="form-group">
                <label for="text">Nombre</label></br>
                <input type="text" name="name" placeholder="Digite su nombre" />
                <label for="text">Apellido:</label></br>
                <input type="text" name="apellido" placeholder="Digite su Apellido" />
                <label for="numer">Digite su documento:</label></br>
                <input type="number" name="doc" placeholder="Digite su numero de documento" />
                <button type="submit" name="ingresar" class="btn btn-secondary">Registrar Usuario</button>
            </div>    
        </form>

        <?php
        if(isset($_POST['ingresar'])){
            $name = $_POST['name'];
            $apell = $_POST['apellido'];
            $doc = $_POST['doc'];
            $datos = "INSERT INTO usuarios(nombre, apellido, documento) VALUES('$name','$apell',$doc)";

            mysqli_query($conn, $datos);
            echo 'Usuario Ingresado con exito';
        }
        
        ?>
    
</body>

</html>