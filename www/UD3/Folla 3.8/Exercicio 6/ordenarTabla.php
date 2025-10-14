<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ordenarTabla.php" method="get">
        <label>Orixe alfabéticamente (A-Z)</label>
        <input type="submit" value="Ordenar" name="alfabOrixe"><br><br>
        
        <label>Orixe alfabéticamente descendente (Z-A)</label>
        <input type="submit" value="Ordenar" name="alfabOrixeDesc"><br><br>
        
        <label>Destino alfabéticamente (A-Z)</label>
        <input type="submit" value="Ordenar" name="alfabDestino"><br><br>
        
        <label>Destino alfabéticamente descendente (Z-A)</label>
        <input type="submit" value="Ordenar" name="alfabDestinoDesc"><br><br>
        
        <label>Distancia de menor a maior</label>
        <input type="submit" value="Ordenar" name="distanciaMenor"><br><br>
        
        <label>Distancia de maior a menor</label>
        <input type="submit" value="Ordenar" name="distanciaMaior"><br><br>
    </form>

    <?php
        $viaxes[0] = array("Madrid", "Segovia", "90201");
        $viaxes[1] = array("Madrid", "A Coruña", "596887");
        $viaxes[2] = array("Barcelona", "Cádiz", "1152669");
        $viaxes[3] = array("Bilbao", "Valencia", "622233");
        $viaxes[4] = array("Sevilla", "Santander", "832067");
        $viaxes[5] = array("Oviedo", "Badajoz", "682429");

        function ordenaAlfbOrixe($a,$b): int{
            if (strcmp($a[0],$b[0]) < 0){
                return -1;
            }elseif (strcmp($a[0],$b[0])>0){
                return 1;
            }else{
                return 0;
            }
        }
        function ordenaAlfbOrixeDesc($a,$b): int{
            if (strcmp($a[0],$b[0]) > 0){
                return -1;
            }elseif (strcmp($a[0],$b[0]) < 0){
                return 1;
            }else{
                return 0;
            }
        }
        function ordenaAlfbDestino($a,$b): int{
            if (strcmp($a[1],$b[1]) < 0){
                return -1;
            }elseif (strcmp($a[1],$b[1]) > 0){
                return 1;
            }else{
                return 0;
            }
        }
        function ordenaAlfbDestinoDesc($a,$b): int{
            if (strcmp($a[1],$b[1]) > 0){
                return -1;
            }elseif (strcmp($a[1],$b[1]) < 0){
                return 1;
            }else{
                return 0;
            }
        }
        function menorAmaiordist($a,$b): int{
            if ($a[2] < $b[2]){
                return -1;
            }elseif ($a[2] > $b[2]){
                return 1;
            }else {
                return 0;
            }
        }
        function maiorAmenordist($a,$b): int{
            if ($a[2] > $b[2]){
                return -1;
            }elseif ($a[2] < $b[2]){
                return 1;
            }else {
                return 0;
            }
        }

        if (isset($_GET["alfabOrixe"])){
            usort ($viaxes,'ordenaAlfbOrixe');
            echo "<h3>Orixe alfabéticamente</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }elseif (isset($_GET["alfabOrixeDesc"])){
            usort($viaxes,'ordenaAlfbOrixeDesc');
            echo "<h3>Orixe alfabéticamente descendente</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }elseif (isset($_GET["alfabDestino"])){
            usort($viaxes,'ordenaAlfbDestino');
            echo "<h3>Destino alfabéticamente</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }elseif (isset($_GET["alfabDestinoDesc"])){
            usort($viaxes,'ordenaAlfbDestinoDesc');
            echo "<h3>Destino alfabéticamente descendente</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }elseif (isset($_GET["distanciaMenor"])){
            usort($viaxes,'menorAmaiordist');
            echo "<h3>Distancia menor a maior</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }
        elseif (isset($_GET["distanciaMaior"])){
            usort($viaxes,'maiorAmenordist');
            echo "<h3>Distancia maior a menor</h3>";
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }else{
            for ($i = 0; $i < 6; $i++){
                echo "Orixe: ".$viaxes[$i][0]." Destino: ".$viaxes[$i][1]." Distancia: ".$viaxes[$i][2]."<br><br>";
            }
        }
    ?>
</body>
</html>