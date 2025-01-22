<?php session_start(); 
?> 
<!DOCTYPE html> <html lang="fr">
    <head> <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Formulaire PHP</title> 
</head> 
<body>
     <form action="" method="post"> 
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <input type="submit" value="ok"> 
        <input type="submit" name="reset" value="Réinitialiser"> 
    </form> 
<ul> 
<?php $i = 0; 
    while 
    ($i < count($_SESSION['prenoms'])) 
    { echo "<li>" . $_SESSION['prenom'][$i] . "</li>"; $i++; } ?> 
 </ul>
</body>
</html>