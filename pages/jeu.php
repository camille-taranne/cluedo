<!DOCTYPE html>
<link rel="stylesheet" href="./styles/style.css">
<html lang="fr">
    <meta chargeset="UTF-8">
    <head>
        <title>JEU</title>
    </head>
    <?php
    
    
    if ($_GET["piece"] == "hall") {
    echo "<img src=\"./img/hall.png\" alt=\"hall\">" ;
    }
    if ($_GET["piece"] == "salon") {
    echo "<img src=\"./img/salon.png\" alt=\"salon\">" ;
    }
    if ($_GET["piece"] == "biblio") {
    echo "<img src=\"./img/biblio.png\" alt=\"bibliothèque\">" ;
    }
    if ($_GET["piece"] == "billard") {
    echo "<img src=\"./img/billard.png\" alt=\"salle de billard\">" ;
    }
    if ($_GET["piece"] == "bureau") {
    echo "<img src=\"./img/bureau.png\" alt=\"bureau\">" ;
    }
    if ($_GET["piece"] == "veranda") {
    echo "<img src=\"./img/veranda.png\" alt=\"veranda\">" ;
    }
    if ($_GET["piece"] == "cuisine") {
    echo "<img src=\"./img/cuisine.png\" alt=\"cuisine\">" ;
    }
    if ($_GET["piece"] == "manger") {
    echo "<img src=\"./img/manger.png\" alt=\"salle à manger\">" ;
    }
    
    
    
    ?>
</html>