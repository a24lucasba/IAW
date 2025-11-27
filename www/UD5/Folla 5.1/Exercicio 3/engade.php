<?php
session_start();

if (!isset($_GET['engadir'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inserte todos los datos</h2>
    <form method='get' action='datos.php'>
        <input type='text' name='numero' placeholder='Insertar número' required><br>
        <input type='text' name='nome' placeholder='Insertar nome' required><br>
        <input type='text' name='numEmp' placeholder='Insertar número de empregado asignado' required><br>
        <input type='text' name='credito' placeholder='Insertar límite de crédito' required><br><br>
        <input type='submit' name='insertar' value='Insertar rexitro'>
    </form>
</body>
</html>