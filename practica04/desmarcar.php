<?php
include_once "connection.php";
if (isset($_GET["id"])){
    $id=$_GET["id"];
    $con=getconexion();
    $sql="UPDATE tareas SET marcado = '0' WHERE tareas.id_tarea = ?;";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    $st->execute();
    $st->close();
    $con->close();
}
header("location:index.php");
?>