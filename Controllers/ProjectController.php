<?php
// Nous faison appel au model correspondant aux projets
require_once 'Models/ProjectModel.php';
// Les controllers permettent d'intéragir avec la vue et le model (La vue appel le controller qui lui appel le model)
// Déclaration de la class Controller gérant le rapport au projets
class ProjectController {

	// Déclaration de la méthode permettant d'afficher la list des projets 
	public function listProjects(){
		// Appel du model
		$model = new ProjectModel();
		// Appel de la méthode getProjects du model
		$lignes = $model->getProjects();
		// Retourne les différentes info concernant les projets 
		return $lignes;
	}


	// Déclaration de la méthode insertProject
	public function insertProject(){
		// Si tout les champs sont remplis
		if (isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['idimage']) && !empty($_POST['idimage']) && isset($_POST['datatarget']) && !empty($_POST['datatarget'])) {

				// On rentre toute les donnée rentré dans une variable
				$titre = $_POST['titre'];
				$texte = $_POST['description'];
				$img = $_POST['image'];
				$userid = $_POST['userid'];
				$idimage = $_POST['idimage'];
				$datatarget = $_POST['datatarget'];

				// Appel du model
				$model = new PortfolioModel();
				// Exécution de la méthode ajoutProjet permettant d'ajouter une nouveau projet
				$model->ajoutProjet($titre, $texte, $img, $userid, $idimage, $datatarget);
				header('Location: index.php?reussi=ajoutprojet');

		} else {

			header('Location: index.php?erreur=projet');
		}
	}

	// Déclaration de la méthode supprimerProject
	public function supprimerProject(){
		// Si les variable présentes dans l'url sont remplis
		if (isset($_GET['idprojet']) && !empty($_GET['idprojet'])){

			// On récupère l'id du projet
			$id = $_GET['idprojet'];

			// Appel du model
			$model = new ProjectModel();
			// Exécution de la méthode supprimerProject
			$model->supprimerProject($id);

			header('Location: index.php#projets');

		} else {

			header('Location: index.php?suprimmerprojet=erreur');

		}
	}

	// Déclaration de la méthode getUnProject permettant de récuérer un projet graçe à son id
	public function getUnProject($id){

			// Appel du model
			$model = new ProjectModel();
			// Appel de la méthode getUnProject du model
			$lignes = $model->getUnProject($id);

			return $lignes;
	}

	// Déclaration de la méthode modifierProjet
	public function modifierProjet(){
		// Si tout les champs sont remplis
		if (isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['idimage']) && !empty($_POST['idimage']) && isset($_POST['datatarget']) && !empty($_POST['datatarget']) && isset($_POST['idprojet']) && !empty($_POST['idprojet'])) {


				// On stock toutes les données rentrées dans une variable
				$titre = $_POST['titre'];
				$texte = $_POST['description'];
				$img = $_POST['image'];
				$userid = $_POST['userid'];
				$idimage = $_POST['idimage'];
				$datatarget = $_POST['datatarget'];
				$id = $_POST['idprojet'];

			// Appel du model
			$model = new ProjectModel();
			// Exécution de la méthode modifierProjet
			$model->modifierProjet($titre, $texte, $img, $userid, $idimage, $datatarget, $id);

			header('Location: index.php#projets');

		} else {
			header('Location: index.php?modifprojet=erreur');
		}
	}
}