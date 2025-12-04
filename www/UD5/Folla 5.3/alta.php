<?php

if (!isset($_GET['enviar'])){
    header("Location:rexistro.php");
}else {
    if ($_GET['passwd1'] != $_GET['passwd2']){
        header("Location:rexistro.php?mensaxe=Confirmación de contrasinal incorrecta!");
    }else{
        $usuario = $_GET['usuario'];
        $passHasheado=password_hash($_GET['passwd1'], PASSWORD_DEFAULT);
        $rol = $_GET['rol'];
        $data = date("Y-m-d H:i:s",0);

        $pdo = new PDO("mysql:host=db;dbname=Autenticacion;charset=utf8",'root','root');

        $pdoStmt = $pdo->prepare("INSERT INTO usuariosTempo(nome,passwd,ultimaConexion,rol) VALUES (:usuario,:passwd,:fecha,:rol)");

        try{
            $pdoStmt->execute([':usuario'=>$usuario,':passwd'=>$passHasheado,':fecha'=>$data,':rol'=>$rol]);
            header("Location:rexistro.php?mensaxe=Usuario e contrasinal rexistrados correctamente!");
        }catch(Exception $e){
            $error = $e->getMessage();
            header("Location:rexistro.php?mensaxe=Error al insertar los datos: $error");
        }
    }
}
