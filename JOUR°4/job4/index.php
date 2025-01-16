<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Arguments $_POST</title>
</head>
<body>

    <h1>Affichage des Arguments $_POST et leurs Valeurs</h1>

    <?php
    if (count($_POST) > 0) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>";

        foreach ($_POST as $argument => $valeur) {
            echo "<tr>
                    <td>" . htmlspecialchars($argument) . "</td>
                    <td>" . htmlspecialchars($valeur) . "</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Aucun argument $_POST n'a été envoyé.</p>";
    }
    ?>

    <h2>Formulaire de Test</h2>
    <form method="POST" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
