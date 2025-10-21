<?php

    $conexion = mysqli_connect("db","usuario","abc123.","folla1");

    if ($conexion){
        echo "Conexión correcta.<br><br>";
        mysqli_set_charset($conexion,"utf8");
        
        $resultadoApelido = mysqli_query($conexion,"SELECT * FROM xogador where apelidos>'García'");
        echo "<h2>Lista completa de xogadores con apelidos maiores que “García”</h2><br>";
        if ($resultadoApelido != false){
            echo "<table>";
            while ($fila = mysqli_fetch_array($resultadoApelido)){
                echo "<tr>
                    <td>".$fila['id']."</td>
                    <td>".$fila['dni']."</td>
                    <td>".$fila['nome']."</td>
                    <td>".$fila['apelidos']."</td>
                    <td>".$fila['idade']."</td>
                    </tr>";
            }
            echo "</table>";
        }

        $resultadoIdade30 = mysqli_query($conexion,"SELECT * FROM xogador where idade<30");
        echo "<h2>Lista de xogadores menores de 30 anos:</h2><br>";
        if ($resultadoIdade30 != false){
            echo "<table>";
            while ($fila = mysqli_fetch_array($resultadoIdade30)){
                echo "<tr>
                    <td>".$fila['id']."</td>
                    <td>".$fila['dni']."</td>
                    <td>".$fila['nome']."</td>
                    <td>".$fila['apelidos']."</td>
                    <td>".$fila['idade']."</td>
                    </tr>";
            }
            echo "</table>";
        }

        $resultadoIdade22 = mysqli_query($conexion,"SELECT count(id) as num_adultos FROM xogador where idade>22");
        echo "<h2>Cantos de xogadores son maiores de 22 anos:</h2><br>";
        if ($resultadoIdade22 != false){
            $fila = mysqli_fetch_array($resultadoIdade22);
            echo "Hai ".$fila['num_adultos']." xogadores maiores de 22 anos.";
        }

    }else{
        echo "Conexión incorrecta";
    }
    mysqli_close($conexion);