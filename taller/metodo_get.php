<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="metodo_get.css">
    <title>metodo GET</title>
</head>
<body>    
   
<a  href= "index.html#section_ejercicios">
    <img class = "home" src="img\laptop.png" href="index.html" alt="imagen">
</a>
    <div class = "main-cal">
        <form action="" method="get">
            <div class = "form-group">
                <h1>CAPTURA DE DATOS GET</h1>
            </div>
            <div class="form-group">
                <label for="text">nombre:</label></br>
                <input type="text" name="nombre" placeholder="Digite su nombre"/>
            </div>
            <div class="form-group">
                <label for="text">Numero 2:</label></br>
                <input type="text" name="apellido" placeholder="Digite su apellido"/>
            </div>
            <div class="form-group">
                <label for="numer">Documento:</label></br>
                <input type="number" name="doc" placeholder="Digite numero de documento"/>
            </div></br>
            <button type="submit" name="ejecutar" class="btn btn-secondary">ENVIAR</button>
        </form>
        <?php


    if (isset($_GET['ejecutar'])){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $doc = $_GET['doc'];
        
        
        echo "NOMBRE : $nombre","<br>","APELLIDO : $apellido","<br>","NUMERO DE DOCUENTO : $doc";
        
    }
              
?>
</div>
</body>
</html>
