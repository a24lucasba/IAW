<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="header-container">
        <img src="chimp.jpg" alt="Efrén leyendo" width="400" height="250">
        <h1>BIBLIOTECA</h1>
    </div>
    <h4>Operacións cos exemplares</h4>
    <form action="biblioteca.php" method="get">
        <label for="buscar">Buscar exemplar: </label>
        <input type="text" id="buscar" name="buscar">
        <input type="submit" value="Buscar"><br><br>
        <input type="submit" value="Ver listado completo da biblioteca" name="listaCompleta"><br><br>
        <input type="submit" value="Ver listado completo ordenado polo título" name="listaOrdenada"><br><br><br><br>
    </form>
    <?php
        
        $lista = [
            "El médico"=>["Noah Gordon","Time Warner"],
            "Marina"=>["Carlos Ruíz Zafón","Edebé"],
            "La hoguera de las vanidades"=>["Tom Wolfe","RBA editores"],
            "El libro de las ilusiones"=>["Paul Auster","Faber"],
            "La muerte en Venecia"=>["Thomas Mann","Anaya"],
            "A sangre fría"=>["Truman Capote","Illusions"],
            "2001:Odisea en el espacio"=>["Arthur C. Clarke","Illusions"],
        ];
        $nExemplares=0;

        echo "<table>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                </tr>";
        if (isset($_GET["listaCompleta"])) {
            foreach ($lista as $key => $value) {
            echo "<tr>
                    <td>", $key, "</td>
                    <td>", $value[0], "</td>
                    <td>", $value[1], "</td>
                </tr>";
            $nExemplares++;
            }
        }elseif (isset($_GET["listaOrdenada"])) {
            ksort($lista);
            foreach ($lista as $key => $value) {
            echo "<tr>
                    <td>", $key, "</td>
                    <td>", $value[0], "</td>
                    <td>", $value[1], "</td>
                </tr>";
            $nExemplares++;
            }
        }elseif (isset($_GET["buscar"])){
            $texto = $_GET["buscar"];
            echo "Os exemplares que conteñen '". $texto ."' no campo 'título','autor' ou 'editorial' son:";
            foreach ($lista as $key => $value) {
              if (str_contains($key, $texto) or str_contains($value[0], $texto) or str_contains($value[1], $texto)) {
                echo "<tr>
                        <td>", $key, "</td>
                        <td>", $value[0], "</td>
                        <td>", $value[1], "</td>
                    </tr>";
                $nExemplares++;
                }
            }
        }
        echo "</table>";
        echo "<br><p>O número de exemplares atopados é: ", $nExemplares, "</p>";
    ?>
</body>
</html>