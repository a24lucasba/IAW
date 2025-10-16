<?php

$conexion = mysqli_connect("db","usuario","abc123.","folla1");

if ($conexion){
    echo "Conexión correcta.<br><br>";
    mysqli_set_charset($conexion,"utf8");
    $resultado = mysqli_query($conexion,"SELECT * FROM xogador");
    echo "Lista completa de xogadores:<br>";
    if ($resultado != false){
        while ($fila = mysqli_fetch_array($resultado)){
            echo $fila['id']." ".$fila['dni']." ".$fila['nome']." ".$fila['apelidos']." ".$fila['idade']."<br>";
        }
    }
}else{
    echo "Conexión incorrecta";
}
mysqli_close($conexion);