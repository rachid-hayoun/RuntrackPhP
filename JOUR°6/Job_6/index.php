<?php
    $style = isset($_POST['choix']) ? $_POST['choix'] : 'style.css';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <title>Formulaire CSS/PHP</title>
</head>
<body>
<h1>Formulaire CSS/PHP</h1>
<form action="" method="post">
<select name="choix" id="choix" required>
            <option value="Proposition">Choisissez votre style de page</option>
            <option value="style.css">Style par défault</option>
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select><br><br>
    <input type="submit" value="Soumettre">
</form>
</body>
</html>
