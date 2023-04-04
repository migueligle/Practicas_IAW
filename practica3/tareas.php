<?php
if (isset($_GET["tarea"]) && strlen($_GET["tarea"] > 0)) {
    if (isset($_COOKIE["tarea"])) {
        $tareas = json_decode(($_COOKIE["tarea"]), true);
    } else {
        $tareas = array();

    }
    array_push($tareas, $_GET["tarea"]);
    setcookie("tarea", json_encode($tareas), time() + 60 * 60 * 24 * 7);
}
header("location:lista.php");
?>