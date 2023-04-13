<?php
include_once "connection.php";
if (isset($_GET["tarea"])&& strlen($_GET["tarea"])>0){
    $tarea=htmlentities($_GET["tarea"]);
    $marcado=0;
    $con=getconexion();
    $sql="INSERT INTO tareas (tarea,marcado) VALUES (?,?);";
    $st=$con->prepare($sql);
    $st->bind_param("si",$tarea,$marcado);
    $st->execute();
    $st->close();
    $con->close();

}
header("location:index.php");
?>
