<?php
$tab = ["abc", "def", "ghi", "jkl"];
$croissant = true;
function bubblesort($tab, $croissant) {
    $croissant ? sort($tab) : rsort($tab); 
    // ? opérateur ternaire ; permet de vérifier si la condition de $croissant est vrai alors sort($tab) permet dde trié de manièere croissante
    // et rsort()de manière décroissante
    return implode(", ", $tab);  }
    // implode(".",$tab)permet de fusionner les éléments de  $tab en une chaîne de caractères en les séparant par une virgule et un espace
$result = bubblesort($tab, $croissant); 
echo $result; 
?>
