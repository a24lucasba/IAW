<?php
session_start();

$usuario = $_GET['usuario'];
$contrasinal = $_GET['passwd'];

$pdo = new PDO("mysql:host=db;dbname=tarefa5.7;charset=utf8",'tarefa','Tarefa5.7');

$pdoStmt = $pdo->query("SELECT contrasinal FROM usuarios where nome = '$usuario'");
$pdoStmt->execute();

$fila=$pdoStmt->fetch();
if($pdoStmt->rowCount() == 1 ) //HAI UN USUARIO
    $contrasinalBD=$fila[0];

if ($pdoStmt->rowCount() == 0 || !password_verify($contrasinal,$contrasinalBD)) {
    header("Location:login.php?mensaxe=Usuario ou contrasinal inválidos");
}else{
    $_SESSION['usuario']=$usuario;
    header("Location:mostra.php");
}

