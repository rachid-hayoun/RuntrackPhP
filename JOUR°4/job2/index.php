<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Arguments $_GET</title>
</head>
<body>

    <h1>Affichage des Arguments $_GET et leurs Valeurs</h1>

    <?php
    if (count($_GET) > 0) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>";

        foreach ($_GET as $argument => $valeur) {
            echo "<tr>
                    <td>" . htmlspecialchars($argument) . "</td>
                    <td>" . htmlspecialchars($valeur) . "</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Aucun argument $_GET n'a été passé.</p>";
    }
    ?>

    <p>Exemple d'URL avec des arguments GET :</p>
    <p><strong>http://votresite.com/nom_du_fichier.php?param1=valeur1&param2=valeur2</strong></p>

</body>
</html>
