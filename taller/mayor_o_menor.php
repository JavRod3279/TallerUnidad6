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
                <label for="numer">Digite su edad:</label></br>
                <input type="number" name="edad" placeholder="Digite su edad"/>
            </div>
            <button type="submit" name="verificar" class="btn btn-secondary">VERIFICAR</button>
        </form>
        <?php

        $edad =  0;

            if (isset($_POST['verificar'])){
                $edad = $_POST['edad'];
                if( $edad >= 18){
                echo "ES MAYOR DE EDAD";
                }
                else if($edad > 0 && $edad < 18){
                echo "ES MENOR DE EDAD";
                }
                else{echo "<h1>DATO INCORRECTO</h1>";}
            }
                      
        ?>
    </div>  
</body>
</html>




