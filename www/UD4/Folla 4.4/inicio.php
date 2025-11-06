<?php
$servidor="db";
$usuario="usuario";
$passwd="abc123.";
$base="tendaInformatica";

$conexion = new mysqli($servidor, $usuario, $passwd, $base); 

if($conexion->connect_error){
    die("Non é posible conectar coa BD: ". $conexion->connect_error);
}

$conexion->set_charset("utf8");

echo "<h1>Benvido/a</h1>";

$familia = $conexion->prepare("SELECT nombre FROM familias");
$familia->execute();
$salida=$familia->get_result();

echo "<select name='familias'>
    <option value='Todos'>Todos</option>";
while($fila=$salida->fetch_array(MYSQLI_BOTH))
    echo "<option value=".$fila['nombre'].">".$fila['nombre']."</option>";
echo "</select>";
$familia->close();

echo "<br><br><form action='produtos.php' method='get'>
    <input type='text' name='parametro'>
    <input type='submit'>";

if (isset($_GET['parametro'])){

    $consulta = $conexion->prepare("SELECT * FROM productos WHERE familia='".$_GET['familias']."' and id like '".$_GET['parametro']."' or nombre like '".$_GET['parametro']."' or nombre_corto like '".$_GET['parametro']."' or descripcion like '".$_GET['parametro'])."'";
    $consulta->execute();
    $resultado=$consulta->get_result();
    echo "<tr>
        <td>Nombre</td>
        <td>Nombre Corto</td>
        <td>Descripciom</td>
        <td>Pvp</td>
        <td>Familia</td>
        </tr>
        <tr>";
    while($fila=$resultado->fetch_array(MYSQLI_BOTH))
        echo "<td>".$fila['nombre']."</td>
            <td>".$fila['nombre_corto']."</td>
            <td>".$fila['descripcion']."</td>
            <td>".$fila['pvp']."</td>
            <td>".$fila['familia']."</td>";
    echo "</tr>";
}











$conexion->close();