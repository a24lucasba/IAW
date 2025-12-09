<?php

setcookie("lingua","inglés",time()+600);
if(!isset($_COOKIE['lingua'])){
    header("Location:cookie.php");
}
echo $_COOKIE["lingua"];

// borrar

setcookie('lingua','inglés',1); // Unha fecha anterior ao presente