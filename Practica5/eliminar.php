<?php
session_start();
include_once "connection.php";
if (isset($_SESSION['id'])&&isset($_GET["id_tarea"])){
    $id=$_SESSION['id'];
    $idTarea=$_GET["id_tarea"];
    try{
        $con=getconexion();
        $sql="DELETE FROM `listas` WHERE `listas`.`id_tarea` = ?";
            $st=$con->prepare($sql);
            $st->bind_param("i",$idTarea);
            $st->execute();
            $st->close();
            $con->close();
    }catch (mysqli_sql_exception $e){
        $error=getmensajeError($e->getCode());
        if($error){
            $_SESSION['error']=$error;
            header("location:login2.php");
        }
    }

    header("location:login2.php");

}
?>