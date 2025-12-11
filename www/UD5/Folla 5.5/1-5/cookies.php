<?php

if (isset($_GET['crear'])){
    setcookie($_GET['nome'],$_GET['valor'], time()+$_GET['expiracion']);
    header ("Location:cookies.php");
}

if (isset($_GET['borrar'])){
    foreach($_COOKIE as $cookie_name => $cookie_value){
        if(is_array($cookie_value)){
            foreach($cookie_value as $key => $value){
                setcookie("{$cookie_name}[$key]", "", 1);
            }
        } else {
            setcookie($cookie_name, "", 1);
        }
    }
    header ("Location:cookies.php");
}
if (isset($_GET['enviar'])){
    setcookie('usuario[nome]',$_GET['nome'],time()+120);
    setcookie('usuario[apelido]',$_GET['ape'],time()+120);
    setcookie('usuario[email]',$_GET['email'],time()+120);
    header ("Location:cookies.php");
}
if (isset($_GET['borraruno'])){
    setcookie('usuario[nome]', "", time()-3600);
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
        <input type="submit" name="borraruno" value="Borrar nome">
    </form><br>
    <form method="get" action="login.html">
        <input type="submit" name="volver" value="Volver a login">
    </form><br>
</body>
</html>
<?php

foreach($_COOKIE as $cookie_name => $cookie_value){
    if(is_array($cookie_value)){
        foreach($cookie_value as $key => $value){
            echo "{$cookie_name}[{$key}] : {$value}<br>";
        }
    } else {
        echo $cookie_name." : ".$cookie_value."<br>";
    }
}

?>