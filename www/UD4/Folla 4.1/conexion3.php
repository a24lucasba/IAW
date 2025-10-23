<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conexion3.php" method="get">
        <label>Buscar exemplar</label>
        <input type="text" name="titulo" id="titulo">
        <input type="submit" value="buscar" name="buscarTitulo"><br><br>

        <input type="submit" value="Ver listado completo das películas" name="listaCompleta"><br>
        <input type="submit" value="Ordenado pola duración das pelílucas" name="ordenarDuracion"><br>
        <input type="submit" value="Ordenado polo director" name="ordenDirector"><br>
        <input type="submit" value="Ordenado polo título" name="ordenTitulo"><br><br>
    
        <label>Con duración maior que:</label>
        <input type="number" name="duracion" id="duracion">
        <input type="submit" value="Buscar" name="filtrarDuracion">
    </form><br><br><br>
    <?php

    $conexion = mysqli_connect("db","usuario","abc123.","folla1");

    if ($conexion){
        echo "Conexión establecida<br><br><br>";
        mysqli_set_charset($conexion,"utf8");
        $consulta = mysqli_query($conexion,"SELECT * FROM peliculas");
        if (isset($_GET['titulo'])){
            $titulo = $_GET['titulo'];
        }
        if (isset($_GET['duracion'])){
            $duracion = $_GET['duracion'];
        }
    
        if (isset($_GET['buscarTitulo'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas where titulo like '$titulo'");
        }
        if (isset($_GET['listaCompleta'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas");
        }
        if (isset($_GET['ordenarDuracion'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas order by duracion");
        }
        if (isset($_GET['ordenDirector'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas order by director");
        }
        if (isset($_GET['ordenTitulo'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas order by titulo");
        }
        if (isset($_GET['filtrarDuracion'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas where duracion > $duracion");
        }

        if ($consulta != false){
            echo "<table>";
            while ($fila = mysqli_fetch_array($consulta)){
                echo "<tr>
                    <td>".$fila['titulo']."</td>
                    <td>".$fila['director']."</td>
                    <td>".$fila['duracion']."</td>
                    </tr>";
            }
            echo "</table>";
        }

    }else{
        echo "Conexión fallida";
    }

    ?>
</body>
</html>