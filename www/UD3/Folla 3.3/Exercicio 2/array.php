<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];
        $num5 = $_GET["num5"];
        $array = array();

        for ($i = 0; $i < 5; $i++) {
            $array[$i] = ${"num".($i+1)};
        }
       
 
        $maior = $array[0];
        $menor = $array[0];
        $suma = 0;
        $produto = 1;

        for ($i = 0; $i < 5; $i++) {
            $suma += $array[$i];
            $produto *= $array[$i];
            if ($array[$i] >= $maior) {
                $maior = $array[$i];
            }
            if ($array[$i] <= $menor) {
                $menor = $array[$i];
            }
        }
        echo "O número maior é: ".$maior."<br>";
        echo "O número menor é: ".$menor."<br>";
        echo "A suma dos números é: ".$suma."<br>";
        echo "O produto dos números é: ".$produto."<br>";
    ?>
</body>
</html>