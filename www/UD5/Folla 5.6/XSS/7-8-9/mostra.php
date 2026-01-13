<?php
$pdo = new PDO("mysql:host=db;dbname=XSS;charset=utf8","root","root");

$pdoStmt = $pdo->query("SELECT * FROM datos");
$pdoStmt->execute();

echo "<table>
        <tr>
            <td>Nome</td>
            <td>Comentario</td>
        </tr>";

while ($fila = $pdoStmt->fetch()){
    echo "<tr>
            <td>".$fila['usuario']."</td>
            <td>".$fila['comentario']."</td>
        </tr>";
}
echo "</table>";