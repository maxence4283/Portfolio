<div id="projets">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12 text-center border-bottom2 pb-1 titre" style="background-color: white">

              <p class="funsized pt-2">
                  Mes Projets
              </p>

          </div>
      </div>

      <div class="row dispositionprojet mt-4">
           <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content" alt="modal" src="#" id="img01">
                      <div id="caption"></div>
           </div>
           <?php
           $controller= new ProjectController();
           $controller->listProjects();

           ?>

      </div>
  </div>
</div>
