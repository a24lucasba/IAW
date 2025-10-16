<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="header">
        <div class="film-strip"></div>
        <h1>Cine</h1>
    </div>
    
    <div class="container">
        <div class="left-section">
            <img src="claqueta.jpg" alt="Claqueta de cine" class="claqueta">
        </div>
        
        <div class="right-section">
            <form action="cine.php" method="get">
                <div class="search-section">
                    <label>Buscar exemplar</label>
                    <input type="text" name="Buscar" id="Buscar">
                    <input type="submit" value="Buscar">
                </div>
                
                <div class="buttons-section">
                    <input type="submit" value="Ver listado completo das películas" name="listaCopleta">
                    <input type="submit" value="Ordenado pola duración das pelílucas" name="ordenarDuracion">
                    <input type="submit" value="Ordenado polo director" name="ordenDirector">
                    <input type="submit" value="Ordenado polo título" name="ordenTitulo">
                </div>
                
                <div class="duration-section">
                    <label>Con duración maior que:</label>
                    <input type="number" name="duracion" id="duracion">
                    <input type="submit" value="Buscar" name="filtrarDuracion">
                </div>
            </form>
        </div>
    </div>
    <?php
        $pelis=array("Ciudadano Kane"=>array("Orson Welles",119),
			 "Casablanca"=>array("Michael Curtiz",102),
			 "El Padrino"=>array("Francis Ford Coppola",175),
			 "Lo que el viento se llevó"=>array("Victor Fleming",224),
			 "Lawrence de Arabia"=>array("David Lean",217),
			 "El mago de Oz"=>array("Victor Fleming",101),
			 "El graduado"=>array("Mike Nichols",105),
			 "La ley del silencio"=>array("Elia Kazan",108),
			 "La lista de Schindler"=>array("Steven Spielberg",195),
			 "Cantando bajo la lluvia"=>array("Stanley Donen-Gene Kelly",99));
    ?>
</body>
</html>