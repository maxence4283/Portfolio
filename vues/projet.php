<div id="projets" class="middlesection">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12 pb-1 ">

              <h2 class="pt-2 titre">
                  <i class="fas fa-laptop"></i> Projets
              </h2>
              <hr style="height:5px; border:none; color:#507fe2; background-color:#507fe2;width:10%;float:left">

          </div>
      </div>

      <div class="row" style="margin-top: 30px; margin-bottom: 30px">
           <?php
           $controller= new ProjectController();
           $lignesprojets = $controller->listProjects();
           foreach ($lignesprojets as $ligne) {
            ?>
              <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-4 text-center ">

          
                        <div  style="background-color: white;position: relative;z-index: 3">
                           <a align="center" class="titreprojet"  style="" target="__blank" href=<?php echo $ligne['lien']; ?>><?php echo $ligne['titre'];?></a><br>
                         </div>

                  <div class="mb-2 ml-3" style="border: 1px solid rgb(0,0,0,0.2); border-radius: 10px;">

                        <div  class="blocimgprojet" style="width:100%;height: auto;">
                         <img id=<?php echo $ligne['idimage']; ?> class="img-responsive imgprojet" src="https://nmaxence.fr/Public/img/<?php echo $ligne['img'];?>" alt=<?php echo $ligne['titre']; ?> >

                         <a style="text-decoration: none;" href=<?php echo $ligne['lien']; ?>>
                          <div class="bloctext">
                            <p class="text"><?php echo $ligne['texte']; ?><br><br></p>
                          </div></a>
                         
                        </div>

                         <div class="p-10">
                            
                              
                            <a class="btn-projet" href=<?php echo $ligne['lien']; ?> target="__blank"  style="padding:10px;">
                              VOIR LE PROJET</a>
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
                        <small id="imgHelp" class="form-text text-muted">Une fois avoir préalablement insérée l'image dans le dossier présent sur le serveur : Public/img, veuillez rentrer le nom de celle ci ici.</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">ID de l'image</label>
                    <input type="text" name="idimage" class="form-control" id="idimg" value=<?php echo $lignes['idimage']; ?>>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">Lien du projet</label>
                    <input type="text" name="lien" class="form-control" id="idlien" value=<?php echo $lignes['lien']; ?>>
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
                        <small id="imgHelp" class="form-text text-muted">Une fois avoir préalablement insérée l'image dans le dossier présent sur le serveur : Public/img, veuillez rentrer le nom de celle ci ici.</small>
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">ID de l'image</label>
                    <input type="text" name="idimage" class="form-control" id="idimg" placeholder="Entrer un id pour l'image ex: exemplepngid">
                </div>
                <div class="form-group">
                  <label class="lead" for="idimg">Lien du projet</label>
                    <input type="text" name="lien" class="form-control" id="idlien" placeholder="Entrer le lien du projet">
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
