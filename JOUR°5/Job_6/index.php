<?php

$str = "Bonjour";
echo leetSpeak($str);  // Affichera "b0nj0ur"

function leetSpeak($str) {
    // Tableau de remplacement des lettres en leet speak
    $leet = array(
        'a' => '4', 
        'b' => '8', 
        'e' => '3', 
        'g' => '6', 
        'l' => '1', 
        'o' => '0', 
        's' => '5', 
        't' => '7'
    );
    
    // Conversion de la chaîne caractère par caractère
    $str = strtolower($str); // Mettre la chaîne en minuscules pour plus de simplicité
    $str = strtr($str, $leet); // Remplacer les lettres par leurs équivalents leet

    return $str;
}
?>
