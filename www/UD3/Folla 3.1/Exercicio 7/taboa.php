<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table>
        <tr>
            <th>Nome elemento</th>
            <th>Valor elemento</th>
        </tr>
        <tr>
            <td>Nome e Apelidos</td>
            <td>" . $_GET['nome'] . "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>" . $_GET['apelidos'] . "</td>
        </tr>
        <tr>
            <td>Experiencia</td>";
                if (isset($_GET['musico']) or isset($_GET['comico']) or isset($_GET['actor'])) {
                if (isset($_GET['musico'])) {
                    echo "<td>Músico </td>";
                }
                if (isset($_GET['comico'])) {
                    echo "<td>Cómico </td>";
                }
                if (isset($_GET['actor'])) {
                    echo "<td>Actor </td>";
                }
            } else {
                echo "<td>Sin experiencia</td>";
            }
        echo "</tr>
        <tr>
            <td>Idade</td>";
            if (isset($_GET["idade"])){
                echo "<td>" . $_GET['idade'] . "</td>";
        } else {
            echo "<td>Idade sen marcar</td>";
        }
        echo    
        "</tr>
            <td>Metodo</td>
            <td>" . $_GET['metodo'] . "</td>
        <tr>

        </tr>
        <tr>
            <td>Comentarios</td>
            <td>" . $_GET['comentarios'] . "</td>
        </tr>
        </table>";
    ?>
</body>
</html>