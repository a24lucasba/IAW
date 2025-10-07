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
        $maior = 0;
        $menor = 0;
        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            $maior = $num1;
            if ($num2 > $maior) {
                $maior = $num2;
            }
            if ($num3 > $maior) {
                $maior = $num3;
            }
            echo "O número maior é: " . $maior."<br>";
            $menor = $num1;
            if ($num2 < $menor) {
                $menor = $num2;
            }
            if ($num3 < $menor) {
                $menor = $num3;
            }
            echo "O número menor é: " . $menor;
        } else {
            echo "Erro: Todos os valores deben ser numéricos.";
        }
    ?>
</body>
</html>