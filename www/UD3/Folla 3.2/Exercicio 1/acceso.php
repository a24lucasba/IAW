<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $login = array($_GET["usuario"]=>$_GET["contrasinal"]);
        $user = $_GET["usuario"];
        $pass = $_GET["contrasinal"];
        $lista = array("usuario1" => "contrasinal1", "usuario2" => "contrasinal2", "usuario3" => "contrasinal3", "usuario4" => "contrasinal4"); 
        $permitido = "no";

        foreach($lista as $usuario => $contrasinal) {
            if (strcmp($user,$usuario)==0 and strcmp($pass,$contrasinal) == 0) {
                $permitido = "si";
            }
        }
        if (strcmp($permitido,"si")==0){
            echo "Acceso permitido";
        } else {
            echo "Acceso denegado";
        }
    ?>
</body>
</html>