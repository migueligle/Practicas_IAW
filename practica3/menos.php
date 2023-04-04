<?php
if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
    $filasMenos = $_GET["filas"];
    $filasMenos -= 1;
    $columnasMenos = $_GET["columnas"];
    $columnasMenos -= 1;
}

header("location:colores.php?filas=$filasMenos&columnas=$columnasMenos");
?>
