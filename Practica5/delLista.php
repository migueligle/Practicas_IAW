<?php
include_once "connection.php";
session_start();
if (isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    try {
        $con=getconexion();
        $sql="DELETE FROM listas WHERE id_usuario=? ";
        $st=$con->prepare($sql);
        $st->bind_param("i",$id);
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