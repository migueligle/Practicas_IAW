<?php
include_once "connection.php"
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <title>lista</title>
    <link rel="stylesheet" href="css/style.css?v=3">
</head>
<body>
<div>
    <h1>Lista de Tareas</h1>
</div>


<section>
    <form action="anadir.php">
        <input type="text" name="tarea" placeholder="Nueva tarea">
        <button type="submit">+</button>

    </form>

</section>
<section>
    <ul>
        <?php
        $con = getconexion();
        $sql = "SELECT tarea,id_tarea,marcado FROM tareas ;";
        $st = $con->prepare($sql);
        $st->execute();
        $st->bind_result($tarea, $id, $marcado);
        while ($st->fetch()) {
            if ($marcado == 1) {
                echo "<li ><del>$tarea </del>  <a href='desmarcar.php?id=$id' class='desmarcar'>desmarcar</a>    <a href='quitar.php?id=$id' class='quitar'>Borrar</a></li><br>";
            } else {
                echo "<li>$tarea  <a href='marcar.php?id=$id' class='marcar'>marcar</a>  <a href='quitar.php?id=$id' class='quitar'>Borrar</a></li><br>";
            }

        }
        $st->close();
        $con->close();
        ?>
    </ul>
</section>

</body>
</html>
