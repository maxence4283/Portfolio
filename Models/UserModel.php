<?php 
require 'DatabaseModel.php';
class User extends Pdoco {

		public function getUser($email, $mdp) {
		$bdd = $this->getPdo();
	    $req = $bdd->prepare("SELECT * FROM users WHERE email=:email AND mdp=:mdp");
	    $req->bindParam(':email', $email, PDO::PARAM_STR, 60);
	    $req->bindParam(':mdp', $mdp, PDO::PARAM_INT);
	    $req->execute();

	    return $req;
	}

}