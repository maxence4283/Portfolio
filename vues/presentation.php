<div id="Presentation">
  <div class="container-fluid">

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
                }
            }

            if (!empty($_GET['error']) && isset($_GET['error'])) {
                if ($_GET['error'] == 1) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show champagne font-weight-bold" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              Veuillez remplir tout les champs.
            </div>
        <?php
                }
            }
        ?>
        

    <div class="row mr-1">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-9 col-lg-9" style="margin-bottom: 2%">

            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 pt-4 ml-2 mb-2 border-dev titrewebdev" style="background-color: white;">

                    <p class="text-center display-2 sketch" style=" font-size: 6vw">
                        WEB DEVELOPER
                    </p>

            </div>

            <div class="row">
                <div class="shadow-lg p-3 mb-4 rounded border2 border-light2 ml-3" style="background-color: #555b61;">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                        <div class="row textepresentation">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6">

                                <div class="djbchalk">
                                    <u>NOM :</u> NICOLE<br>
                                    <u>PRENOM :</u> Maxence<br>
                                    <u>DATE DE NAISSANCE :</u> 08/03/1998<br>
                                    <u>LIEU DE NAISSANCE :</u> Saint-Priest-En-Jarez.<br>
                                    <u>NIVEAU D'ETUDE :</u> <br>
                                    Je suis étudiant en BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions logicielles et applications métiers forme des spécialistes des logiciels).<br>
                                    <u>ECOLE :</u> Lycée Simone Weil (Saint-Etienne)<br>
                                    <u>FORMATIONS :</u> BAC STMG SIG (Mention BIEN), Permis de conduire.
                                </div>

                            </div>

                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6">

                                <div class="djbchalk">
                                    <u>CENTRE D'INTERETS :</u> <br>
                                    J'ai différents centres d'intérêts dans la vie quotidienne tel que le sport et plus particulièrement le foot et bien évidemment l'informatique, je développe assez souvent à la maison et suis de très près les différentes évolutions dans le domaine de l'informatique et de la technologie en général. <br>
                                    <u>OBJECTIF :</u> <br>
                                    Mon objectif après le BTS est de pouvoir intégrer une licence professionnelle en alternance afin de trouver un travail me permettant d'etre pleinement épanouis dans ce que je vais faire.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-3 col-lg-3 mb-3 d-md-none d-lg-block">

            <div class=" mt-3 rounded ml-3 border-presentation" style="background-color: white">
                <img class="img-fluid" src="https://nmaxence.fr/Public/img/5.png" alt="moi"/>
            </div>

        </div>
    </div>
  </div>
</div>