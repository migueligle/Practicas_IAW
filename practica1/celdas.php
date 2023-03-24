<?php
//existencia de datos por post y calulo medida de alt y anch de los divs con regla de tres para hayar el porcentaje
if (isset($_POST["color1"]) && isset($_POST["color2"])
&& isset($_POST["filas"]) && is_numeric($_POST["filas"])
&& isset($_POST["colum"]) && is_numeric($_POST["colum"])){

$color1 = $_POST["color1"];
$color2 = $_POST["color2"];
$filas = $_POST["filas"];
$colum = $_POST["colum"];

$restoco = $colum % 2;
$restofi = $filas % 2;

$multi = $filas * $colum;
$filasw = $filas * 100 / $multi;
$columnash = $colum * 100 / $multi;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        div {
            display: inline-block;
            width: <?=$filasw?>%;
            height: <?=$columnash?>%;
        }
    </style>
</head>
<body>
<section>
    <?php
    //if para comprobar que los datos son correctos y si no enviarlos a la pagina error3.php
    // bucle for para recorrer todos los divs
    if ($restofi == 0 && $restoco !== 0 &&
        $colum > 0 && $filas > 0 && $colum <= 100 && $filas <= 100) {

        for ($cont = 1; $cont <= $multi; $cont++) {
            echo "<div style='background-color:$color1 '></div>";
            echo "<div style='background-color:$color2 '></div>";
        }
    } else {
        header("location:error3.php?colum=$colum&filas=$filas ");
    }
    }
    else {
        header("location:ejercicio3.php");
    }
    ?>
</section>
</body>
</html>
