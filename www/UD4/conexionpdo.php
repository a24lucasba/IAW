<?php

$servidor = "db";
$usuario = "root";
$passwd = "root";
$base = "proba";


$pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
/*
$pdoStmt = $pdo->prepare("SELECT * FROM cliente");
$pdoStmt->execute();

while($fila=$pdoStmt->fetch()){
    echo $fila['codCliente']." ".$fila['nome']." ".$fila['apelidos']."<br>";
}
*/

$pdoStmt = $pdo->prepare("INSERT INTO cliente(codCliente,nome,apelidos) VALUES(:codigo,:nome,:ape1)");

$id = 106;
$nome = "Aleixo";
$apelidos = "Esfolador";

// $pdoStmt->bindParam(:codigo,$id);
// $pdoStmt->bindParam(:nome,$nome);
// $pdoStmt->bindParam(:ape1,$apelidos);
// $pdoStmt->execute();

$pdoStmt->execute([':codigo'=>$id,'nome'=>$nome,'ape1'=>$apelidos]);


?>