<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $id = $_GET['id'];
    $mysqli = new mysqli('localhost', 'root', '','projet_villes');
    $result = $mysqli->query('SELECT ville_id, ville_nom, ville_texte FROM villes WHERE ville_id = ' . $id);
    $row = $result->fetch_array();
    $nom = $row['ville_nom'];
    $texte = $row['ville_texte'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Réalisation d'un site base de données 'ville'</title>
</head>
<body>
    <div>
        <h1>
            <?php echo $nom ?>
        </h1>
        <p>
        <?php echo $texte ?>
        </p>
        <?php
        $result = $mysqli->query('SELECT ville_id, ville_nom FROM villes');
        while ($row = $result->fetch_array())
        $villes [$row['ville_id']] = $row['ville_nom'];
        ?>
    </div>
    <ul>
        <li>
            <a href="index.php">Accueil</a>
        </li>
        <?php foreach ($villes as $id => $ville) : ?>       
        <li>
            <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
        </li>
        <?php endforeach ?>    
    </ul>
        <?php
        $result->free();
        $mysqli->close();
        ?>
</body>
</html>