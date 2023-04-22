<?php
session_start();
if (isset($_SESSION['id'])){
    header("location:login2.php");

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<nav>
    <h1>Acceso de Usuarios</h1>
</nav>
<section>
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Escriba su nombre de usuario">
        <br>
        <input type="text" name="pass" placeholder="Escriba su contraseña">
        <br>
        <button type="submit">Entrar</button>


    </form>
    <p>¿No Estas registrado? <a href="registrar.php">Registrate Aquí </a></p>
</section>
<?php
if( isset($_SESSION['error'] )){
    $error=$_SESSION['error'];
    echo "<section id='error'><p>$error</p></section>";
    unset($_SESSION['error']);
}
if( isset($_COOKIE["god"] )){
    $god=$_COOKIE["god"];
    echo "<section style='color: green'><p>$god</p></section>";
    setcookie("god",false,time()-1);

}
?>
</body>
</html>