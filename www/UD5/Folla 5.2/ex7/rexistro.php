<?php
if (isset($_GET['mensaxe'])){
    echo $_GET['mensaxe'];
    echo "<br><br>";
}
if (!isset($_GET['inserir']) && !isset($_GET['mensaxe'])){
    header("Location:autenticacion.php");
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
    <form action="garda.php" method="get">
        <input type="text" name="usuario" placeholder="Introducir usuario" required><br><br>
        <input type="password" name="passwd1" placeholder="Introducir contrasinal" required>
        <input type="password" name="passwd2" placeholder="Confirmar contrasinal" required><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form><br>
    <form action="autenticacion.php" method="get">
        <input type="submit" name="volver" value="Volver">
    </form>
</body>
</html>