<?php
require 'Models/UserModel.php';

class Connexion {

    public function login(){

        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {

                $email = htmlspecialchars($_POST['email']);
                $mdp = htmlspecialchars($_POST['mdp']);

                $model = new User();
                $user = $model->getUser($email, $mdp);

                if ($user != null) {

                    $userDetails = $user->fetch();
                    $nom = $userDetails['nom'];
                    $prenom = $userDetails['prenom'];
                    $email = $userDetails['email'];
                    $tel = $userDetails['tel'];
                    $role_id = $userDetails['role_id'];

                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['email'] = $email;
                    $_SESSION['tel'] = $tel;
                    $_SESSION['role_id'] = $role_id;
                    $_SESSION['connecte'] = 1;

                    header('Location: index.php?action=reussi');

                } else {
                    header('Location: index.php?action=echec');
                }
        } else {
            header('Location: index.php?action=coerror');
        }
    }

    public function deconnexion () {
        session_destroy();
        header('Location: index.php');

    }

    public function inscription(){
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['role_id']) && !empty($_POST['role_id'])) {

            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $tel = htmlspecialchars($_POST['tel']);
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['mdp']);
            $role_id = htmlspecialchars($_POST ['role_id']);

            $model = new User;
            $model->insertUser($nom, $prenom, $tel, $email, $mdp, $role_id);

            header('Location: index.php');
            // if ($insertUser != null) {
            //     header('Location: index.php?action=inscriptionreussi');
            // } else {
            //     header('Location: index.php?action=inscriptionechoue');
            // }

        } else { 
            header('Location: index.php?action=errorinscription');
        }

    }

}
