<?php
$tareas = "";
if (isset($_COOKIE["tarea"])) {
    $tareas = json_decode($_COOKIE["tarea"], true);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>

    <style>

        html {
            font-family: sans-serif;

        }

        h1 {
            color: #78e3d8;
            text-align: center;
            font-size: 3.5em;
        }

        form {

            border-collapse: collapse;
        }

        input {

            color: #fd5f5f;
            width: 85%;
            height: 56px;
            font-size: 1.8em;
            border-radius: 12px 0 0 12px;
            border: 1px solid darkred;
        }

        button {

            position: fixed;
            width: 8%;
            font-size: 2em;
            background-color: red;
            border: none;
            height: 60px;
            border-radius: 0 10px 10px 0;
            outline: none;

        }

        a {
            display: inline-block;
            text-decoration: none;
            background-color: red;
            color: white;
            border-radius: 2px;
            padding-top: 2px;
            height: 20px;
            width: 80px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Lista de tareas</h1>
<form action="tareas.php">
    <input type="text" name="tarea" placeholder="Nueva tarea">
    <button type="submit">+</button>
</form>
<section>
    <?php
    echo "<ul>";
    if ($tareas) {
        foreach ($tareas as $i => $tarea) {
            echo "<li>$tarea <a href='quitar.php?id=$i'>Eliminar</a></li><br>";
        }
    }

    echo "</ul>";
    ?>

</section>

</body>
</html>
