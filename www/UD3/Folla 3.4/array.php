<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $viaxes[0] = array("Madrid", "Segovia", "90201");
        $viaxes[1] = array("Madrid", "A Coruña", "596887");
        $viaxes[2] = array("Barcelona", "Cádiz", "1152669");
        $viaxes[3] = array("Bilbao", "Valencia", "622233");
        $viaxes[4] = array("Sevilla", "Santander", "832067");
        $viaxes[5] = array("Oviedo", "Badajoz", "682429");
        $longo = 0;
        $posicion = 0;

        echo "<table>
                <tr>
                    <th>Orixe</th>
                    <th>Destino</th>
                    <th>Distancia (en metros)</th>
                </tr>";
            for ($i = 0; $i < 6; $i++) {
                echo "<tr>
                    <td>{$viaxes[$i][0]}</td>
                    <td>{$viaxes[$i][1]}</td>
                    <td>{$viaxes[$i][2]}</td>
                </tr>";
            }
            echo "</table>";
        
        for ($i = 0; $i < 6; $i++) {
            if ($longo <= $viaxes[$i][2]){
                $longo = $viaxes[$i][2];
                $posicion = $i;
            }
        }
        echo "A viaxe máis longa é de {$viaxes[$posicion][0]} a {$viaxes[$posicion][1]} con {$viaxes[$posicion][2]} metros.";

    ?>
</body>
</html>