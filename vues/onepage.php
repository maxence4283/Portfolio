<?php  
	ob_start();

	$titre = 'Maxence NICOLE - "Le succès est un mauvais professeur. Il pousse les gens intelligents à croire qu’ils sont infaillibles."';
	
	include ('vues/head.php');

	include("vues/presentation.php");

	include("vues/competence.php");

	include("vues/projet.php");

	include("vues/cv.php");

	include("vues/localisation.php");

	include("vues/contact.php");

	include("vues/cookies.php");

	$content = ob_get_clean();
?>