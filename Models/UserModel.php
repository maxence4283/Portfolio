<?php 
require 'DatabaseModel.php';
class User extends Pdoco {

		public function getUser($email, $mdp) {
		$bdd = $this->getPdo();
	    $req = $bdd->prepare("SELECT * FROM users WHERE email=:email AND mdp=:mdp");
	    $req->bindParam(':email', $email, PDO::PARAM_STR, 60);
	    $req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
	    $req->execute();

	    return $req;
		}

		public function insertUser($nom, $prenom, $tel, $email, $mdp, $role_id){
			$bdd = $this->getPdo();
			$req = $bdd->prepare("INSERT INTO users (nom,prenom,tel,email,mdp,role_id) VALUES (:nom,:prenom,:tel,:email,:mdp,:role_id)");
			$req->bindParam(':nom', $nom, PDO::PARAM_STR, 100);
			$req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 100);
			$req->bindParam(':tel', $tel, PDO::PARAM_STR, 10);
			$req->bindParam(':email', $email, PDO::PARAM_STR, 60);
			$req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
			$req->bindParam(':role_id', $role_id, PDO::PARAM_INT);
			$req->execute();
		}

}