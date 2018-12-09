<?php
// Activation des redirections (header).
ob_start();
// Démarrage des sessions
session_start();

// Appel des fichiers Models et Controllers
require_once 'Models/Model.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/ProjectController.php';
require_once 'Controllers/ContactController.php';

    // Gestion des différents lien permettant de faire l'intéraction entre la vue et le controller
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            // Appel de la page connexion
            case 'connexion':
                    if (isset($_SESSION['connecte'])){
                        header('Location: index.php');
                    } else {
                        $titre = 'Connexion';
                        include("vues/connexion.php");
                    }
                break;
            // Appel de la page inscription
            case 'inscription' :
                if (isset($_SESSION['connecte'])){
                        header('Location: index.php');
                    } else {
                        $titre = 'Inscription';
                       include("vues/inscription.php"); 
                    }
            break;
            // Appel de la page de gestion du compte
            case 'compte' :
                if (!empty($_SESSION['connecte'])){
                        $titre = 'Mon compte';
                        include("vues/moncompte.php"); 
                        
                    } else {
                       header('Location: index.php');
                    }
            break;
            // Appel de la page permettant de modifier les informations du compte
            case 'majinfo' :
                if (!empty($_SESSION['connecte'])){
                        $titre = 'Mon compte';
                        include("vues/modifmoncompte.php"); 
                        
                    } else {
                       header('Location: index.php');
                    }
            break;
            case 'veilles' :
                $titre = 'Veilles technologiques';
                include("vues/veilles.php"); 
            break;
            case 'referencement' :
                $titre = 'Référencement Google';
                include("vues/veillereferencement.php"); 
            break;
            // Action permettant de se déconnecter
            case 'deconnexion' :
                // Appel du controller Connexion
                $controller = new Connexion();
                // Appel de la méthode deconnexion du controller Connexion
                $controller->deconnexion();
                break;
            // Action permettant de se connecter
            case 'login':
                $controller = new Connexion();
                $controller->login();
            break;
            // Action permettant d'envoyer la modification faite aux information du compte
            case 'submitmajinfo':
                $controller = new Connexion();
                $controller->majInfo();
            break;
            case 'mail' :
                $controller = new ContactController();
                $controller->mail();
            break;
            // Action permettant d'ajouter un projet
            case 'ajoutprojet':
                $controller = new ProjectController();
                $controller->insertProject();
            break;
            // Action permettant de supprimer un projet
            case 'supprimerprojet':
                $controller = new ProjectController();
                $controller->supprimerProject();
            break;
            // Action permettant de modifier un projet
            case 'modifprojet':
                $controller = new ProjectController();
                $controller->modifierProjet();
            break;
            // Action permettant de s'inscrire
            case 'sign_up':
                $controller = new Connexion();
                $controller->inscription();
            break;
            default:
             echo 'Aucune requête ne correspond à votre demande..';
            break;
        }

    } else {
        include ('vues/onepage.php');
    }

    include ('vues/template.php');

?>