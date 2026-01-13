<?php

$pdo = new PDO("mysql:host=db;dbname=tarefa5.7;charset=utf8",'tarefa','Tarefa5.7');

$pdoStmt = $pdo->prepare("INSERT INTO usuarios(nome, contrasinal, nomeCompleto, email, rol) VALUES (:nome,:contrasinal,:nomeCompleto,:email,:rol)");

$nome = $_GET['nomeUsuario'];
$nomeCompleto = $_GET['nomeCompleto'];
$passHasheado=password_hash($_GET['contrasinal'], PASSWORD_DEFAULT);
$email= $_GET['email'];

try{
    $pdoStmt->execute([':nome'=>$nome,':contrasinal'=>$passHasheado,':nomeCompleto'=>$nomeCompleto,':email'=>$email,':rol'=>'usuario']);
    header("Location:login.php");
}catch(Exception $e){
    $error = $e->getMessage();
    header("Location:rexistro.php?mensaxe=Error al insertar los datos: $error");
}
    
