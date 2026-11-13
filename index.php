<!DOCTYPE html>

<html lang="fr">
    <meta chargeset="UTF-8">
    <head>
        <title>CLUEDO</title>
    </head>
    <?php
    if ($_GET["page"] == "accueil") {
    include "pages/accueil.php";
    }
    if ($GET["page"] == "hall") {
    include "pages/hall.php";
    }
    if ($GET["page"] == "salon") {
    include "pages/salon.php";
    }
    if ($GET["page"] == "biblio") {
    include "pages/biblio.php";
    }
    if ($GET["page"] == "billard") {
    include "pages/billard.php";
    }
    if ($GET["page"] == "bureau") {
    include "pages/bureau.php";
    }
    if ($GET["page"] == "veranda") {
    include "pages/veranda.php";
    }
    if ($GET["page"] == "cuisine") {
    include "pages/cuisine.php";
    }
    if ($GET["page"] == "manger") {
    include "pages/manger.php";
    }
    if ($GET["page"] == "hypo") {
    include "pages/hypo.php";
    }
    if ($_GET["page"] == "fin") {
    include "pages/fin.php";
    }
    ?>

</html>