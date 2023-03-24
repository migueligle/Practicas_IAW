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
        p {
            background-color: #fd5f5f;
            size: 1.2em;
        }
    </style>
</head>
<body>
<h1>Error en los datos</h1>
<a href="ejercicio3.php">Volver al formulario</a>
<?php
//if para la comprobacion de la existencia de datos enviados por get
if (isset($_GET["colum"]) && isset($_GET["filas"])) {

    $colum = $_GET["colum"];
    $filas = $_GET["filas"];
}
//hayo el resto de las columnas y filas para saber si es par o impar y realizar el control de errores
$restoco = $colum % 2;
$restofi = $filas % 2;
if ($restofi != 0 && $restoco == 0) {

    echo "<p><strong>error las filas no son par y las columnas no son impar</strong></p>";
} elseif ($restofi != 0 && $restoco != 0) {
    echo "<p><strong>error las filas no son par</strong></p>";
} elseif ($restofi != 0 && $restoco != 0 && $filas >= 100) {
    echo "<p><strong>error las columnas no son impar y es mayor que 100</strong></p>";
} elseif ($restofi != 0 && $restoco != 0 && $colum >= 100) {
    echo "<p><strong>error las columnas no son impar es mayor que 100</strong></p>";
} elseif ($restofi == 0 && $restoco == 0) {
    echo "<p><strong>error las columnas no son impar</strong></p>";
} elseif ($restofi == 0 && $restoco == 0 && $filas >= 100) {
    echo "<p><strong>error las columnas no son impar y las filas son mayor que 100</strong></p>";
} elseif ($restofi == 0 && $restoco == 0 && $colum >= 100) {
    echo "<p><strong>error las columnas no son impar y es mayor que 100</strong></p>";
} elseif ($colum < 0 && $filas < 0) {
    echo "<p><strong>error has introduccido numeros negativos</strong></p>";
} elseif ($colum >= 100 && $filas >= 100) {
    echo "<p><strong>error has introduccido numeros mayores a 100</strong></p>";
}
?>
</body>
</html>
