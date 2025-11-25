<?php
session_start();

if (isset($_GET['enviar'])){
    $datos = array("nome"=>$_GET['usuario'],"contrasinal"=>$_GET['passwd']);
    $_SESSION['datos']=$datos;
    echo "Datos gardados<br>";
}else{
    $datos = array();
    $_SESSION['datos']=$datos;
    echo "Datos non gardados<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sesion1a.php">Volver a login</a>
</body>
</html>