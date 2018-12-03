<?php 
class PortfolioModel {

	protected $loginpdo = "maxence";
	protected $mdppdo = "123";
	protected $hostpdo = '127.0.0.1';
	protected $dbnamepdo = 'portfolio';

		public function getPdo(){

				$bdd = new PDO('mysql:host='.$this->hostpdo.';dbname='.$this->dbnamepdo.';charset=utf8', $this->loginpdo, $this->mdppdo);
			return $bdd;
		}


		public function getUser($email, $mdp) {
		$bdd = $this->getPdo();
	    $req = $bdd->prepare("SELECT * FROM users WHERE email=:email AND mdp=:mdp");
	    $req->bindParam(':email', $email, PDO::PARAM_STR, 60);
	    $req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
	    $req->execute();

	    return $req;
		}

		public function getInfoUser($id){
			$bdd = $this->getPdo();
			$req = $bdd->prepare("SELECT * FROM users,roles WHERE users.id=:id AND users.role_id = roles.id");
			$req->bindParam(':id', $id, PDO::PARAM_INT, 11);
			$req->execute();

			return $req->fetch(); 
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

		public function getProjects(){
		$bdd = $this->getPdo();
		$req = $bdd->prepare("SELECT * FROM projects");
		$req->execute();
		return $req->fetchAll();
		}

		public function majInfo($id, $nom, $prenom, $tel, $email, $mdp) {
			$bdd = $this->getPdo();
			$req = $bdd->prepare("UPDATE users 
									SET nom = :nom ,prenom = :prenom, tel = :tel, email = :email, mdp = :mdp
									WHERE id = :id");
			$req->bindParam(':nom', $nom, PDO::PARAM_STR, 100);
			$req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 100);
			$req->bindParam(':tel', $tel, PDO::PARAM_STR, 10);
			$req->bindParam(':email', $email, PDO::PARAM_STR, 60);
			$req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			$req->execute();

		}

		public function ajoutProjet($titre, $texte, $img, $userid, $idimage, $datatarget){
			$bdd = $this->getPdo();
			$req = $bdd->prepare("INSERT INTO projects (titre, texte, img, userid, idimage, datatarget) VALUES (:titre, :texte, :img, :userid, :idimage, :datatarget)");
			$req->bindParam(':titre', $titre, PDO::PARAM_STR, 255);
			$req->bindParam(':texte', $texte, PDO::PARAM_STR);
			$req->bindParam(':img', $img, PDO::PARAM_STR, 255);
			$req->bindParam(':userid', $userid, PDO::PARAM_INT);
			$req->bindParam(':idimage', $idimage, PDO::PARAM_STR, 100);
			$req->bindParam(':datatarget', $datatarget, PDO::PARAM_STR, 60);
			$req->execute();
		}

		public function supprimerProject($id){
			$bdd = $this->getPdo();
			$req = $bdd->prepare("DELETE FROM projects WHERE id=:id");
			$req->bindParam(':id', $id, PDO::PARAM_INT);
			$req->execute();
		}

}