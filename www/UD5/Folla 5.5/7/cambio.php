<?php
if (isset($_GET['dark'])){
    setcookie("modo","dark",time()+3600);
    header("Location:cookies.php");
}elseif (isset($_GET['light'])){
    setcookie("modo","light",time()+3600);
    header("Location:cookies.php");
}else{
    header("Location:cookies.php");
}

