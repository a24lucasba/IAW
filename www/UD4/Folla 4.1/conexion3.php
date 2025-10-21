<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cine.php" method="get">
        <label>Buscar exemplar</label>
        <input type="text" name="Buscar" id="Buscar">
        <input type="submit" value="Buscar"><br><br>

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
        echo "Conexión establecida";
        mysqli_set_charset($conexion,"utf8");
        $consulta = mysqli_query($conexion,"SELECT * FROM peliculas");
        if (isset($_GET['listaCompleta'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas");
        }
        if (isset($_GET['ordenarDuracion'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas order by duracion");
        }
        if (isset($_GET['ordenarTitulo'])){
            $consulta = mysqli_query($conexion,"SELECT * FROM peliculas order by titulo");
        }
        





















    }else{
        echo "Conexión fallida";
    }

    ?>
</body>
</html>