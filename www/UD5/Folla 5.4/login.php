<?php
session_start();

//SE NON ESTÁ AUTENTICADO PEDIMOS CREDENCIAIS

if (isset($_GET['mensaxe'])){
    echo $_GET['mensaxe'];
    echo "<br><br>";
}

echo "<form method='get' action='comprobacredenciais.php'>
    <input type='text' name='usuario' placeholder='usuario'><br>
    <input type='password' name='passwd' placeholder='contrasinal'><br>
    <input type='submit' value='Comprobar credenciais' name='comproba'>
</form>
<br><br>
<form method='get' action='rexistro.php'>
    <input type='submit' name='inserir' value='Rexistrarse'>
</form><br>";





