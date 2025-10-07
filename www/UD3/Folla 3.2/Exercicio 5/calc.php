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
        $operacion = $_GET["operation"];
        switch ($operacion) {
            case "add":
                echo "A suma é: " .$num1." + ".$num2." = " . ($num1 + $num2);
                break;
            case "substract":
                echo "A resta é: " .$num1." - ".$num2." = " . ($num1 - $num2);
                break;
            case "multiply":
                echo "A multiplicación é: " .$num1." * ".$num2." = " . ($num1 * $num2);
                break;
            case "divide":
                if ($num2 != 0) {
                    echo "A división é: " .$num1." / ".$num2." = " . ($num1 / $num2);
                } else {
                    echo "Erro: División por cero non permitida.";
                }
                break;
            default:
                echo "Operación non válida";
        }
    ?>
</body>
</html>