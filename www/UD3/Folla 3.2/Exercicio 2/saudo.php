<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = $_GET["idade"];
        $nome = $_GET["nome"];
        $apelidos = $_GET["apelidos"];
        if ($idade < "18") {
            echo"Hola ".$nome." ".$apelidos.", eres menor de idade.";
        } elseif ($idade > "65") {
            echo "Hola ".$nome." ".$apelidos.", eres un xubilado.";
        } else {
            echo "Hola ".$nome." ".$apelidos.", estás en idade de traballar.";
        }
     ?>
</body>
</html>