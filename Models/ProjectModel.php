<?php
// Appel du fichier contenant la classe mère
require_once 'DatabaseModel.php';

// Déclaration de la classe ProjectModel classe fille de DatabaseModel
class ProjectModel extends DatabaseModel {

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