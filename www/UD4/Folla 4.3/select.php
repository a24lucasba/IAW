<?php
$servidor="db";
$usuario="root";
$passwd="root";
$base="proba";

//CONECTAMOS
$conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
if($conexion->connect_error){
    die("Non é posible conectar coa BD: ". $conexion->connect_error);
}

$conexion->set_charset("utf8");
//PREPARAMOS A SENTENCIA:
$sentencia=$conexion->prepare("SELECT * FROM cliente where nome = ?");

$nome=$_GET['nome']; //OU $_GET['nome'] SE VIMOS DUN FORMULARIO
$sentencia->bind_param("s",$nome);
$sentencia->execute();
$resultado=$sentencia->get_result();

while($fila=$resultado->fetch_array(MYSQLI_BOTH) )
    echo $fila['codCliente']." ".$fila['nome']." ".$fila['apelidos'];


$sentencia->close();

echo "<br><br><form method='get' action='cliente.html'>
        <input type='submit' value='Volver atrás'>
    </form>";


$conexion->close();