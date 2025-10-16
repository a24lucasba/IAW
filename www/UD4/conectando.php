<?php

$conexion = mysqli_connect("db","usuario","abc123.","proba");

if ($conexion){
    echo "Conexión correcta.<br>";
    mysqli_set_charset($conexion,"utf8");
    $resultado = mysqli_query($conexion,"SELECT * FROM cliente");
    if ($resultado != false){
        while ($fila = mysqli_fetch_array($resultado)){
            echo $fila['codCliente']." ".$fila['nome']." ".$fila['apelidos']."<br>";
        }
    }
}else{
    echo "Conexión incorrecta";
}
mysqli_close($conexion);