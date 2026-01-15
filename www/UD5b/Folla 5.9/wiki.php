<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Busca de termos</h3>
        <form method="get" action="wiki.php">
            <label for="termo">Termo de busca:</label>
            <input type='text' name='termo' /><br>
            <label>Elexir idioma</label>
            <select name="idioma">
                <option value="gl">Galego</option>
                <option value="es">Castelán</option>
                <option value="en">Inglés</option>
            </select><br>
            <label>Numero de páxinas a buscar</label>
            <input type="number" name="numero"><br>
            <input type='submit' value='Busca'>
        </form>
    </div>
    <?php
    /* A WIKIPEDIA OBRIGA A DEFINIR UN USER-AGENT_ */
    ini_set('user_agent', 'ScriptPHP (proba@iessanclemente.com)');
    if (!empty($_GET['termo'])) {
        $url = 'http://en.wikipedia.org/w/api.php';
        $url .= '?action=query';
        $url .= '&list=search';
        if (isset($_GET['numero'])){
            if (is_numeric($_GET['numero'])){
                $numero = $_GET['numero'];
                $url .= '&srlimit='.$numero;
            }
        }
        $url .= '&format=xml';
        $url .= '&redirects';
        $url .= '&srsearch=' . urlencode($_GET['termo']);
        $lista_paxinas = file_get_contents($url);
        file_put_contents('paxina.xml', $lista_paxinas);
        echo '
<hr>
<div>
<h3>Listado de páxinas co termo' . $_GET['termo'] . '</h3>
<ul>';
        $xml = new SimpleXMLElement($lista_paxinas);
        foreach ($xml->query->search->children() as $pax) {
            $params = 'termo=' . $_GET['termo'];
            $params .= '&pax=' . urlencode($pax['title']);
            $pageid =(string) $pax['pageid'];
            $wikiUrl = "https://".$_SESSION['idioma'].".wikipedia.org?curid=$pageid";
            echo "<li><a href='?$params'>" . $pax['title'] . "</a> | <a href=".$wikiUrl." target=_blank>Abrir en wikipedia</a></li>";
        }
        ?>
        </ul>
        </div>
        <?php
        if (isset($_GET['idioma'])){
            $_SESSION['idioma']= $_GET['idioma'];
        }
        if (!empty($_GET['pax'])) {
            $url = 'http://'.$_SESSION['idioma'].'.wikipedia.org/w/api.php';
            $url .= '?action=parse';
            $url .= '&prop=text';
            $url .= '&format=xml';
            $url .= '&redirects';
            $url .= '&page=' . urlencode($_GET['pax']);
            $paxina = file_get_contents($url);
            $obxecto = json_decode($paxina);
            echo '<hr> <div>
            <h3>Contido da páxina: ' . $_GET['pax'] . '</h3>';
            echo htmlspecialchars_decode($paxina);
        }
        echo '</div>';
    } ?>
</body>

</html>