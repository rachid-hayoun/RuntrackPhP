<?php
function calcule($a, $op, $b) {
    switch($op) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : division par zéro";
            }
        default:
            return "Opération non valide";
    }
}
?>
