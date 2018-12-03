<?php 

// Déclaration du model (Oprimisation de celui-ci à venir)
class PortfolioModel {

	// Déclaration des attributs permettant la connexion à la bdd (base de donnée)
	protected $loginpdo = "maxence";
	protected $mdppdo = "123";
	protected $hostpdo = '127.0.0.1';
	protected $dbnamepdo = 'portfolio';

		// Déclaration de la méthode getPdo permettant la connexion à la bdd
		public function getPdo(){

				// On rentrer la connexion de la bdd pdo dans une variable
				$bdd = new PDO('mysql:host='.$this->hostpdo.';dbname='.$this->dbnamepdo.';charset=utf8', $this->loginpdo, $this->mdppdo);
			// On retourn cette variable afin de pouvoir l'utiliser dans les différentes méthodes du model
			return $bdd;
		}

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

		// Déclaration de la méthode getProjects
		public function getProjects(){
		// Appel de la méthode getPdo permettant la connexion à la bdd
		$bdd = $this->getPdo();
		// Stockage de la requête dans une variable 
		$req = $bdd->prepare("SELECT * FROM projects");
		// Exécution de la requête
		$req->execute();
		// On retourne les valeurs rendues par la requête
		return $req->fetchAll();
		}


		// Déclaration de la méthode majInfo
		public function majInfo($id, $nom, $prenom, $tel, $email, $mdp) {
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("UPDATE users 
									SET nom = :nom ,prenom = :prenom, tel = :tel, email = :email, mdp = :mdp
									WHERE id = :id");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':nom', $nom, PDO::PARAM_STR, 100);
			$req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 100);
			$req->bindParam(':tel', $tel, PDO::PARAM_STR, 10);
			$req->bindParam(':email', $email, PDO::PARAM_STR, 60);
			$req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			// Exécution de la requête
			$req->execute();

		}

		// Déclaration de la méthode ajoutProjet
		public function ajoutProjet($titre, $texte, $img, $userid, $idimage, $datatarget){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("INSERT INTO projects (titre, texte, img, userid, idimage, datatarget) VALUES (:titre, :texte, :img, :userid, :idimage, :datatarget)");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':titre', $titre, PDO::PARAM_STR, 255);
			$req->bindParam(':texte', $texte, PDO::PARAM_STR);
			$req->bindParam(':img', $img, PDO::PARAM_STR, 255);
			$req->bindParam(':userid', $userid, PDO::PARAM_INT);
			$req->bindParam(':idimage', $idimage, PDO::PARAM_STR, 100);
			$req->bindParam(':datatarget', $datatarget, PDO::PARAM_STR, 60);
			// Exécution de la requête
			$req->execute();
		}

		// Déclaration de la méthode supprimerProject
		public function supprimerProject($id){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("DELETE FROM projects WHERE id=:id");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			// Exécution de la requête
			$req->execute();
		}

		// Déclaration de la méthode getUnProject permettant de récuperer les valeurs d'un projet en fonction de son id
		public function getUnProject($id){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("SELECT * FROM projects WHERE id=:id");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			// Exécution de la requête
			$req->execute();
			// Retourne les valeurs retourné par la requête
			return $req->fetch();
		}

		// Déclaration de la méthode modifierProjet
		public function modifierProjet($titre, $texte, $img, $userid, $idimage, $datatarget, $id){
			// Appel de la méthode getPdo permettant la connexion à la bdd
			$bdd = $this->getPdo();
			// Stockage de la requête dans une variable 
			$req = $bdd->prepare("UPDATE projects 
				SET titre = :titre, texte = :texte, img = :img, userid = :userid, idimage = :idimage, datatarget = :datatarget 
				WHERE id = :id");
			// Assignation des differents paramètre de la requête
			$req->bindParam(':titre', $titre, PDO::PARAM_STR, 255);
			$req->bindParam(':texte', $texte, PDO::PARAM_STR);
			$req->bindParam(':img', $img, PDO::PARAM_STR, 255);
			$req->bindParam(':userid', $userid, PDO::PARAM_INT);
			$req->bindParam(':idimage', $idimage, PDO::PARAM_STR, 100);
			$req->bindParam(':datatarget', $datatarget, PDO::PARAM_STR, 60);
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			// Exécution de la requête
			$req->execute();
		}

}