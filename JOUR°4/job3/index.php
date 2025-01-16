<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre d'Arguments $_POST</title>
</head>
<body>

    <h1>Affichage du Nombre d'Arguments $_POST</h1>

    <?php
    if (count($_POST) > 0) {
        echo "<p>Le nombre d'arguments $_POST est : " . count($_POST) . "</p>";
    } else {
        echo "<p>Aucun argument n'a été envoyé via POST.</p>";
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
