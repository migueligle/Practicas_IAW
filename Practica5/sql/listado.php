<?php
include_once "connection.php";
session_start();
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
    //comprobación de que el usuario existe

        try{
            $con=getconexion();
            $sql = "SELECT nombre FROM usuarios WHERE id_usuario=?";
            $st = $con->prepare($sql);
            $st->bind_param("i", $id_usuario);
            $st->execute();
            $st->bind_result($usuario);
            $st->fetch();
            $st->close();
        }
        catch (mysqli_sql_exception $e){

        }
    } else {
    header("Location:index.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>listar</title>
    <link rel="stylesheet" href="css/style.css?v=4">
</head>
<body>

<main>
    <?php
    try {
        $con=getconexion();
        $sql2="SELECT id_tarea,tarea,id_usuario FROM listas WHERE id_usuario=?";
        $st=$con->prepare($sql2);
        $st->bind_param("s",$id);
        $st->bind_result($id_tarea,$tarea,$id_usu);
        $st->execute();
        $tareas = array();
        $cont = 0;
        while ($st->fetch()){
            array_push($tareas,$tarea);
            $cont++;
        }


        if ($tarea) {
            echo "<h2>Lista</h2>";
        }
        echo "<ul>";
        foreach ($tareas as $valor) {
            echo"<li>$valor<a href='eliminar.php?id_tarea=$id_tarea' class='eliminar'>eliminar</a></li>";

        }
        echo "</ul>";
        $st->close();
        $con->close();
        if ($tarea){
            echo "<br><br><a href='delLista.php' class='borrarLista'> Borrar lista</a>";
            echo "<br><a href='logout.php' class='logout'>Cerrar Sesión</a>";
        }

    }catch (mysqli_sql_exception $e){
        $error=getmensajeError($e->getCode());
    }

    ?>

    ?>

</main>

</body>
</html>