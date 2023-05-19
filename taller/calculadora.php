<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="calculadora.css">
    <title>Calculadora</title>
</head>

<body>
    
<a  href= "index.html#section_ejercicios">
    <img class = "home" src="img\laptop.png" href="index.html" alt="imagen">
</a>
    <div class = "main-cal">
        <form action="" method="post">
            <div class = "form-group">
                <h1>CALCULADORA</h1>
            </div>
            <div class="form-group">
                <label for="numer">Numero 1:</label></br>
                <input type="number" name="num1" placeholder="Digite el primer numero"/>
            </div>
            <div class="form-group">
                <label for="numer">Numero 2:</label></br>
                <input type="number" name="num2" placeholder="Digite el segundo numero"/>
            </div>
            <div class="form-group"></br>
                <label for="numer">operación:</label></br>
                <select name="operacion" id="oper">
                    <option value="sum">Suma</option>
                    <option value="res">Resta</option>
                    <option value="mul">Multiplicacion</option>
                    <option value="divi">Division</option>
                </select>                
            </div>
            <button type="submit" name="ejecutar" class="btn btn-secondary">RESULTADO</button>
        </form>
        <?php

        $n1 = $n2 = $resultado = $operacion =  0;

            if (isset($_POST['ejecutar'])){
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $operacion = $_POST['operacion'];
                $resultado = 0;
                
                switch($operacion){
                    case 'sum':
                        $resultado = $n1 + $n2;
                        break;
                    case 'res':
                        $resultado = $n1 - $n2;
                        break;
                    case 'mul':
                        $resultado = $n1 * $n2;
                        break;
                    case 'divi':
                        $resultado = $n1 / $n2;
                        break;
                }
                
                echo "<h1>".$resultado."<n2>";
            }
        ?>
    </div>  
</body>
</html>




