<?php

function ordearClaves($a,$b){
    if(strcmp($a,$b)>0){
        return -1;
    }elseif(strcmp($a,$b)<0){
        return 1;
    }else{
        return 0;
    }
}

$datos=array("f"=>4, "g"=>8, "a"=>-1, "b"=>-10);
uksort($datos,"ordearClaves");

foreach($datos as $clave=>$valor){
    echo "Clave: $clave - Valor: $valor <br>";
}
?>