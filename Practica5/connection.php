<?php
//error_reporting(E_ERROR);
$driver= new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
function getconexion(){
    $con=  new mysqli("localhost","login","login","login");
    //$con->close();
    return $con;
}
function getmensajeError($codigo){

    if ($codigo == 2002) {
        return "ha fallado la conexion a la base de datos";
    } elseif ($codigo == 1045) {
        return "Usuario o Contraseña incorrecto";
    } elseif ($codigo == 1044) {
        return "no se pudo abrir la base de datos";
    } elseif ($codigo==1062){
        return "usuario ya exite";
    }elseif ($codigo==1054 || $codigo==1146){
        return "error en la consulta";
    }
    else {
        return "error desconocido";
    }
}
?>