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
                <th class='taboa th'>Orden</th>
                <th class='taboa th'>Impar</th>
            </tr>";
        for ($i = 1; $i <= 50; $i++) {
            if ($i %2!= 0) {
                echo "<tr>
                        <td class='taboa td'>$num</td>
                        <td class='taboa td'>$i</td>
                    </tr>";
                $num++;
        }   else {
            }
        }
        echo "</table>";
    ?>
</body>
</html>