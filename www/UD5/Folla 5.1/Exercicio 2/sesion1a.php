<?php
session_start();

echo "Datos gardados anteriormente: <br>";
foreach($_SESSION['datos'] as $key => $value){
    echo $key.": ".$value." <br>";
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
    <form method="get" action="sesion1b.php">
        <input type="text" name="usuario" placeholder="Introducir usuario" required><br>
        <input type="password" name="passwd" placeholder="Introducir contrasinal" required><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>