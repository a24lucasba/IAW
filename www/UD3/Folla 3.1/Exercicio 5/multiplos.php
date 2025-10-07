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
        $resultado = 0;
        echo "<table class='taboa'>
            <tr>
                <th class='taboa th'>Número</th>
                <th class='taboa th'>Multiplicando</th>
                <th class='taboa th'>Resultado</th>
            </tr>";       
        for ($i = 1; $i <= 10; $i++) {
            $resultado = 7 * $i;
            echo "<tr>
                <td class='taboa td'>7</td>
                <td class='taboa td'>$i</td>
                <td class='taboa td'>$resultado</td>
            </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>