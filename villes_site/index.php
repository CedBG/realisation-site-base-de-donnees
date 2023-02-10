<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Réalisation d'un site base de données</title>
</head>
<body>
    <div>
        <h1>Accueil</h1>
        <p>
            Bienvenue sur le mini-site consacré aux villes.
        </p>
        <p>
            Ce site utilise PHP et MySQL.
        </p>
        <p>
            Utilisez le menu de navigation pour consulter les pages du site.
        </p>
        <p>
            Bonne visite !
        </p>
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'projet_villes');
        $result = $mysqli->query("SELECT ville_id, ville_nom FROM villes");
        while ($row = $result->fetch_array())
        {
            $villes[$row['ville_id']] = $row['ville_nom'];
        }
        ?>
    </div>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <?php foreach ($villes as $id => $ville) : ?> 
        <li><a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a></li>
        <?php endforeach ?>
    </ul>
    <?php
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>