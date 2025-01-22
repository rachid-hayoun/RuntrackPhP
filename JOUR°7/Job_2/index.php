<?php
$nbvisites = 0;
$nbvisites++;
if (isset($_POST['reset'])) {
    $nbvisites = 0;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"></head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>

