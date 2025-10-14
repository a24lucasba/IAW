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
        $frase = $_GET['frase'];
        $palabra = $_GET['palabra'];
    ?>
</body>
</html>