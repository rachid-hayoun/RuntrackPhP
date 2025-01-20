<?php

function gras($str) {
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {  
            $word = "<strong>$word</strong>";  
        }
    }
    return implode(' ', $words); 
}
function cesar($str, $shift = 2) {
    $result = '';
    foreach (str_split($str) as $char) {

        if (ctype_alpha($char)) {
            $ascii_offset = ctype_lower($char) ? 97 : 65;
            $new_char = chr(($char) - $ascii_offset + $shift) % 26 + $ascii_offset;
            $result .= $new_char;
        } else {
            $result .= $char; 
        }
    }
    return $result;
}
function plateforme($str) {
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (substr($word, -2) == 'me') { 
            $word = "_";
        }
    }
    return implode(' ', $words); 
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str']; 
    $transformation = $_POST['transformation'];
    
    switch ($transformation) {
        case 'gras':
            $str = gras($str);
            break;
        case 'cesar':
            $str = cesar($str, 2);
            break;
        case 'plateforme':
            $str = plateforme($str);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de transformation de texte</title>
</head>
<body>
    <h1>Formulaire de transformation de texte</h1>
    <form method="post">
        <label for="str">Entrez une chaîne de caractères :</label><br>
        <input type="text" id="str" name="str" required><br><br>
        
        <label for="transformation">Choisissez une transformation :</label><br>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras (mots commençant par une majuscule)</option>
            <option value="cesar">César (décalage des lettres)</option>
            <option value="plateforme">Plateforme (mots finissant par "me" deviennent "_")</option>
        </select><br><br>
        
        <input type="submit" value="Appliquer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h2>Résultat :</h2>";
        echo "<p>$str</p>";
    }
    ?>
</body>
</html>
