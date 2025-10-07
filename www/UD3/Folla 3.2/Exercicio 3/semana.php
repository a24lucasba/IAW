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
        if (strcmp($dia,"luns") == 0) {
            echo "Hoxe é luns";
        } else if (strcmp($dia,"martes") == 0) {
            echo "Hoxe é martes";
        } else if (strcmp($dia,"mércores") == 0) {
            echo "Hoxe é mércores";
        } else if (strcmp($dia,"xoves") == 0) {
            echo "Hoxe é xoves";
        } else if (strcmp($dia,"venres") == 0) {
            echo "Hoxe é venres";
        } else if (strcmp($dia,"sábado") == 0) {
            echo "Hoxe é sábado";
        } else if (strcmp($dia,"domingo") == 0) {
            echo "";
        }
    ?>
</body>
</html>