<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome1 = $_GET["alumno1"];
        $nome2 = $_GET["alumno2"];
        $nome3 = $_GET["alumno3"];
        $nome4 = $_GET["alumno4"];
        $nome5 = $_GET["alumno5"];
        $soldo1 = $_GET["soldo1"];
        $soldo2 = $_GET["soldo2"];
        $soldo3 = $_GET["soldo3"];
        $soldo4 = $_GET["soldo4"];
        $soldo5 = $_GET["soldo5"];
        $vMedia = ($soldo1 + $soldo2 + $soldo3 + $soldo4 + $soldo5) / 5;
        $max = 0;
        $min = $soldo1;

        $dNoSo = [
            "$nome1" => "$soldo1",
            "$nome2" => "$soldo2",
            "$nome3" => "$soldo3",
            "$nome4" => "$soldo4",
            "$nome5" => "$soldo5",
            "media" => "$vMedia"
        ];

        foreach ($dNoSo as $key => $value){
            if ($max <= $value){
                $max = $value;
            }
            if ($min >= $value){
                $min = $value;
            }
        }

        $dNoSo["maximo"] = $max;
        $dNoSo["minimo"] = $min;
        
        echo "<table>
                <tr>
                    <th>Nome</th>
                    <th>Soldo</th>
                 </tr>";
        foreach ($dNoSo as $key => $value) {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>