<?php
include_once "connection.php";
session_start();


if (isset($_POST["usuario"]) && strlen($_POST["usuario"]) > 0 &&
    isset($_POST["pass"]) & strlen($_POST["pass"]) > 0) {
    $nombre = htmlspecialchars($_POST["usuario"]);
    $pass = htmlspecialchars($_POST["pass"]);

    if (isset($_SESSION['usuario']) && isset($_SESSION['contraseña']) && isset($_SESSION['id'])) {
        $nombre = $_SESSION['usuario'];
        $pass = $_SESSION['contraseña'];
        $id = $_SESSION['id'];

        try {
            $con = getconexion();
            $sql = "SELECT id_usuario,nombre,pass from usuarios where nombre=? AND pass=? ";
            $st = $con->prepare($sql);
            $st->bind_param("ss", $nombre, $pass);
            $st->execute();
            $st->bind_result($id, $usu, $spass);
            $st->fetch();
            $st->close();
            $con->close();
            $_SESSION['usuario'] = $usu;
            $_SESSION['contraseña'] = $spass;
            $_SESSION['id'] = $id;


            if ($_SESSION['usuario'] == $nombre && $pass == $_SESSION['contraseña'] && $id == $_SESSION['id']) {


                ?>

                <!doctype html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Lista</title>
                    <link rel="stylesheet" href="css/style.css?v=9">
                </head>
                <body>
                <nav>
                    <h1>Lista de tareas</h1>

                </nav>
                <section>
                    <form action="anadir.php" method="post">
                        <input type="text" name="tarea" placeholder="Escriba una nueva tarea">
                        <br>
                        <button type="submit">Añadir</button>
                    </form>
                </section>
                <section class="listado">


                    <?php

                    try {
                        $con = getconexion();
                        $sql2 = "SELECT id_tarea,tarea,id_usuario FROM listas WHERE id_usuario=?";
                        $st = $con->prepare($sql2);
                        $st->bind_param("s", $id);
                        $st->bind_result($id_tarea, $tarea, $id_usu);
                        $st->execute();
                        $tareas = array();
                        $cont = 0;
                        while ($st->fetch()) {
                            array_push($tareas, $tarea);
                            $cont++;
                        }


                        if ($tarea) {
                            echo "<h2>Lista</h2>";
                        }
                        echo "<ul>";
                        foreach ($tareas as $valor) {
                            echo "<li>$valor<a href='eliminar.php?id_tarea=$id_tarea' class='eliminar'>eliminar</a></li>";

                        }
                        echo "</ul>";
                        $st->close();
                        $con->close();
                        if ($tarea) {
                            echo "<br><br><a href='delLista.php' class='borrarLista'> Borrar lista</a>";
                            echo "<br><a href='logout.php' class='logout'>Cerrar Sesión</a>";
                        }

                    } catch (mysqli_sql_exception $e) {

                    }

                    ?>

                </section>

                </body>
                </html>


                <?php
            } else {
                // header("location:index.php");

            }
        } catch (mysqli_sql_exception $e) {


        }

}
    } else {
        //header("location:index.php");

}
?>

