<?php require('inc_connexion.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Réalisation d'un site base de données 'ajout'</title>
</head>
<body>
    <?php
    if (isset($_POST['submit_form']))
    {
        $ville_nom = $_POST['ville_nom'];
        $ville_texte = $_POST['ville_texte'];
        if ($mysqli->query('INSERT INTO villes (ville_nom, ville_texte) VALUES ("' .$ville_nom.'", "'.$ville_text.'")'))
        {
         $message = '<p class="message">L\'ajout de la ville '.
        $ville_nom .' est effectué.</p>';    
        }      
    }
    ?>
    <div>
        <h1>
            Ajouter une ville
        </h1>
    <?php if (isset ($message)) echo $message ?>
   <form action="" method="post"></form>
   <p>Nom de la ville: <input type="text" name="ville_nom" /></p>
   <p>Texte de présentation<br>
    <textarea name="ville_texte" cols="32" rows="8"></textarea>
    </p>
    <p><input type="submit" name="submit_form" value="valider" /></p>
    </div>
</body>
</html>