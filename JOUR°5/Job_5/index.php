
<?php
$str = "Bonjour";
$char = "o";

echo occurrences($str, $char);  

function occurrences($str, $char) {
    return substr_count($str, $char);
}
?>
