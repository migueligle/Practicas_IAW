<?php
if (isset($_GET["id"])) {
    $i = $_GET["id"];
    if (isset($_COOKIE["tarea"])) {
        $tareas = json_decode($_COOKIE["tarea"], true);
    }
}

if ($i) {
    unset($tareas[$i]);


} elseif ($i == 0) {
    unset($tareas[$i]);
}
setcookie("tarea", json_encode($tareas));
header("location:lista.php");
?>