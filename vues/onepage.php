<?php  
	ob_start();

	$titre = 'Maxence NICOLE';

	include("vues/presentation.php");

	include("vues/competence.php");

	include("vues/projet.php");

	include("vues/cv.php");

	include("vues/contact.php");

	$content = ob_get_clean();
?>