<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre d'Arguments $_GET</title>
</head>
<body>

    <h1>Affichage du Nombre d'Arguments $_GET</h1>

    <?php
    $nombre_arguments = count($_GET);

    echo "<p>Le nombre d'arguments $_GET est : " . $nombre_arguments . "</p>";
    ?>

</body>
</html>
