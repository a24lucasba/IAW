<?php
session_start();
echo session_id();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
</head>

<body>
    <br />
    <?php
    /* PODEMOS ACCEDER Á VARIABLE */
    echo "<br>O usuario é ", $_SESSION['usuario'];
    ?>
    <h2>Estou na páxina 1b!! </h2>
    <a href='sesion1a.php'>Ir a sesion1a</a>
    <br>
</body>

</html>