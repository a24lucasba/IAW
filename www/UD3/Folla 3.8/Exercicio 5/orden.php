<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="orden.php" method="get">
        <label for="menorAmaior">Ordenar de menor a mayor</label>       
        <input type="submit" name="menorAmaior" value="Ordenar"><br><br>
        <label for="maiorAmenor">Ordenar de maior a menor</label>
        <input type="submit" name="maiorAmenor" value="Ordenar"><br><br>
        <label for="alfabeticamente">Ordenar alfabeticamente</label>
        <input type="submit" name="alfabeticamente" value="Ordenar"><br><br>
        <label for="tamañoNome">Ordenar por tamaño de nombre</label>
        <input type="submit" name="tamañoNome" value="Ordenar"><br><br>
    </form>
    <?php
        $puntos = array("Ana"=>123, "Belén"=>14,"Felipe"=>3,"Moncho"=>245,"Artur"=>10);

        function tamañoNome($a,$b): string{
            if (mb_strlen($a) > mb_strlen($b)){
                return 1;
            } elseif (mb_strlen($a) < mb_strlen($b)){
                return -1;
            } else {
                return 0;
            }
        };

        if (isset($_GET['menorAmaior'])) {
            echo "Ordenando de menor a mayor<br>";
            asort($puntos);
        } elseif (isset($_GET['maiorAmenor'])) {
            echo "Ordenando de maior a menor<br>";
            arsort($puntos);
        } elseif (isset($_GET['alfabeticamente'])) {
            echo "Ordenando alfabeticamente<br>";
            ksort($puntos);
        } elseif (isset($_GET['tamañoNome'])) {
            echo "Ordenando por tamaño de nome<br>";
            uksort($puntos, "tamañoNome");
        }
        foreach ($puntos as $nome => $punto) {
            echo "Nome: $nome - Puntos: $punto<br>";
        }
    ?>
</body>
</html>