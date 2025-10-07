<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <?php
        $diccionario = [
            "Andalucía" => "593.6",
            "Aragón" => "600.3",
            "Asturias" => "582.9",
            "Baleares" => "498.7",
            "Canarias" => "573.2",
            "Cantabria" => "551.5",
            "Castilla e León" => "645.3",
            "Castilla la Mancha" => "555.8",
            "Cataluña" => "568.3",
            "Comunidade Valenciana" => "561.1", 
            "Extremadura" => "584.3",
            "Galicia" => "600.1"
        ];
        echo "<h1>Porcentaxe de escolarización</h1>";
        echo "<table>
                <tr>
                    <th>Comunidade</th>
                    <th>Escolarización por 1000 habitantes</th>
                    <th>%escolarización</th>
                 </tr>";
        foreach ($diccionario as $key => $value) {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                    <td>A porcentaxe de escolarización é " . ($value / 10) . "%</td>
                </tr>";
        }
        echo "</table>";
    ?>
</html>