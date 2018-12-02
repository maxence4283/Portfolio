<?php
class ProjectController {

	public function listProjects(){
		$model = new PortfolioModel();
		$lignes = $model->getProjects();
		return $lignes;
	}

	public function insertProject(){
		if (isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['image']) && !empty($_POST['image']) && isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['idimage']) && !empty($_POST['idimage']) && isset($_POST['datatarget']) && !empty($_POST['datatarget'])) {

				$titre = $_POST['titre'];
				$texte = $_POST['description'];
				$img = $_POST['image'];
				$userid = $_POST['userid'];
				$idimage = $_POST['idimage'];
				$datatarget = $_POST['datatarget'];

				$model = new PortfolioModel();
				$model->ajoutProjet($titre, $texte, $img, $userid, $idimage, $datatarget);
				header('Location: index.php?reussi=ajoutprojet');

		} else {

			header('Location: index.php?erreur=projet');
		}
	}
}