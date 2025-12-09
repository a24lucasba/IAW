<?php

if (isset($_GET['crear'])){
    setcookie($_GET['nome'],$_GET['valor'], time()+$_GET['expiracion']);
    header ("Location:cookies.php");
}

if (isset($_GET['borrar'])){
    foreach($_COOKIE as $key => $value ){
        setcookie($key,$value, 1);
    }
    header ("Location:cookies.php");
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
    <form method="get" action="cookies.php">
        <input type="text" name="nome" placeholder="Nome da cookie"><br>
        <input type="text" name="valor" placeholder="Valor da cookie"><br>
        <input type="number" name="expiracion" placeholder="Expiración en segundos"><br><br>
        <input type="submit" name="crear" value="Crear cookie">
        <input type="submit" name="borrar" value="Borrar cookies">
    </form><br>
</body>
</html>
<?php
foreach($_COOKIE as $key => $value ){
    echo $key." ".$value."<br>";
}
?>