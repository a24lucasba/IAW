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
        echo "<table class='taboa'>
            <tr>
                <th class='taboa th'>Día</th>
                <th class='taboa th'>Saúdo</th>
            </tr>";
        for ($i = 1; $i <= 100; $i++) {
            if ($num %2!= 0) {
                echo "<tr>
                        <td class='par'>$num</td>
                        <td class='par'>Bós días</td>
                    </tr>";
                $num++;
        }   else {
            echo "<tr>
                        <td class='impar'>$num</td>
                        <td class='impar'>Boas tardes</td>
                    </tr>";
                $num++;
            }
            
        }
        echo "</table>";
    ?>
</body>
</html>