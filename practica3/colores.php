<?php

$filas = 1;
$columnas = 1;
if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];

}
if ($columnas == 0 && $filas == 0) {
    $columnas = 1;
    $filas = 1;
}
$multi = $filas * $columnas;
$height = $filas * 100 / $multi;
$width = $columnas * 100 / $multi;

?>
<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>colores</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        nav {
            background-color: black;
            height: 100px;
        }

        a {
            color: black;
            margin-top: 1%;
            padding: 0.3em 2em;
            background-color: #1d9d93;
            text-decoration: none;
            border-radius: 10px;
            font-size: 25px;
        }

        a:hover {
            background-color: #78e3d8;
        }

        #mas {
            height: 55px;
            margin-left: 20%;
        }

        #menos {
            height: 55px;
            margin-right: 20%;
        }

        div {
            display: inline-block;
            width: <?=$width?>%;
            height: <?=$height?>%;
        }

        section {
            position: fixed;
            display: inline-block;
            bottom: 0;
            left: 0;
            top: 100px;
            width: 100%;
            height: 100%;
        }

    </style>
</head>
<body>
<nav>

    <a href="mas.php?filas=<?= $filas ?>&columnas=<?= $columnas ?>" id="mas">mas</a>
    <a href="menos.php?filas=<?= $filas ?>&columnas=<?= $columnas ?>" id="menos">menos</a>

</nav>

<section>
    <?php


    for ($cont = 1; $cont <= $multi; $cont++) {
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);
        echo "<div style='background-color: rgb($red,$green,$blue)'></div>";

    }

    ?>

    &nbsp;

</section>

</body>
</html>
