<?php

class ProjectController {

	public function listProjects(){
		$model = new PortfolioModel();
		$lignes = $model->getProjects();

		foreach ($lignes as $ligne) {
		?>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mb-3">

	            <div class=" shadow-lg p-3 mb-2 rounded" style="background-color: #555b61">

	                  <img id=<?php echo $ligne['idimage']; ?>  class="imgprojet card-img-top rounded" src=<?php echo "https://nmaxence.fr/Public/img/".$ligne['img'];?> alt=<?php echo $ligne['titre']; ?> >

	                  <div class="card-body rounded" style="background-color: #555b61">

	                      <a href="https://www.lesenfantsdarcenciel.ovh/" target="_blank" style="text-decoration:none"><div class="champagne font-weight-bold titreprojet" style="color:white"><?php echo $ligne['titre'];?></div></a><br>

	                      <button class="btn btn-light btn-block champagne font-weight-bold titreprojet" type="button" data-toggle="collapse" data-target=<?php echo "#".$ligne['data-target']; ?> aria-expanded="false" aria-controls="collapseExample">
						    En Savoir Plus
						  </button>
						</p>
						<div class="collapse champagne font-weight-bold texteprojet" id=<?php echo $ligne['data-target']; ?> >
						  <div class="card card-body">
						    <?php echo $ligne['texte']; ?>
						  </div>
						</div>
	                  </div>

	            </div>

        	</div>
        <?php
		}
	}
}