<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $puntos = array("Ana"=>123, "Belén"=>14,"Felipe"=>3,"Moncho"=>245,"Artur"=>10);

        echo "<table border='1' cellpadding='10' cellspacing='0'>
                <tr>
                    <th>Nome da función</th>
                    <th>Explicación da función</th>
                    <th>Exemplo</th>
                    <th>Mostra por pantalla</th>
                </tr>
                <tr>
                    <td>sort( )</td>
                    <td>Ordena os valores dun array en orde ascendente</td>
                    <td>sort(\$puntos)</td>
                    <td>Array ( [0] => 3 [1] => 10 [2] => 14 [3] => 123 [4] => 245 )</td>
                </tr>
                <tr>
                    <td>rsort( )</td>
                    <td>Ordena os valores dun array en orde descendente</td>
                    <td>rsort(\$puntos)</td>
                    <td>Array ( [0] => 245 [1] => 123 [2] => 14 [3] => 10 [4] => 3 )</td>
                </tr>
                <tr>
                    <td>asort( )</td>
                    <td>Ordena os valores mantendo a asociación coa clave</td>
                    <td>asort(\$puntos)</td>
                    <td>Array ( [Felipe] => 3 [Artur] => 10 [Belén] => 14 [Ana] => 123 [Moncho] => 245 )</td>
                </tr>
                <tr>
                    <td>arsort( )</td>
                    <td>Ordena os valores en orde descendente mantendo as claves</td>
                    <td>arsort(\$puntos)</td>
                    <td>Array ( [Moncho] => 245 [Ana] => 123 [Belén] => 14 [Artur] => 10 [Felipe] => 3 )</td>
                </tr>
                <tr>
                    <td>ksort( )</td>
                    <td>Ordena o array polas claves en orde ascendente</td>
                    <td>ksort(\$puntos)</td>
                    <td>Array ( [Ana] => 123 [Artur] => 10 [Belén] => 14 [Felipe] => 3 [Moncho] => 245 )</td>
                </tr>
                <tr>
                    <td>krsort( )</td>
                    <td>Ordena o array polas claves en orde descendente</td>
                    <td>krsort(\$puntos)</td>
                    <td>Array ( [Moncho] => 245 [Felipe] => 3 [Belén] => 14 [Artur] => 10 [Ana] => 123 )</td>
                </tr>
                <tr>
                    <td>shuffle()</td>
                    <td>Mestura aleatoriamente os elementos do array</td>
                    <td>shuffle(\$puntos)</td>
                    <td>Array ( [0] => 14 [1] => 245 [2] => 3 [3] => 123 [4] => 10 )</td>
                </tr>
                <tr>
                    <td>array_reverse( )</td>
                    <td>Inverte a orde dos elementos do array</td>
                    <td>array_reverse(\$puntos)</td>
                    <td>Array ( [Artur] => 10 [Moncho] => 245 [Felipe] => 3 [Belén] => 14 [Ana] => 123 )</td>
                </tr>
            </table>";
    ?>
</body>
</html>