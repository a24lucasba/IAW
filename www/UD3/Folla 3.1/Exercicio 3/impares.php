<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $num = 1;
        for ($i = 1; $i <= 50; $i++) {
            if ($i %2!= 0) {
                echo "<h2 class='h2'>O $num º impar é $i</h2>";
                $num++;
        }   else {
            }
        }
    ?>
</body>
</html>