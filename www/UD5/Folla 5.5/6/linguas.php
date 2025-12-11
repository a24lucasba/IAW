<?php
if(isset($_GET['idioma'])){
    setcookie('idioma',$_GET['idioma'],time()+300);
    header ("Location:linguas.php");
}
if (!empty($_COOKIE['idioma'])){
    if ($_COOKIE['idioma'] == "gl"){
        echo "<h1>Benvido!</h1>";
        echo "<p>Esta é unha páxina web en galego. Aquí podes atopar información sobre cookies e xestión de idiomas.</p>";
    }elseif ($_COOKIE['idioma'] == "en"){
        echo "<h1>Welcome!</h1>";
        echo "<p>This is a web page in English. Here you can find information about cookies and language management.</p>";
    }elseif ($_COOKIE['idioma'] == "ch"){
        echo "<h1>欢迎！</h1>";
        echo "<p>这是一个中文网页。在这里你可以找到关于cookies和语言管理的信息。</p>";
    }
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
    <form method="get" action="linguas.php">
        <select name="idioma">>
            <option value="en">Inglés</option>
            <option value="gl">Galego</option>
            <option value="ch">Chino</option>
        </select>
        </select>
        <input type="submit" name="elexir" value="Cambiar idioma">
    </form>
</body>
</html>
