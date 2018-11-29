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

}
