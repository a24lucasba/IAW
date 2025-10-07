<?php
    $puntos = array("Ana"=>123, "Belén"=>14,"Felipe"=>3,"Moncho"=>245,"Artur"=>10);
    foreach ($puntos as $key => $value) {
        echo $key;
    }
    sort($puntos);
    foreach ($puntos as $key => $value) {
        echo $key;
    }
?>