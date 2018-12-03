<?php
ob_start();
session_start();
require_once 'Models/Model.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/ProjectController.php';
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
            case 'compte' :
                if (!empty($_SESSION['connecte'])){
                        include("vues/moncompte.php"); 
                        
                    } else {
                       header('Location: index.php');
                    }
            break;
            case 'majinfo' :
                if (!empty($_SESSION['connecte'])){
                        include("vues/modifmoncompte.php"); 
                        
                    } else {
                       header('Location: index.php');
                    }
            break;
            case 'deconnexion' :
                $controller = new Connexion();
                $controller->deconnexion();
                break;
            case 'login':
                $controller = new Connexion();
                $controller->login();
            break;
            case 'submitmajinfo':
                $controller = new Connexion();
                $controller->majInfo();
            break;
            case 'ajoutprojet':
                $controller = new ProjectController();
                $controller->insertProject();
            break;
            case 'supprimerprojet':
                $controller = new ProjectController();
                $controller->supprimerProject();
            break;
            case 'sign_up':
                $controller = new Connexion();
                $controller->inscription();
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
                include('Location: moncompte.php');
            break;
            case 'errormajinfo':
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
             echo 'Aucune requête ne correspond à votre demande..';
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