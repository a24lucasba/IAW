<?php
session_start();

if (!isset($_SESSION['usuario'])){
    $_SESSION['usuario']='Pepe';
}

echo $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="segunda.php">Ir a outra páxina</a>
</body>
</html>