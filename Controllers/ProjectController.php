<?php

class ProjectController {

	public function listProjects(){
		$model = new PortfolioModel();
		$lignes = $model->getProjects();

		foreach ($lignes as $ligne) {
		?>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mb-3">

	            <div class=" shadow-lg p-3 mb-5 rounded" style="background-color: #555b61">

	                  <img id=<?php echo $ligne['idimage']; ?>  class="card-img-top rounded" src=<?php echo "https://nmaxence.fr/Public/img/".$ligne['img'];?> alt="Les enfants d'arc en ciel">

	                  <div class="card-body rounded" style="background-color: #555b61">

	                      <a href="https://www.lesenfantsdarcenciel.ovh/" target="_blank" style="text-decoration:none"><div class="champagne font-weight-bold titreprojet" style="color:white"><?php echo $ligne['titre'];?></div></a><br>

	                      <p class="card-text champagne font-weight-bold texteprojet" style="color:white;"><?php echo $ligne['texte'];?></p>
	                  </div>

	            </div>

        	</div>
        <?php
		}
	}
}