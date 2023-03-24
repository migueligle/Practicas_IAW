<?php
//modo por defecto y modo elegido mediante formulario
$modo = "light.css";
if (isset($_GET["mod"])) {
    $mod = $_GET["mod"];
    $modo = "";
    if ($_GET["mod"] == "oscuro") {
        $modo = "dark.css";
    } else {
        $modo = "light.css";
    }
}
//if de cuando volvemos hacia atras en la siguiente pagina para tener el mismo modo
if (isset($_GET["modoatras"])) {
    $modoatras = $_GET["modoatras"];
    if ($modoatras == "dark.css") {
        $modo = "dark.css";
    } else {

        $modo = "light.css";
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/<?= $modo ?>">
</head>
<body>
<h1>Elige el modo de trabajo</h1>
<form action="ejercicio1.php" method="get">
    <input type="radio" name="mod" id="mod" value="claro" checked>
    <label for="mod" id="mod">Claro</label>
    <input type="radio" name="mod" id="mod" value="oscuro">
    <label for="mod" id="mod">Oscuro</label>
    <button>Enviar</button>
</form>
<br>


<a href='siguiente1.php?mod=<?= $mod ?>'>Ir a la siguiente página</a>
<br>
<h1>Texto de prueba</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias dolorem eveniet maiores, numquam porro quisquam quod rem veritatis.
    Accusamus asperiores expedita facilis laudantium maxime molestias quaerat
    ratione repellat repellendus tenetur.</p>
<h1>Tabla de prueba</h1>
<table>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>
    <tr>
        <td>celda01</td>
        <td>celda02</td>
        <td>celda03</td>
        <td>celda04</td>
        <td>celda05</td>
        <td>celda06</td>
        <td>celda07</td>
        <td>celda08</td>
        <td>celda09</td>
        <td>celda10</td>
    </tr>

</table>
</body>
</html>
