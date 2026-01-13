<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="amosaDatos.php">
        <label name="sensor">Escolle o sensor e número de medicións</label><br>
        <select name="sensor">
            <option value="8">Temperatura</option>
            <option value="9">Presión</option>
            <option value="10">Humidade</option>
        </select>
        <input type="number" name="numero">
        <input type="submit" name="enviar" value="Enviar">
    </form><br>
</body>
</html>
<?php

if (isset($_GET['sensor'])){
    $sensor = $_GET['sensor'];
    $numero = $_GET['numero'];
    $url = "https://sensoralia.iessanclemente.net/api/v1/sensores/$sensor/mediciones?limit=$numero";
    $fichero = file_get_contents($url);
    $obxecto = json_decode($fichero);
}else{
    $datos = null;
}


echo "<table border='3' cellpading='2'>
    <tr>
        <th>ID</th>
        <th>Valor</th>
        <th>Fecha</th>
    </tr>";
foreach ($obxecto->datos as $medicion) {
    echo "<tr>
        <td>" . $medicion->idmedicion . "</td>
        <td>" . $medicion->valor . "</td>
        <td>" . $medicion->fechahora . "</td>
    </tr>";
}
echo "</table>";



