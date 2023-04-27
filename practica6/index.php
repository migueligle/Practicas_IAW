<?php
include_once "connection.php";
session_start();
$letra = "a";
$or = "l";
$sql = "SELECT localidades.nombre,poblacion,provincias.nombre FROM localidades " .
    "JOIN provincias ON localidades.n_provincia=provincias.n_provincia where INSTR(SUBSTR(localidades.nombre, 1, 1) ,?)";
if (isset($_GET["letra"])) {
    $letra = $_GET["letra"];

}
if (isset($_GET["or"])) {
    if ($_GET["or"] == "l") {
        $or = "l";
        $sql = "SELECT localidades.nombre,poblacion,provincias.nombre FROM localidades " .
            "JOIN provincias ON localidades.n_provincia=provincias.n_provincia where INSTR(SUBSTR(localidades.nombre, 1, 1) ,?)";
    } elseif ($_GET["or"] == "pr") {
        $or = "pr";
        $sql = "SELECT localidades.nombre,poblacion,provincias.nombre FROM localidades " .
            "JOIN provincias ON localidades.n_provincia=provincias.n_provincia where INSTR(SUBSTR(provincias.nombre, 1, 1) ,?)";
    } elseif ($_GET["or"] == "p") {
        $or = "p";
        $sql = "SELECT localidades.nombre,poblacion,provincias.nombre FROM localidades " .
            "JOIN provincias ON localidades.n_provincia=provincias.n_provincia where INSTR(SUBSTR(localidades.nombre, 1, 1) ,?) order by poblacion desc";
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
    <title>Localidades</title>
    <link rel="stylesheet" href="css/style.css?v=69">
</head>
<body>
<main>
    <h1>Listado de localidades</h1>
</main>

    <?php
    if( isset($_SESSION['error'] )){
        $error=$_SESSION['error'];
        echo "<section id='error'><p>$error</p></section>";
        unset($_SESSION['error']);
    }
    ?>

<nav>

    <ul>
        <span><strong>Listar por letra:</strong></span>
        <li><a href='index.php?letra=A&or=<?= $or ?>'>A</a></li>
        <li><a href='index.php?letra=b&or=<?= $or ?>'>B</a></li>
        <li><a href='index.php?letra=c&or=<?= $or ?>'>C</a></li>
        <li><a href='index.php?letra=d&or=<?= $or ?>'>D</a></li>
        <li><a href='index.php?letra=e&or=<?= $or ?>'>E</a></li>
        <li><a href='index.php?letra=f&or=<?= $or ?>'>F</a></li>
        <li><a href='index.php?letra=g&or=<?= $or ?>'>G</a></li>
        <li><a href='index.php?letra=h&or=<?= $or ?>'>H</a></li>
        <li><a href='index.php?letra=i&or=<?= $or ?>'>I</a></li>
        <li><a href='index.php?letra=j&or=<?= $or ?>'>J</a></li>
        <li><a href='index.php?letra=k&or=<?= $or ?>'>K</a></li>
        <li><a href='index.php?letra=l&or=<?= $or ?>'>L</a></li>
        <li><a href='index.php?letra=m&or=<?= $or ?>'>M</a></li>
        <li><a href='index.php?letra=n&or=<?= $or ?>'>N</a></li>
        <li><a href='index.php?letra=ñ&or=<?= $or ?>'>Ñ</a></li>
        <li><a href='index.php?letra=o&or=<?= $or ?>'>O</a></li>
        <li><a href='index.php?letra=p&or=<?= $or ?>'>P</a></li>
        <li><a href='index.php?letra=q&or=<?= $or ?>'>Q</a></li>
        <li><a href='index.php?letra=r&or=<?= $or ?>'>R</a></li>
        <li><a href='index.php?letra=s&or=<?= $or ?>'>S</a></li>
        <li><a href='index.php?letra=t&or=<?= $or ?>'>T</a></li>
        <li><a href='index.php?letra=u&or=<?= $or ?>'>U</a></li>
        <li><a href='index.php?letra=v&or=<?= $or ?>'>V</a></li>
        <li><a href='index.php?letra=w&or=<?= $or ?>'>W</a></li>
        <li><a href='index.php?letra=x&or=<?= $or ?>'>X</a></li>
        <li><a href='index.php?letra=y&or=<?= $or ?>'>Y</a></li>
        <li><a href='index.php?letra=z&or=<?= $or ?>'>Z</a></li>


    </ul>
</nav>
<br>
<section class="tabla">
    <?php

    echo "<table>";
    echo "<tr>";
    if ($or == "l") {
        echo "  <td><a href='index.php?or=l&letra=$letra'><mark>Localidad</mark></a></td>";
        echo "<td><a href='index.php?or=pr&letra=$letra'>provincia</a></td>";
        echo "<td><a href='index.php?or=p&letra=$letra'>población</a></td>";
    } elseif ($or == "pr") {
        echo "  <td><a href='index.php?or=l&letra=$letra'>Localidad</a></td>";
        echo "<td><a href='index.php?or=pr&letra=$letra'><mark>provincia</mark></a></td>";
        echo "<td><a href='index.php?or=p&letra=$letra'>población</a></td>";


    } elseif ($or == "p") {
        echo "  <td><a href='index.php?or=l&letra=$letra'>localidad</a></td>";
        echo "<td><a href='index.php?or=pr&letra=$letra'>provincia</a></td>";
        echo "<td><a href='index.php?or=p&letra=$letra'><mark>población</mark></a></td>";
    }
    echo "</tr>";


    try {
        $con = getconexion();
        $sql = $sql;
        $st = $con->prepare($sql);
        $st->bind_param("s", $letra);
        $st->execute();
        $st->bind_result($localidad, $poblacion, $provincia);
        while ($st->fetch()) {
            echo "<tr>";
            echo "<td>$localidad</td>";
            echo "<td>$provincia</td>";
            echo "<td>$poblacion</td>";
            echo "</tr>";

        }
    } catch (mysqli_sql_exception $e) {
        $error = getmensajeError($e->getCode());
        $_SESSION["error"]=$error;
    }
    ?>
</section>
</body>
</html>


