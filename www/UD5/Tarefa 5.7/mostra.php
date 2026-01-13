<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location:login.php?mensaxe=Inicia sesión");
}
$usuario = $_SESSION['usuario'];
echo "Usuario: ".$usuario."<br>";

$pdo = new PDO("mysql:host=db;dbname=tarefa5.7;charset=utf8",'tarefa','Tarefa5.7');

$pdoStmt = $pdo->query("SELECT rol FROM usuarios where nome = '$usuario'");
$pdoStmt->execute();
$fila=$pdoStmt->fetch();
$rol= $fila[0];

echo "Rol: ".$rol."<br>";

$pdoStmt2 = $pdo->query("UPDATE usuarios SET data = NOW() WHERE nome='$usuario'");
$pdoStmt2->execute();

if (strcmp($rol,'moderador')==0){

}else {
    $pdoStmt3 = $pdo->query("SELECT nome,descricion,idProduto FROM produto");
    $pdoStmt3->execute();
    echo "<table border='3' cellpading='2'>
        <tr>
            <td>Produto: </td>
            <td>Descrición: </td>
            <td>id: </td>
        </tr>";
    while($fila3=$pdoStmt3->fetch()){
        echo "<tr>
            <td>".$fila3['nome']."</td>
            <td>".$fila3['descricion']."</td>
            <td>".$fila3['idProduto']."</td>
        </tr>";
    }
    echo "</table><br>";

    $pdoStmt4 = $pdo->query("SELECT nome,descricion,idProduto FROM produto");
    $pdoStmt4->execute();

    echo "<form action='comenta.php' method='get'>
            <textarea id='mensaje' name='mensaje' rows='4' cols='50'></textarea><br>
            <select name='produto'>
            ";
            while($fila4=$pdoStmt4->fetch()){
                echo "<option value='".$fila4['idProduto']."'>".$fila4['nome']."</option>";
            }
        echo "</select>
            <input type='submit' name='enviar' value='Enviar'>
        </form>";

    $pdoStmt4 = $pdo->query("SELECT comentario FROM comentarios");
    $pdoStmt4->execute();
    echo "<table border='3' cellpading='2'>
        <tr>
            <td>Comentarios: </td>
        </tr>";
    while($fila3=$pdoStmt3->fetch()){
        echo "<tr>
            <td>".$fila3['comentario']."</td>
        </tr>";
    }
    echo "</table>";
}

?>

