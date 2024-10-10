<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <table width="50%">
        <tr>
            <th>Indirizzo</th>
            <th>Metri quadri</th>
            <th>Prezzo al metro quadro</th>
            <th>Prezzo totale</th>
        </tr>
        <tr>
        <?php
            $casa = array('indirizzo' => 'Via delle Macine 24', 'metriQuadri' => 102.7, 'prezzoMetroQuadro' => 2000.0);
            $casa['prezzoTotale'] = $casa['metriQuadri'] * $casa['prezzoMetroQuadro'];
            foreach ($casa as $value) {
                echo "<td>$value</td>";
            }
        ?>
        </tr>
    </table>
</body>
</html>