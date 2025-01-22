<?php
setcookie("nbvisites",time()+3600,);

if(isset($_COOKIES['nbvisites'])){
    echo 'Le nombre de visites : ' . $_COOKIES['nbvisites'];
}
else {
    $_COOKIES['nbvisites']++;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_COOKIES['nbvisites']; ?></p>   
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

    