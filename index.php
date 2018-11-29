<?php
require_once 'Controllers/Controller.php';
include 'vues/header.php';
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'connexion':
                    include("vues/connexion.php");
                break;
            case 'login':
                $connexion = new Connexion();
                $connexion->login();
                break;
            case 'reussi':
                header('Location: index.php?coreussi=1');
            break;
            case 'echec' :
                $erreur = "Vos identifiants ne sont pas connrects !";
                echo $erreur;
                include('vues/connexion.php');
            break;
            case 'error':
                $erreur = "Veuillez remplir tout les champs";
                echo $erreur;
                include('vues/connexion.php');
            break;
            default:
             echo '1';
            break;
        }
    }

include("vues/nav.php");

include("vues/presentation.php");

include("vues/competence.php");

include("vues/projet.php");

include("vues/cv.php");

include("vues/contact.php");

include("vues/footerbar.php");

include("vues/footer.php");
    
?>