<?php
session_start();

if (isset($_SESSION['usuario'])){
    echo "Que tal ".$_SESSION['usuario']."?";
    $_SESSION['usuario']="Cambiado";
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
    <a href="login.php">Volver a login</a>
    <a href="pechar.php">Pechar sesión</a>
</body>
</html>