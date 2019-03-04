<div id="Head" class="bg-img" style="position: relative;">
  <div class="container-fluid">
        <!-- Gestion des alerts -->
        <?php
            if (!empty($_GET['success']) && isset($_GET['success'])) {
                if ($_GET['success'] == 2 ) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show champagne font-weight-bold" role="alert" style="margin-top:1%">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              Mail non envoyé ! Veuillez réessayer ou choisir un autre mode de communication.
            </div>
        <?php
                } elseif ($_GET['success'] == 1 ) {
        ?>
            <div class="alert alert-success alert-dismissible fade show champagne font-weight-bold" role="alert" style="margin-top:1%">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              Mail envoyé ! Une réponse vous sera rapidement attribuée.
            </div>
        <?php
                } elseif ($_GET['success'] == 3 ) {
        ?>
                <div class="alert alert-success alert-dismissible fade show champagne font-weight-bold" role="alert" style="margin-top:1%">
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
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:1%">
               Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php
            }

            if (isset($_GET['inscriptionreussi']) && $_GET['inscriptionreussi'] == 1) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:1%">
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
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 taillehead">

                    <div class="text-center">
                        <p class="champagne font-weight-bold titrewebdev" style=" color:white; margin-top: 10%">
                            <span style="color:#507fe2"><</span> Maxence NICOLE <span style="color:#507fe2">/></span> <br>
                        </p>

                        <p class="champagne font-weight-bold" style="color:white;letter-spacing: 5px;font-size: 20px"> «Le succès est un mauvais professeur. Il pousse <br>les gens intelligents à croire qu’ils sont <br>infaillibles.» </p>

                        <div class="text-center dispositionlogohead">
                         <a class="logohead" style="color:white;" href="#presentation"><i id="arrow" class="fas fa-arrow-circle-down bounce"></i></a>
                        </div>

                    </div>

                </div>
        </div>
    </div>
</div>
