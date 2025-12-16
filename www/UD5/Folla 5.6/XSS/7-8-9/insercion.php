<?php
if(!isset($_GET['enviar'])){
    header("Location:rexistro.php");
}
$nome = $_GET['nome'];
$comentario = htmlentities($_GET['comentario']);
try{
    $pdo = new PDO("mysql:host=db;dbname=XSS;charset=utf8","root","root");
    $pdoStmt = $pdo->prepare("INSERT INTO datos(usuario, comentario) VALUES (?,?)");
    $pdoStmt->execute([$nome, $comentario]);
    header("Location:rexistro.php?mensaxe=Usuario e comentario inserido correctamente");
}catch(Exception $e){
    $mensaxe = "Error: ".$e->getMessage();
    header("Location:rexistro.php?mensaxe=$mensaxe");
}

