<?php
session_start();


if (isset($_GET['comproba'])){
    $_SESSION['usuario'] = $_GET['usuario'];
    $_SESSION['passwd'] = $_GET['passwd'];
}

$usuario = $_SESSION['usuario'];
$passwd = $_SESSION['passwd'];

$host = "db";
$db = "Autenticacion";
$user = "root";
$pass = "root";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass);
$pdoStmt = $pdo->query("SELECT * FROM usuariosTempo where nome='$usuario'");

$pdoStmt->execute();

if($pdoStmt->rowCount() == 1 ) {//HAI UN USUARIO
    while ($fila=$pdoStmt->fetch()){
            if(password_verify($passwd, $fila['passwd'])) {
                $_SESSION['rol'] = $fila['rol'];
                header ("Location:mostra.php");
            }
            else {
                header("Location:login.php?mensaxe=Contrasinal incorrecta");
            }
        }
}else{
    header ("Location:login.php?mensaxe=Usuario inexistente");
}

