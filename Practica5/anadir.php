<?php
include_once "connection.php";
session_start();
if (isset($_SESSION['id']) && isset($_POST["tarea"]) && strlen($_POST["tarea"]) > 0) {
    $id = $_SESSION['id'];
    $tarea = $_POST["tarea"];
    try {
        $con = getconexion();
        $sql = "INSERT INTO listas  (tarea,id_usuario) values (?,?)";
        $st = $con->prepare($sql);
        $st->bind_param("ss", $tarea, $id);
        $st->execute();
        $st->close();
        $con->close();


    } catch (mysqli_sql_exception $e) {
        $error=getmensajeError($e->getCode());
        if($error){
            $_SESSION['error']=$error;
            header("location:login2.php");
        }
    }
    header("location:login2.php?");
}
?>

