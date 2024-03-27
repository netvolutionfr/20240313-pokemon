<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Pokémons</title>
    <link rel="stylesheet" href="css/pico.min.css" />
</head>
<body>
<main class="container">
    <h2>Liste des Pokémons</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Type 1</th>
            <th>Type 2</th>
            <th>Sous Evolution</th>
            <th>Evolution</th>
            <th>Région</th>
            <th>Génération</th>
        </tr>
        <?php
        require 'db.php';
        $sql = "SELECT
    pokemon.nom,
    t1.type as type1,
    t2.type as type2,
    p1.nom as sousevolution,
    p2.nom as evolution,
    region.region,
    pokemon.generation
FROM
    pokemon
INNER JOIN type AS t1 ON pokemon.type1 = t1.id
LEFT JOIN type AS t2 ON pokemon.type2 = t2.id
INNER JOIN region ON pokemon.region = region.id
LEFT JOIN pokemon AS p1 ON pokemon.sousevolution = p1.id
LEFT JOIN pokemon AS p2 ON pokemon.evolution = p2.id
WHERE pokemon.type1 = 1
ORDER BY pokemon.id
";
        $stmt = $db->query($sql);
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['type1'] . "</td>";
            echo "<td>" . $row['type2'] . "</td>";
            echo "<td>" . $row['sousevolution'] . "</td>";
            echo "<td>" . $row['evolution'] . "</td>";
            echo "<td>" . $row['region'] . "</td>";
            echo "<td>" . $row['generation'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</main>
</body>
</html>