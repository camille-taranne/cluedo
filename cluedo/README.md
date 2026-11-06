# cluedo

joueur select un des persos (menu déroullant dans l'accueil?)
lancement de partie -> genere : perso_coupable, arme_coupable, piece_coupble caché du joueur
position du joueur = hall

hall -> Salon, Salle_a_manger
Salon -> Hall, Bibliotheque, Salle_de_billiard
Bibliotheque -> Salon, Salle_de_Billiard
Salle_de_billiard -> Salon, Bibliotheque, Bureau, Veranda
Bureau -> Salle_de_billiard
Veranda -> Salle_de_billiard, Cuisine
Cuisine -> Veranda, Salle_a_manger
Salle_a_manger -> Hall, Cuisine

chque piece = 1 page
deplace de 1 salle a la fois

formule hypothese -> choisit 1 perso, arme, piece
si correcte : fin du jeu
sinon : recoit message disant qu'un des elements faux au hasard est incorrecte
forcé de bouger apres avoir fais une hypothese

fin : affiche combi correct, nb hypothese, nb pieces visités, boutton pour recommencer

pages neccessaires : accueil, 1/piece (8), hypothese, fin

dbeaver pour .db