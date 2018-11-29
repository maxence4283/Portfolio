<?php
include("vues/header.php");

    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == "connexion") {
            include("vues/connexion.php");
        }

    } else{

        include("vues/nav.php");

        include("vues/presentation.php");

        include("vues/competence.php");

        include("vues/projet.php");

        include("vues/cv.php");

        include("vues/contact.php");

        include("vues/footerbar.php");

    }

include("vues/footer.php");
    
?>