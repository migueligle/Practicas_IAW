<?php

if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $filasMas = $_GET["filas"];
    $filasMas += 1;
    $columnasMas = $_GET["columnas"];
    $columnasMas += 1;
}

header("location:colores.php?filas=$filasMas&columnas=$columnasMas");
?>
