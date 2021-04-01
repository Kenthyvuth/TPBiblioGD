<?php
    header("Content-Type: image/png");
	
	//Création de l'image
	$image = @ImageCreate (200, 275) or die ("Impossible de réaliser le dessin");
	
	//Initialisation des couleurs
	$background = ImageColorAllocate ($image, 240, 240, 240); //Le fond de l'image sera gris clair
	$noir = ImageColorAllocate ($image, 0, 0, 0); //Couleur noire
	$rouge = ImageColorAllocate ($image, 255, 0, 0); //Couleur rouge
	
	ImageSetThickness ($image, 10); //Réglage de l'épaisseur de tous les traits de la figure
	
	//Structure générale de chaque traits
	$milieu = ImageLine ($image, 100, 50, 100, 250, $rouge); //Trait central
	$verticaleG = ImageLine ($image, 50, 173, 45, 105, $rouge); //Verticale gauche
	$verticaleD = ImageLine ($image, 163, 100, 147, 160, $rouge); //Verticale droite
	$horizontaleH = ImageLine ($image, 40, 115, 160, 105, $rouge); //Horizontale haute
	$horizontaleB = ImageLine ($image, 50, 165, 160, 155, $rouge); //Horizontale basse
	
	//Petits détails du dessin (notamment les bordures)
	$epaisseur_verticaleD = ImageLine ($image, 155, 100, 150, 155, $rouge);
	$bord_milieuG = ImageLine ($image, 92, 250, 90, 210, $background);
	$bord_milieuD = ImageLine ($image, 107, 250, 110, 210, $background);
	$bord_verticaleB = ImageLine ($image, 40, 170, 49, 180, $background);
	$bord_verticaleGH = ImageLine ($image, 30, 99, 49, 104, $background);
	$bord_verticaleDH = ImageLine ($image, 175, 107, 150, 95, $background);
	$bord_horizontaleB = ImageLine ($image, 161, 150, 165, 157, $background);
	$bord_milieuH1 = ImageLine ($image, 96, 47, 100, 75, $rouge);
	$bord_milieuH2 = ImageLine ($image, 102, 48, 99, 75, $rouge);
	
	
	ImagePng ($image);
?>