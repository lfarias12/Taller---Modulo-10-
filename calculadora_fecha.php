<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora_fecha.css">
    <title>Mayor o menor de edad</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Por favor seleccione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
    </form>

    <?php
     //$comprovar = var_dump($_POST);

     const constante_18 = 18;
     define ("constante0", "0");

    if (isset($_POST['verificar'])) {

        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2= new DateTime(date("y-m-d"));

        $fecha_actual = $fecha -> diff ($date2);

        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;

        if ($edad_actual >= constante_18) {
            echo "<h1>Es mayor de edad, dado que tiene " .$edad_actual. " años </h1>";
        } 
        #else if (18> $edad && 0 < $edad )
        
        else if ($edad_actual < constante_18 && $edad_actual> constante0) {
            echo "<h2>Es memor de edad, dado que tiene " .$edad_actual. " años </h2>";
        } else { 
            echo "<h2>No valido</h2>";
        }

        echo "<br>Usted tiene Años: ". $edad_actual." <br>Usted tiene Años Meses: ". $edad_meses." <br>Usted tiene Años Meses Dias: ". $edad_dias;  
        //echo $comprovar;
    }

    ?>

    </div>
</body>
</html>