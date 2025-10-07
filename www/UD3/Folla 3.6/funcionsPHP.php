<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $n4 = $_GET["n4"];
        $resultado = $n3;
        $numeros = [$n1,$n2,$n3,$n4];

        if (isset($_GET["suma2"])) {
            $resultado = $n1 + $n2;
        } else if (isset($_GET["suma3"])) {
            $resultado = $n1 + $n2 + $n3;
        } else if (isset($_GET["suma4"])) {
            $resultado = $n1 + $n2 + $n3 + $n4;
        } else if (isset($_GET["multiplica2"])) {
            $resultado = $n1 * $n2;
        } else if (isset($_GET["multiplica3"])) {
            $resultado = $n1 * $n2 * $n3;
        } else if (isset($_GET["multiplica4"])) {
            $resultado = $n1 * $n2 * $n3 * $n4;
        } else if (isset($_GET["maior"])) {
            foreach ($numeros as $n){
                if ($resultado < $n) {
                    $resultado = $n;
                }
            }
        } else if (isset($_GET["menor"])) {
            foreach ($numeros as $n){
                if ($resultado > $n) {
                    $resultado = $n;
                }
            }
        } else if (isset($_GET["media"])) {
            $resultado = ($n1 * $n2 * $n3 * $n4) / 4;
        } else if (isset($_GET["factorialN3"])) {
            for ($i = 1; $i < $n3; $i++){
                $resultado = $resultado * $i;
            }
        } else if (isset($_GET["segundoMaior"])) {
            $maior = 0;
            foreach ($numeros as $n){
                if ($maior < $n) {
                    $maior = $n;
                }
            }
            foreach ($numeros as $n){
                if ($resultado < $n && $n < $maior) {
                $resultado = $n;
                }
            }
        } else if (isset($_GET["mediana"])) {
            sort($numeros);
            $resultado = ($numeros[1] + $numeros[2]) / 2;
        } else if (isset($_GET["ordearMaiorMenor"])) {
            sort($numeros);
            $resultado = "$numeros[0],$numeros[1],$numeros[2],$numeros[3]";
        } else if (isset($_GET["ordearMenorMaior"])) {
            sort($numeros);
            $resultado = "$numeros[3],$numeros[2],$numeros[1],$numeros[0]";
        } else {
            echo "<h1> ERROR! </h1>";
        }
        echo $resultado;
    ?>
</body>
</html>