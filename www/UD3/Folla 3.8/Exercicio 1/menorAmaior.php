<?php

function menorAmaior($a,$b){
    if($a<$b)
        return -1;
    elseif ($a>$b)
        return 1;
    else
        return 0;
}

$datos=array('f'=>4, 'g'=>8, 'a'=>-1, 'b'=>-10);
uasort($datos, 'menorAmaior'); //CHAMAMOS á FUNCIÓN. $datos quedará ORDENADO de menor a maior.


foreach ($datos as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor<br>";
}
?>