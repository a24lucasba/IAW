<?php
if (isset($_GET['mensaxe'])){
    echo "Error: ".$_GET['mensaxe'];
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
    <form method="get" action="validalogin.php">
        <input type="text" name="usuario" placeholder="usuario"><br>
        <input type="password" name="passwd" placeholder="contrasinal"><br>
        <input type="submit" name="submit" value="Entrar">
    </form><br>
    <form method="get" action="rexistro.php">
        <input type="submit" name="submit" value="Rexistro">
    </form><br>
    <form method="get" action="pecheSesion.php">
        <input type="submit" name="submit" value="Pechar sesión">
    </form><br>
</body>
</html>