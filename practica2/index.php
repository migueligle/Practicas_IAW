<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mejor Pelicula del año</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<br>
<br>
<h1>Votación de la mejor película</h1>
<form action="index.php" method="post">
    <label for="peli1">Todo a la vez en todas partes</label>
    <input type="text" name="peli1" id="peli1" <?php if (isset($_COOKIE["peli1"])) {
        echo "value=" . $_COOKIE["peli1"];
        '""';
    } ?> >
    <label for="peli2">Sin novedad en el frente</label>
    <input type="text" name="peli2" id="peli2" <?php if (isset($_COOKIE["peli2"])) {
        echo "value=" . $_COOKIE["peli2"];
        '""';
    } ?>>
    <label for="peli3">Almas en pena de Inisherin</label>
    <input type="text" name="peli3" id="peli3" <?php if (isset($_COOKIE["peli3"])) {
        echo "value=" . $_COOKIE["peli3"];
        '""';
    } ?>>
    <button type="submit">Votar</button>
</form>
<form action="borrar.php" method="post">
    <button class="secondary">Borrar</button>
</form>
<br>
<br>
<section>
    <?Php
    if (isset($_POST["peli1"]) && isset($_POST["peli2"]) && isset($_POST["peli3"])) {
        $peli1 = $_POST["peli1"];
        $peli2 = $_POST["peli2"];
        $peli3 = $_POST["peli3"];
        if (is_numeric($peli1) && $peli1 <= 10 && is_numeric($peli2) && $peli2 <= 10 && is_numeric($peli3) && $peli3 <= 10) {
            setcookie("peli1", $peli1, time() + 60 * 60 * 24 * 7);
            setcookie("peli2", $peli2, time() + 60 * 60 * 24 * 7);
            setcookie("peli3", $peli3, time() + 60 * 60 * 24 * 7);
            $barra1 = $peli1 * 10;
            $barra2 = $peli2 * 10;
            $barra3 = $peli3 * 10;
            echo "<br><h1>Resultado</h1><br>";
            echo "<p>Todo a la vez en todas partes: $peli1 votos</p>";
            echo " <p style='width: $barra1%; background-color: red;'>&nbsp</p>";
            echo "<p>Sin novedad en el frente: $peli2 votos</p>";
            echo " <p style='width: $barra2%; background-color: green;'>&nbsp</p>";
            echo "<p>Almas en pena de inisherin: $peli3 votos</p>";
            echo " <p style='width: $barra3%; background-color: blue;'>&nbsp</p>";
        } else {
            if (!is_numeric($peli1) || !is_numeric($peli2) || !is_numeric($peli3)) {
                echo "<h1>Error</h1>";
                echo "<p class='error'>no puede contener caracteres alfabeticos</p>";
            } elseif ($peli1 > 10 || $peli2 > 10 || $peli3 > 10) {
                echo "<h1>Error</h1>";
                echo "<p class='error'>no pueden ser valores mayores a 10</p>";
            }
        }
    }
    ?>
</section>
</body>
</html>
