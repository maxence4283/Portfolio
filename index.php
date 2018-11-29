<?php
session_start();
require_once 'Controllers/UserController.php';
include 'vues/header.php';

    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'connexion':
                    if (isset($_SESSION['connecte'])){
                        header('Location: index.php');
                    } else {
                        include("vues/connexion.php");
                    }
                break;
            case 'inscription' :
                if (isset($_SESSION['connecte'])){
                        header('Location: index.php');
                    } else {
                       include("vues/inscription.php"); 
                    }
            break;
            case 'deconnexion' :
                $connexion = new Connexion();
                $connexion->deconnexion();
                break;
            case 'login':
                $connexion = new Connexion();
                $connexion->login();
            break;
            case 'sign_up':
                $connexion = new Connexion();
                $connexion->inscription();
            break;
            case 'inscriptionreussi':
                header('Location: index.php?inscriptionreussi=1');
            break;
            case 'inscriptionechoue':
                $echec = "L'inscription n'a pas aboutie";
                echo $echec;
                include('Location: inscription.php');
            break;
            case 'errorinscription':
                $echec = "Veuillez remplir tout les champs !";
                echo $echec;
                include('Location: inscription.php');
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
    } else {

include("vues/nav.php");

include("vues/presentation.php");

include("vues/competence.php");

include("vues/projet.php");

include("vues/cv.php");

include("vues/contact.php");

include("vues/footerbar.php");

include("vues/footer.php");
}
?>