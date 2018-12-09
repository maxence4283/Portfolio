<div id="Head">
  <div class="container-fluid">
        <!-- Gestion des alerts -->
        <?php
            if (!empty($_GET['success']) && isset($_GET['success'])) {
                if ($_GET['success'] == 2 ) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show champagne font-weight-bold" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              Mail non envoyé ! Veuillez réessayer ou choisir un autre mode de communication.
            </div>
        <?php
                } elseif ($_GET['success'] == 1 ) {
        ?>
            <div class="alert alert-success alert-dismissible fade show champagne font-weight-bold" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              Mail envoyé ! Une réponse vous sera rapidement attribuée.
            </div>
        <?php
                } elseif ($_GET['success'] == 3 ) {
        ?>
                <div class="alert alert-success alert-dismissible fade show champagne font-weight-bold" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      Vous etes déconnecté !
                </div>
        <?php  
                }
            }

            if (isset($_GET['coreussi']) && $_GET['coreussi'] == 1) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php
            }

            if (isset($_GET['inscriptionreussi']) && $_GET['inscriptionreussi'] == 1) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               Inscription réussie !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php
            }
        ?>
        <!-- Fin de gestion des alerts -->
        

        <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 border-dev bg-img">

                    <div class="">
                        <p class="text-center champagne font-weight-bold titrewebdev" style=" color:white; margin-top: 10%">
                            < Maxence NICOLE /> <br>
                            Développeur Web<br><br>
                            <a style="color:white" href="index.php#présentation"><i class="far fa-arrow-alt-circle-down"></i></a>
                        </p>
                    </div>

                </div>
        </div>
    </div>
</div>

