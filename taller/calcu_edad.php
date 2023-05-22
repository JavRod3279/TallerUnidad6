<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="mayormenor.css">
    <title>mayor o menor de edad</title>
</head>
<body>    
<a  href= "index.html#section_ejercicios">
    <img class = "home" src="img\laptop.png" href="index.html" alt="imagen">
</a>
    <div class = "main-cal">
        <form action="" method="post">
            <div class = "form-group">
                <h1>MAYOR O MENOR DE EDAD</h1>
            </div>
            <div class="form-group">
                <label for="date">Digite su fecha de nacimiento:</label></br>
                <input type="date" name="fecha" class="form-control" />
            </div>
    </br><button type="submit" name="verificar" class="btn btn-secondary">CALCULAR</button>
        </form>
        <?php

    
            if (isset($_POST['verificar'])){
                date_default_timezone_set("America/Bogota");
                $fecha = new Datetime($_POST['fecha']);
                $hoy = Date('Y-m-d');
                $actual= new DateTime($hoy);
                $diff = $fecha -> diff($actual);
                $edad = $diff ->y;
                if( $edad >= 18){
                    echo " su edad es: $edad años <br> ES MAYOR DE EDAD";
                    }
                    else if($edad > 0 && $edad < 18){
                    echo " su edad es: $edad años <br> ES MENOR DE EDAD";
                    }
                
            }             
?>
    </div>  
</body>
</html>




