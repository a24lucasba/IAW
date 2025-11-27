<?php
session_start();

if (isset($_GET['usuario'])){
    $_SESSION['usuario'] = $_GET['usuario'];
}
if (isset($_GET['passwd'])){
    $_SESSION['passwd'] = $_GET['passwd'];
}
if (isset($_GET['enviar'])){
    $_SESSION['enviar'] = $_GET['enviar'];
}

if (!isset($_GET['enviar'])){
    if (!isset($_GET['ordenEmpresa'])){
        if(!isset($_GET['ordenEmpregado'])){
            if(!isset($_GET['insertar'])){
                header("location:login.php");
            }
        }
    }
}

if ($_SESSION['usuario']=='ana' and $_SESSION['passwd']=='abc123.'){
    echo "Conectado como ana<br><br>";

    echo "<form method='get' action='engade.php'>
    <input type='submit' name='engadir' value='Engadir rexistro'><br>
    </form>";

}elseif ($_SESSION['usuario']=='xan' and $_SESSION['passwd']=='abc123.'){
    echo "Conectado como xan<br><br>";
}else{
    header("location:login.php?error=Usuario o contraseña incorrectos!");
}
echo "<form method='get' action='datos.php'>
    <input type='submit' name='ordenEmpresa' value='Ordenar por nome da Empresa'><br><br>
    <input type='submit' name='ordenEmpregado' value='Ordenar por Empregado Asignado'>
    </form><br><br>";

$pdo = new PDO("mysql:host=db;dbname=empresa;charset=utf8",$_SESSION['usuario'],$_SESSION['passwd']);

if(isset($_GET['ordenEmpresa'])){
    $pdoStmt = $pdo->query("SELECT * FROM cliente order by nome");
}elseif(isset($_GET['ordenEmpregado'])){
    $pdoStmt = $pdo->query("SELECT * FROM cliente order by num_empregado_asignado");
}else{
    $pdoStmt = $pdo->query("SELECT * FROM cliente");
}
if (isset($_GET['insertar'])){
    try{
        $pdoStmt2 = $pdo->prepare("INSERT INTO cliente(numero, nome, num_empregado_asignado, limite_de_credito) VALUES (:numero,:nome,:numEmp,:credito)");

        $pdoStmt2->execute([':numero'=>$_GET['numero'],':nome'=>$_GET['nome'],':numEmp'=>$_GET['numEmp'],':credito'=>$_GET['credito']]);
    }catch(Exception $e){
		echo "Error al insertar los datos: ", $e->getMessage(), "\n","<br><br>";
    }
}

$pdoStmt->execute();

echo "<table border=8 cellpading=2>
    <tr>
        <td>Numero</td>
        <td>Nome</td>
        <td>Numero de empregado asignado</td>
        <td>Límite de crédito</td>
    </tr>";
while ($fila = $pdoStmt->fetch()){
    echo "<tr>
        <td>".$fila['numero']."</td>
        <td>".$fila['nome']."</td>
        <td>".$fila['num_empregado_asignado']."</td>
        <td>".$fila['limite_de_credito']."</td>
        </tr>";
}
echo "</table>";











    
