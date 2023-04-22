<?php

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <h1>Registrar nuevo usuario</h1>
</nav>
<section>
    <form action="anadirusu.php" method="post">
        <input type="text" name="nombre" placeholder="Escriba su nombre de usuario"><br>
        <input type="text" name="pass" placeholder="Escriba su contraseña"><br>
        <button type="submit">Añadir</button>

    </form>
</section>
<a href="index.php">Volver al inicio</a>
</body>
</html>


