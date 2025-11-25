<?php
session_start();

$_SESSION['usuario'] = $_GET['usuario'];
$_SESSION['passwd'] = $_GET['passwd'];
if ($_SESSION['usuario']=='ana' and $_SESSION['passwd']=='abc123.'){
    echo "Conectado como ana<br><br>";

    "<form method='get' action='engade.php'>
    <input type='submit' name='engadir' value='Engadir rexistro'><br>
    </form>";

}elseif ($_SESSION['usuario']=='xan' and $_SESSION['passwd']=='abc123.'){
    echo "Conectado como xan<br><br>";
}else{
    header("location:login.php?error=Usuario o contraseña incorrectos!");
}
echo "<form method='get' action='datos.php'>
    <input type='submit' name='ordenEmpresa' value='Ordenar por nome da Empresa'><br>
    <input type='submit' name='ordenEmpregado' value='Ordenar por Empregado Asignado'>
    </form>";

$pdo = new PDO("mysql:host=db;dbname=empresa;charset=utf8",$_GET['usuario'],$_GET['passwd']);

if(isset($_GET['ordenEmpresa'])){
    $pdoStmt = $pdo->prepare("SELECT * FROM cliente order by 'nome'");
}elseif(isset($_GET['ordenEmpregado'])){
    $pdoStmt = $pdo->prepare("SELECT * FROM cliente order by 'num_empregado_asignado'");
}else{
    $pdoStmt = $pdo->prepare("SELECT * FROM cliente");
}

$pdoStmt->execute();










    
