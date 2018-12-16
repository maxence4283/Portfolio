<?php
// Nous faisons appel au model correspondant au utilisateurs
require_once 'Models/UserModel.php';

// Les controllers permettent d'intéragir avec la vue et le model (La vue appel le controller qui lui appel le model)
// Déclaration de la class Controller gérant le rapport au utilisateur
class Connexion {

    // Méthode permettant de se connecter
    public function login(){

        // Si tout les champs sont remplis
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {

                // On stock les données rentrées dans une variable 
                $email = htmlspecialchars($_POST['email']);
                $mdp = htmlspecialchars($_POST['mdp']);

                $hashemail = md5($email);
                $hashmdp = md5($mdp);
                $hashmdpfinal = $hashemail."0".$hashmdp;

                // On fait appel au model principal
                $model = new UserModel();
                // On fait appel a la méthode getUser
                $user = $model->getUser($email, $hashmdpfinal);
                // On rentre les données renvoyé par la méthode dans une variable
                $userDetails = $user->fetch();

                // Si la méthode retourne une valeur cela veut dire que les identifiants sont bon
                if ($userDetails != null) {

                    // Nous rentrons toute les données venant de la bdd dont nous avons besoin dans des variables
                    $id = $userDetails['id'];
                    $nom = $userDetails['nom'];
                    $prenom = $userDetails['prenom'];
                    $mail = $userDetails['email'];
                    $tel = $userDetails['tel'];
                    $role_id = $userDetails['role_id'];

                    // Nous assigons ces variables à des variables globales de session
                    $_SESSION['id'] = $id;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['email'] = $mail;
                    $_SESSION['tel'] = $tel;
                    $_SESSION['role_id'] = $role_id;
                    // Variable de session permettant de déterminer si nous sommes connecter ou non
                    $_SESSION['connecte'] = 1;

                    header('Location: index.php?coreussi=1');

                } else {
                    header('Location: index.php?action=connexion&erreur=1');
                }
        } else {
            header('Location: index.php?action=connexion&erreur=2');
        }
    }

    // Méthode permettant de se déconnecter
    public function deconnexion () {
        // Nous détruisons la sessions et donc le status connecte est supprimé
        session_destroy();
        header('Location: index.php?success=3');

    }

    // Méthode permettant de s'inscrire
    public function inscription(){
        // Si tout les champs sont remplis
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['role_id']) && !empty($_POST['role_id']) && isset($_POST['mdpconfirm']) && !empty($_POST['mdpconfirm'])) {

                // Nous rentrons toute les données rentrées dans une variables
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $tel = htmlspecialchars($_POST['tel']);
                $email = htmlspecialchars($_POST['email']);
                $mdp = htmlspecialchars($_POST['mdp']);
                $mdpconfirm = htmlspecialchars($_POST['mdpconfirm']);
                $role_id = htmlspecialchars($_POST ['role_id']);

            if ($mdp == $mdpconfirm) {

                
                $hashemail = md5($email);
                $hashmdp = md5($mdp);
                $hashmdpfinal = $hashemail."0".$hashmdp;


                // Appel du model
                $model = new UserModel();
                // Execution de la méthode insertUser
                $model->insertUser($nom, $prenom, $tel, $email, $hashmdpfinal, $role_id);

                header('Location: index.php?inscriptionreussi=1');

            } else {
                header('Location: index.php?action=inscription&erreur=2');
            }

        } else { 
            header('Location: index.php?action=inscription&erreur=1');
        }

    }

    // Méthode permettant de mettre à jour les informations de sont compte
    public function majInfo(){
        // Si tout les champs sont remplis
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['id']) && !empty($_POST['id'])) {

                // Nous rentrons toute les données rentrées dans une variables
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $tel = htmlspecialchars($_POST['tel']);
                $email = htmlspecialchars($_POST['email']);
                $id = htmlspecialchars($_POST['id']);

                // Appel du model
                $model = new UserModel();

                // Appel de la méthode permettant de mettre à jour les infos de l'utilisateur
                $model->majInfo($id, $nom, $prenom, $tel, $email);

                header('Location: index.php?action=compte');
        } else { 
            header('Location: index.php?action=majinfo&erreur=1');
        }

    }

    // Méthode permettant de récupérer les informations de l'utilisateur
    public function affInfoUser($id) {

        // Appel du model
        $model = new UserModel();
        // Assignation de la valeur retourner pas la méthode getInfoUser dans une variable
        $user = $model->getInfoUser($id);
        return $user;
    }

}
