<!DOCTYPE html>
<link rel="stylesheet" href="./styles/style.css">
<html lang="fr">
    <meta chargeset="UTF-8">
    <head>
        <title>CLUEDO</title>
    </head>
    <?php
    if ($_GET["page"] == "accueil") {
    include "pages/accueil.php";
    }
    if ($_GET["page"] == "jeu") {
    include "pages/jeu.php";
    }
    if ($GET["page"] == "hypo") {
    include "pages/hypo.php";
    }
    if ($_GET["page"] == "fin") {
    include "pages/fin.php";
    }


    $bdd_fichier = 'cluedo.db';		//Fichier de la base de données
	$piece = 'Hall';				//Pièce à utiliser
	

	$sqlite = new SQLite3($bdd_fichier);		//On ouvre le fichier de la base de données



    



    $sqlite -> close();	
    ?>

</html>