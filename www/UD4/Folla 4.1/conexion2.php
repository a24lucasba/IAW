<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="conexion2.php">
            <input type="submit" value="Orixe alfabéticamente (A-Z)" name="ordenOrixeAsc">
            <input type="submit" value="Orixe alfabéticamente (Z-A)" name="ordenOrixeDesc"><br><br>
            <input type="submit" value="Destino alfabéticamente (A-Z)" name="ordenDestinoAsc">
            <input type="submit" value="Destino alfabéticamente (Z-A)" name="ordenDestinoDesc"><br><br>
            <input type="submit" value="Distancia de menor a maior" name="ordenDistanciaAsc">
            <input type="submit" value="Distancia de maior a menor" name="ordenDistanciaDesc">
    </form><br><br>
    <?php

    $conexion = mysqli_connect("db","usuario","abc123.","folla1");

    if ($conexion){
        echo "Conexión correcta.<br><br>";
        mysqli_set_charset($conexion,"utf8");
        
        if (isset($_GET['ordenOrixeAsc'])){
            $ordenOrixeAsc = mysqli_query($conexion,"SELECT * FROM traxecto order by orixe");
            echo "<h2>Ordenados alfabéticamente polo orixe</h2>";
            echo "<table>";
            if ($ordenOrixeAsc != false){
                while ($fila = mysqli_fetch_array($ordenOrixeAsc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
        if (isset($_GET['ordenOrixeDesc'])){
            $ordenOrixeDesc = mysqli_query($conexion,"SELECT * FROM traxecto order by orixe desc");
            echo "<h2>Ordenados alfabéticamente polo orixe de forma descendente</h2>";
            echo "<table>";
            if ($ordenOrixeDesc != false){
                while ($fila = mysqli_fetch_array($ordenOrixeDesc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
        if (isset($_GET['ordenDestinoAsc'])){
            $ordenDestinoAsc = mysqli_query($conexion,"SELECT * FROM traxecto order by destino");
            echo "<h2>Ordenados alfabéticamente polo destino</h2>";
            echo "<table>";
            if ($ordenDestinoAsc != false){
                while ($fila = mysqli_fetch_array($ordenDestinoAsc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
        if (isset($_GET['ordenDestinoDesc'])){
            $ordenDestinoDesc = mysqli_query($conexion,"SELECT * FROM traxecto order by destino desc");
            echo "<h2>Ordenados alfabéticamente polo destino de forma descendente</h2>";
            echo "<table>";
            if ($ordenDestinoDesc != false){
                while ($fila = mysqli_fetch_array($ordenDestinoDesc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
        if (isset($_GET['ordenDistanciaAsc'])){
            $ordenDistanciaAsc = mysqli_query($conexion,"SELECT * FROM traxecto order by distancia");
            echo "<h2>Ordenados pola distancia de forma ascendete</h2>";
            echo "<table>";
            if ($ordenDistanciaAsc != false){
                while ($fila = mysqli_fetch_array($ordenDistanciaAsc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
        if (isset($_GET['ordenDistanciaDesc'])){
            $ordenDistanciaDesc = mysqli_query($conexion,"SELECT * FROM traxecto order by distancia desc");
            echo "<h2>Ordenados pola distacia de forma descendente</h2>";
            echo "<table>";
            if ($ordenDistanciaDesc != false){
                while ($fila = mysqli_fetch_array($ordenDistanciaDesc)){
                    echo "<tr>
                    <td>".$fila['orixe']."</td>
                    <td>".$fila['destino']."</td>
                    <td>".$fila['distancia']."</td>
                    </tr>";
                }
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>