<?php
include_once "connection.php";
session_start();


if (isset($_POST["usuario"]) && strlen($_POST["usuario"]) > 0 &&
    isset($_POST["pass"]) & strlen($_POST["pass"]) > 0) {
    $nombre = htmlspecialchars($_POST["usuario"]);
    $pass = htmlspecialchars($_POST["pass"]);


        try {
            $con = getconexion();
            $sql = "SELECT id_usuario,nombre,pass from usuarios where nombre=? AND pass=? ";
            $st = $con->prepare($sql);
            $st->bind_param("ss", $nombre, $pass);
            $st->execute();
            $st->bind_result($id, $usu, $spass);
            $st->fetch();
            $st->close();
            $con->close();
            $_SESSION['usuario'] = $usu;
            $_SESSION['contraseña'] = $spass;
            $_SESSION['id'] = $id;
        }
        catch (mysqli_sql_exception $e){
            $error=getmensajeError($e->getCode());
            if($error){
                $_SESSION['error']=$error;
                header("location:index.php");
            }
        }

}else{
    header("location:index.php");
}
            if ($_SESSION['usuario'] == $nombre && $pass == $_SESSION['contraseña'] && $id == $_SESSION['id']) {
                header("location:login2.php");
            }else{

                $_SESSION['error']="usuario o contraseña incorrecta";
                header("location:index.php");
            }
