<div id="projets">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12 text-center border-bottom2 pb-1 titre" style="background-color: white">

              <p class="funsized pt-2">
                  Mes Projets
              </p>

          </div>
      </div>

      <div class="row dispositionprojet">
           <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content" alt="modal" src="#" id="img01">
                      <div id="caption"></div>
           </div>
           <?php
           $controller= new ProjectController();
           $lignesprojets = $controller->listProjects();
           foreach ($lignesprojets as $ligne) {
            ?>
              <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center p-4">

                  <div class=" shadow-lg p-3 mb-2 rounded" style="background-color: #555b61">

                        <img id=<?php echo $ligne['idimage']; ?>  class="imgprojet card-img-top rounded" src=<?php echo "https://nmaxence.fr/Public/img/".$ligne['img'];?> alt=<?php echo $ligne['titre']; ?> >

                        <div class="card-body rounded" style="background-color: #555b61">

                            <div class="champagne font-weight-bold titreprojet" style="color:white"><?php echo $ligne['titre'];?></div><br>

                            <button class="btn btn-light btn-block champagne font-weight-bold titreprojet" type="button" data-toggle="collapse" data-target=<?php echo "#".$ligne['datatarget']; ?> aria-expanded="false" aria-controls="collapseExample">
                              En Savoir Plus
                            </button>
                            <div class="collapse champagne font-weight-bold texteprojet mt-2" id=<?php echo $ligne['datatarget']; ?> >
                              <div class="card card-body">
                                <?php echo $ligne['texte']; ?>
                              </div>
                            </div>
                        </div>

                      <?php
                        if (isset($_SESSION['role_id']) && !empty($_SESSION['role_id'])) {
                          if ($_SESSION['role_id'] == 1 ){
                      ?>

                          <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                              <a href=<?php echo "index.php?modifprojet=1&idprojet=".$ligne['id']; ?> class="btn btn-warning btn-block btn-lg active" role="button" aria-pressed="true">Modifier</a>
                          </div>
                           <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                              <a href=<?php echo "index.php?action=supprimerprojet&idprojet=".$ligne['id']; ?> class="btn btn-danger btn-block btn-lg active" role="button" aria-pressed="true">Supprimer</a>
                          </div>
                        </div>

                      <?php                          
                          }
                        }
                      ?>

                  </div>
              </div>

           <?php
              }
              if (isset($_SESSION['role_id']) && !empty($_SESSION['role_id'])) {
                          if ($_SESSION['role_id'] == 1 ){
                            if (isset($_GET['modifprojet'])) {
                              if (!empty($_GET['idprojet'])) {
                                $id = $_GET['idprojet'];

                                $controller = new ProjectController();
                                $lignes = $controller->getUnProject($id);

          ?>

          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-3 offset-lg-3 text-center mb-3 mt-3">
            <div class="shadow-lg p-3 mb-2 rounded bg-light">
              <form method="POST" action="index.php?action=modifprojet">
                <div class="form-group">
                  <label class="lead" for="titreid">Titre</label>
                    <input type="text" value=<?php echo $lignes['titre']; ?> name="titre" class="form-control" id="titreid">
                </div>
                <div class="form-group">
                  <label class="lead" for="img">Image</label>
                    <input type="text" name="image" class="form-control" id="img" aria-describedby="imgHelp" value=<?php echo $lignes['img']; ?>>
                        <small id="imgHelp" class="form-text text-muted">Une fois avoir prélablement insérée l'image dans le dossier présent sur le serveur : Public/img, veuillez rentrer le nom de celle ci ici.</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">ID de l'image</label>
                    <input type="text" name="idimage" class="form-control" id="idimg" value=<?php echo $lignes['idimage']; ?>>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">Data-target</label>
                    <input type="text" name="datatarget" class="form-control" id="idimg" aria-describedby="targetHelp" value=<?php echo $lignes['datatarget']; ?>>
                    <small id="targetHelp" class="form-text text-muted">La chose rentrée ici n'a aucune importance il s'agit du lien entre le collapse et le texte affiché</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="texteid">Descriptif du projet</label>
                  <textarea name="description" class="form-control" id="texteid" rows="3"><?php echo $lignes['texte']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="idprojet" class="form-control" id="projetid" value=<?php echo $lignes['id'];?>>
                </div>
                <div class="form-group">
                    <input type="hidden" name="userid" class="form-control" id="useridsss" value=<?php echo $lignes['userid'];?>>
                </div>

                <button type="submit" class="btn btn-secondary btn-lg btn-block">Valider</button>
              </form>
            </div>
           </div>

          <?php                    

                              }
                            } else {

           ?>

           <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-3 offset-lg-3 text-center mb-3 mt-3">
            <div class="shadow-lg p-3 mb-2 rounded bg-light">
              <form method="POST" action="index.php?action=ajoutprojet">
                <div class="form-group">
                  <label class="lead" for="titreid">Titre</label>
                    <input type="text" name="titre" class="form-control" id="titreid" placeholder="Entrer un titre">
                </div>
                <div class="form-group">
                  <label class="lead" for="img">Image</label>
                    <input type="text" name="image" class="form-control" id="img" aria-describedby="imgHelp"  placeholder="Entrer le nom de l'image">
                        <small id="imgHelp" class="form-text text-muted">Une fois avoir prélablement insérée l'image dans le dossier présent sur le serveur : Public/img, veuillez rentrer le nom de celle ci ici.</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">ID de l'image</label>
                    <input type="text" name="idimage" class="form-control" id="idimg" placeholder="Entrer un id pour l'image ex: exemplepngid">
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">Data-target</label>
                    <input type="text" name="datatarget" class="form-control" id="idimg" aria-describedby="targetHelp" placeholder="Entrer ce que vous voulez">
                    <small id="targetHelp" class="form-text text-muted">La chose rentrée ici n'a aucune importance il s'agit du lien entre le collapse et le texte affiché</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="texteid">Descriptif du projet</label>
                  <textarea name="description" class="form-control" id="texteid" rows="3" placeholder="Entrer un descriptif du projet "></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="userid" class="form-control" id="userid" value=<?php echo $_SESSION['id'];?>>
                </div>

                <button type="submit" class="btn btn-secondary btn-lg btn-block">Valider</button>
              </form>
            </div>
           </div>

           <?php
                }
             }
           }
           ?>

      </div>
  </div>
</div>
