<?php
require("../Function/bdd.php");

function getUser($email, $mdp) {
    $req = $bdd->prepare("SELECT * FROM users WHERE email=:email AND mdp=:mdp");
    $req->bindparam(':email', $email, PDO::PARAM_STR, 60);
    $req->bindparam(':mdp', $mdp, PDO::PARAM_INT);

    return $req->fetchAll();
}

?>