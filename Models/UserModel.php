<?php 

// Nous appellons le fichier contenant la classe mère
require_once 'DatabaseModel.php';

// Déclaration de la classe UserModel classe fille de DatabaseModel
class UserModel extends DatabaseModel {

// Déclaration de la méthode getUser permettant de récuperer les données d'un utilisateur en fonction de son email et mot de passe (si il ne retourne rien c'est que les valeurs rentrée en paramètre ne correspondent pas avec celles rentrée dans la bdd donc elle ne retournera rien)
		public function getUser($email, $mdp) {

		// Appel de la méthode getPdo permettant la connexion à la bdd
		$bdd = $this->getPdo();

		// Stockage de la requête dans une variable 
	    $req = $bdd->prepare("SELECT * FROM users WHERE email=:email AND mdp=:mdp");

	    // Assignation des differents paramètre de la requête
	    $req->bindParam(':email', $email, PDO::PARAM_STR, 60);
	    $req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);

	    // Exécution de la requête
	    $req->execute();

	    return $req;
		}

		// Déclaration de la méthode getInfoUser qui recupère les infos d'un utilisateur en fonction de son id
		public function getInfoUser($id){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("SELECT * FROM users,roles WHERE users.id=:id AND users.role_id = roles.id");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':id', $id, PDO::PARAM_INT, 11);
			// Exécution de la requête
			$req->execute();

			// On retourne les valeurs rendues par la requête
			return $req->fetch(); 
		}

		// Déclaration de la méthode insertUser permettant d'enregistrer un nouvel utilisateur
		public function insertUser($nom, $prenom, $tel, $email, $mdp, $role_id){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("INSERT INTO users (nom,prenom,tel,email,mdp,role_id) VALUES (:nom,:prenom,:tel,:email,:mdp,:role_id)");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':nom', $nom, PDO::PARAM_STR, 100);
			$req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 100);
			$req->bindParam(':tel', $tel, PDO::PARAM_STR, 10);
			$req->bindParam(':email', $email, PDO::PARAM_STR, 60);
			$req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
			$req->bindParam(':role_id', $role_id, PDO::PARAM_INT);
			// Exécution de la requête
			$req->execute();
		}
	}