<?php

$servidor = "db";
$base = "proba";
$usuario = "root";
$passwd = "root";

try {
//CONECTAMOS
    $pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    echo "<form action='conexion2.php' method='get'>
        <label for='usuario'>Nome: </label>
        <input type='text' id='usuario' name='usuario'>
        <br>
        <label for='apelidos'>Apelidos: </label>
        <input type='text' id='apelidos' name='apelidos'>
        <br>
        <input type='submit' value='Enviar'><br><br><br>
    </form>";

    if (isset($_GET['usuario'])){
        $nome = $_GET['usuario'];
        if ($nome != ""){
            $pdoStmt = $pdo->query("SELECT * FROM cliente where nome = '$nome'");
            if (isset($_GET['apelidos'])){
                $ape = $_GET['apelidos'];
                if ($ape != ""){
                    $pdoStmt = $pdo->query("SELECT * FROM cliente where nome = '$nome' and apelidos = '$ape'");
                }
                else{
                    $pdoStmt = $pdo->query("SELECT * FROM cliente where nome = '$nome'");
                }
            }
        }
        elseif (isset($_GET['apelidos'])){
        $ape = $_GET['apelidos'];
        if ($ape != ""){
            $pdoStmt = $pdo->query("SELECT * FROM cliente where apelidos = '$ape'");
        }
        else{
            $pdoStmt = $pdo->query("SELECT * FROM cliente ");
        }
    }
        else {
            $pdoStmt = $pdo->query("SELECT * FROM cliente");
        }
    }
    elseif (isset($_GET['apelidos'])){
        $ape = $_GET['apelidos'];
        if ($ape != ""){
            $pdoStmt = $pdo->query("SELECT * FROM cliente where apelidos = '$ape'");
        }
        else{
            $pdoStmt = $pdo->query("SELECT * FROM cliente ");
        }
    }
    else
        $pdoStmt = $pdo->query("SELECT * FROM cliente");

    $pdoStmt->execute();

    while ($fila=$pdoStmt->fetch())
        echo $fila['codCliente']." ".$fila['nome']." ".$fila['apelidos']."<br>";
}
catch(PDOException $e) {
    echo "Erro ao conectar co servidor MySQL: ".$e->getMessage();
}
$pdo=null;
?>