<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*    if ($_GET["idade"] >18){
        echo "Ola ". $_GET["nome"] . ". Hoxe tes " . $_GET["idade"] . " anos, es maior de idade";
        } elseif ($_GET["idade"] == 18){
            echo "Tes xusto 18 anos.";
        }else{
        echo "Ola ". $_GET["nome"] . ". Hoxe tes ". $_GET["idade"] . " anos, es menor de idade.";
        }*/
        $numero =10;
        while ($numero > 0){
            echo $numero . "<br>";
            $numero--;
        }
        echo "Despegue!<br>" ;

        // for(INICIALIZACIÓN(se declara la variable), CONDICIÓN(condición del bucle), ATUALIZACIÓN(se actualiza la variable))
        for ($i = 1; $i <= 10; $i++){
            echo $i ."<br>";
        } 
    ?>
</body>
</html>