<?php
if (isset($_GET['mensaxe'])){
    echo $_GET['mensaxe'];
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
    <br><form method="get" action="insercion.php">
        <input type="text" name="nome" placeholder="Nome" required><br><br>
        <textarea name="comentario" placeholder="Comentario" rows="5" cols="50" required></textarea><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form><br>

    <a href="mostra.php">Ir a mostra.php</a>
</body>
</html>