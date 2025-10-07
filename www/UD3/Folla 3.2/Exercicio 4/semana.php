<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dia = $_GET["dia"];
        switch ($dia) {
            case "luns":
                echo "Hoxe é luns";
                break;
            case "martes":
                echo "Hoxe é martes";
                break;
            case "mércores":
                echo "Hoxe é mércores";
                break;
            case "xoves":
                echo "Hoxe é xoves";
                break;
            case "venres":
                echo "Hoxe é venres";
                break;
            case "sábado":
                echo "Hoxe é sábado";
                break;
            case "domingo":
                echo "";
                break;
            default:
                echo "Non é un día da semana";
        }
    ?>
</body>
</html>