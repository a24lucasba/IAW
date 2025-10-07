<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $elementos = array(
            "Alcalinos" => array("Li"=>3, "Na"=>11, "K"=>19, "Rb"=>37, "Cs"=>55, "Fr"=>87),
            "Alcalino-terreos" => array("Be"=>4, "Mg"=>12, "Ca"=>20, "Sr"=>38, "Ba"=>56, "Ra"=>88),
            "Terreos" => array("B"=>5, "Al"=>13, "Ga"=>31, "In"=>49, "Tl"=>81)
        );
        echo "<h1>Táboa Peridódica de Elementos</h1>";
        $grupo = $_GET["escolle"];
        echo "<h2>O grupo $grupo está formado polos seguintes elementos:</h2>";
        echo "<table>
                    <tr>
                        <th>Nome</th>
                        <th>Nº atómico</th>
                    </tr>";
        foreach ($elementos[$grupo] as $key => $value) {
            echo"
                    <tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
                     
        }
        echo "</table><br>";
        echo "<p>Número total: " . count($elementos[$grupo]) . "</p>";
        echo "<form action='formulario.html'>
                <input type='submit' value='<-- Volver atrás'>
            </form>";
        
    ?>
</body>
</html>