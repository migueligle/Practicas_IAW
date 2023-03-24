<?php
if (isset($_GET["mod"])) {
    $mod = $_GET["mod"];
    if ($mod == "oscuro") {
        $mod = "dark.css";
    } else {

        $mod = "light.css";
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
    <title>Pagina siguiente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/<?= $mod ?>">
</head>
<body>
<h1>Soy la siguiente página</h1>
<a href="ejercicio1.php?modoatras=<?= $mod ?>">Volver a la principal</a>
</body>
</html>
