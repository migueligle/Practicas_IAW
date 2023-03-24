<?php
//comprobación de existencia de datos por post
if (isset($_POST["texto"]) && strlen($_POST["texto"] > 0)) {
    $texto = "<P>" . $_POST["texto"] . "</P>";

}
    if (isset($_POST["texto2"]) && strlen($_POST["texto2"] > 0)) {
        $texto2 = "<P>" . $_POST["texto2"] . "</P>";
    }
    if (isset($texto) && isset($texto2)) {
        $inter = $texto . $texto2;
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        #texto2{
            display: none;
        }
    </style>
</head>
<body>
<h1>Texto interminable</h1>
<form action="ejercicio2.php" method="post">
    <label for="texto">Texto</label>
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
    <textarea name="texto2" id="texto2" cols="30" rows="10" ><?= $inter ?></textarea>
    <button>Enviar</button>

    <div>
        <?php

        if (isset($inter)){
            echo $inter;
        }


        ?>

    </div>

</body>
</html>
