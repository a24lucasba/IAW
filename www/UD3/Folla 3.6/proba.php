<?php

    $n1 = 1;
    $n2 = 2;
    $n3 = 3;
    $n4 = 4;
    $resultado = $n3;
    $numeros = [$n1,$n2,$n3,$n4];



    foreach ($numeros as $n){
            if ($resultado < $n) {
                $resultado = $n;
                
            }
        }
    
    echo $resultado;
?>