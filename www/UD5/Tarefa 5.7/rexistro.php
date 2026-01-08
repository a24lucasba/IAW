<?php
if (isset($_GET['mensaxe'])){
    echo "Error: ".$_GET['mensaxe'];
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
    <form method="get" action="validarexistro.php">
        <input type="text" name="nomeUsuario" placeholder="Nome usuario" required><br>
        <input type="text" name="nomeCompleto" placeholder="Nome completo" required><br>
        <input type="password" name="contrasinal" placeholder="Contrasinal" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>