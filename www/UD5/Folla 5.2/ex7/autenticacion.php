<?php
//SE NON ESTÁ AUTENTICADO PEDIMOS CREDENCIAIS
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm='Contido restrinxido'");
    header("HTTP/1.0 401 Unauthorized");
    die();
}

$host = "db";
$db = "Rexistro";
$user = "root";
$pass = "root";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $conPDO = new PDO($dsn, $user, $pass);
    $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Erro na conexión mensaxe: " . $ex->getMessage());
}
// COMPROBAMOS SE EXISTE O USUARIO, E RECOLLEMOS O PASSWORD GARDADO NA BD
$consulta = "select contrasinal from usuarios where usuario=:nomeTecleado";
$stmt = $conPDO->prepare($consulta);
try {
    $stmt->execute(array('nomeTecleado' => $_SERVER['PHP_AUTH_USER']));
} catch (PDOException $ex) {
    $conPDO = null;
    die("Erro recuperando os datos da BD: " . $ex->getMessage());
}
$fila = $stmt->fetch();
if ($stmt->rowCount() == 1) //HAI UN USUARIO
    $contrasinalBD = $fila[0];
$passTecleado = $_SERVER['PHP_AUTH_PW'];
// COMPROBAMOS QUE O HASH GARDADO É COMPATIBLE CO TECLEADO.
//TEMOS QUE COMPROBAR ANTES QUE HAI ALGÚN USUARIO:
if ($stmt->rowCount() == 0 || !password_verify($passTecleado, $contrasinalBD)) {
    header("WWW-Authenticate: Basic realm='Contido restrinxido'");
    header("HTTP/1.0 401 Unauthorized");
    $stmt = null;
    $conProyecto = null;
    die();
}
$stmt = null;
$conPDO = null;

echo "Acceso exitoso<br>Usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br>Contrasinal: " . $passTecleado;

echo "<br><br><form method='get' action='rexistro.php'>
        <input type='submit' name='inserir' value='Inserir novo usuario'>
    </form><br>
    <form method='get' action='autenticacion.php'>
        <input type='submit' name='listaUsuarios' value='Ver lista de usuarios y contrasinais'>
        <input type='submit' name='pechar' value='Pechar lista'>
    </form>";

if (isset($_GET['listaUsuarios'])){
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass);
    $pdoStmt = $pdo->query("SELECT * FROM usuarios");
    $pdoStmt->execute();
    echo "<table border=1>
        <tr>
            <td>Usuario</td>
            <td>Contrasinal Cifrada</td>
        </tr>";
    while ($fila = $pdoStmt->fetch()){
        echo "<tr>
            <td>".$fila['usuario']."</td>
            <td>".$fila['contrasinal']."</td>
        </tr>";
    }
    echo "</table>";
}

