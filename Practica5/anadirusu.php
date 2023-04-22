<?php
include_once "connection.php";
if (isset($_POST["nombre"]) && strlen($_POST["nombre"]) > 0
    && isset($_POST["pass"]) && strlen($_POST["pass"]) > 0) {
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    try {
        $con=getconexion();
        $sql="INSERT INTO usuarios ( nombre, pass)  VALUES (?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("ss",$nombre,$pass);
        $st->execute();
        $st->close();
        $con->close();


    }catch (mysqli_sql_exception $e){
        $error=getmensajeError($e->getCode());
        if($error){
            $_SESSION['error']=$error;
            header("location:index.php");
        }

    }
    setcookie("god","usuario añadido",time()+60*60*24*7);
    header("location:index.php");

}
?>