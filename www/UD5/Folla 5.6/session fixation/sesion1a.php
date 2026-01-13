<?php
session_start();
if(!isset($_SESSION['usuario'])){
    session_regenerate_id(true);
    $_SESSION['usuario']= true;
}
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
    <!-- DEFINIMOS UNHA VARIABLE -->
    <?php
    $_SESSION['usuario'] = "Xan";
    ?>
    <h2>Estou na páxina 1a!! </h2>
    <a href="sesion1b.php">Ir a sesion1b </a>
</body>

</html>