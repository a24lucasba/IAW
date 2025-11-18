<?php

$servidor = "db";
$base = "proba";
$usuario = "root";
$passwd = "root";

try {
//CONECTAMOS
    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $pdoStmt1 = $pdo->query("SELECT max(codCliente) as maxCod FROM cliente");
    $pdoStmt1->execute();

    if ($fila = $pdoStmt1->fetch());
        $id = $fila['maxCod'] + 1;
    
    $pdoStmt2 = $pdo->prepare("INSERT INTO cliente(codCliente,nome,apelidos) VALUES(:codigo,:nome,:ape1)");

    $nome = $_GET['usuario'];
    $apelidos = $_GET['apelidos'];

    $pdoStmt2->execute(params: [':codigo'=>$id,'nome'=>$nome,'ape1'=>$apelidos]);

}
catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
}
$pdo=null;
?>