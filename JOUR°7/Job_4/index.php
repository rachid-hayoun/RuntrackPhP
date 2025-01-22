<!DOCTYPE html> <html lang="fr">
    <head> <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Formulaire de connexion</title> 
</head> 
<body>
     <form action="" method="post"> 
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="submit" value="Connexion">
        <form action="" method="post">
        <input type="submit" name="deco" value="Déconnexion">
</form>
    </form> 
<?php
    if(isset($_POST['prenom'])) 
    // condition, si le tableau post est bien raffilier a l'input prenom
    {setcookie("Connexion", $_POST['prenom'], time()+3600);
    // création du cookie avec comme paramètres connexion et prénom
        $prenom = $_POST['prenom'];
    // création de la variable en l'attribuant le tableau
    } elseif(isset($_COOKIE['Connexion'])) {
        $prenom = $_COOKIE['Connexion'];
    }  
    if(isset($prenom)){
        echo 'Bonjour ' . $prenom;
    }
    ?>
