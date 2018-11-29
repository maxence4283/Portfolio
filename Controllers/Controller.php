<?php
require("../Models/UserModel.php");

function connexion(){
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $user = getUser($email, $mdp);

        $usermail = $user['email'];
        $usermdp = $user['mdp'];
        $usernom = $user['nom'];
        $userprenom = $user['prenom'];
        $usertel = $user['tel'];


        if ($email == $usermail && $mdp == $usermdp) {
            $_SESSION['connecte'] = 1;
            $_SESSION['nom'] = $usernom;
            $_SESSION['prenom'] = $userprenom;
            $_SESSION['email'] = $usermail;
            $_SESSION['tel'] = $usertel;

            header("Location: ../index.php?connexion=True");

        } else {

            header("Location: ../index.php?connexion=False");

        }
    } else {

        header("Location: ../index.php?error=1");

    }
}
?>
