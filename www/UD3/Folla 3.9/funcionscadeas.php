<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="cabeceira"></div>
    
    <form action="funcionscadeas.php" method="get">
            <div class="seccion">
                <h3>Introduce Frase</h3>
                <input type="text" name="frase" class="input-frase">
            </div>

            <div class="botones-frase">
                <input type="submit" value="Pasa a maiúscula a primeira letra" name="mayuscula">
                <input type="submit" value="Pasa a minúscula a primeira letra" name="minuscula">
                <input type="submit" value="Elimina os espazos" name="eliminarEspacios">
                <input type="submit" value="Elimina as letras 'e'" name="eliminarE">
                <input type="submit" value="Cambia os puntos por comas" name="puntosAComas">
            </div>

            <div class="seccion">
                <h3>Introduce Palabra</h3>
                <input type="text" name="palabra" class="input-palabra">
            </div>

            <div class="botones-palabra">
                <input type="submit" value="A palabra está na frase?" name="buscarPalabra">
                <input type="submit" value="Elimina a palabra" name="eliminarPalabra">
                <input type="submit" value="Cambia 'tardes' por 'noites'" name="cambiarPalabra">
            </div>
        </form>

    <div class="resultado">
        <h3>Resultado:</h3>
    </div>

    <?php
        if (isset($_GET['frase'])){
            $frase = $_GET['frase'];
        }else{
            $frase = "";
        };
        if (isset($_GET['palabra'])){
            $palabra = $_GET['palabra'];
        }else{
            $palabra = "";
        };

        if (isset($_GET['mayuscula'])){
            echo ucfirst($frase);
        }elseif(isset($_GET['minuscula'])){
            echo lcfirst($frase);
        }elseif(isset($_GET['eliminarEspacios'])){
            echo str_replace(" ","",$frase);
        }elseif(isset($_GET['eliminarE'])){
            $letrasEliminar = array('e','E');
            echo str_replace($letrasEliminar,"",$frase);
        }elseif(isset($_GET['puntosAComas'])){
            echo str_replace('.',",",$frase);
        }elseif(isset($_GET['buscarPalabra'])){
            if(str_contains($frase,$palabra)){
                echo "La palabra '".$palabra."' está en la frase";
            }else{
                echo "La palabra '".$palabra."' NO está en la frase";
            };
        }elseif(isset($_GET['eliminarPalabra'])){
            if(str_contains($frase,$palabra)){
                echo str_replace($palabra,"",$frase);
            }else{
                echo "La palabra '".$palabra."' NO está en la frase";
            };
        }elseif(isset($_GET['cambiarPalabra'])){
            if(str_contains($frase,'tardes')){
                echo str_replace('tardes',"noites",$frase);
            }else{
                echo "La palabra 'tardes' NO está en la frase";
            };
        }else{
            echo "<p>Introduce unha frase ou plabara e pulsa un botón</p>";
        }
    ?>
</body>
</html>