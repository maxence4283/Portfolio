<div id="nav" class="container-fluid sticky-top border-bottom2" style="background-color: white; margin-bottom: 4%">
    <div  class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
        <nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light2">

            <a class="navbar-brand display-4 funsized" href="#haut"><img class="img-fluid" src="Public/img/NM2.png" alt="logo"/></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-end caviardreams font-weight-bold" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item ">
                        <a class="nav-link" href="#haut">Accueil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Presentation">Présentation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Competence">Compétences</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Cv">CV</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                    <?php
                        if (isset($_SESSION['connecte'])) {
                    ?>
                    <li class="nav-item d-none d-xl-block" >
                        <a class="nav-link" href="index.php?action=deconnexion">Déconnexion</a>
                    </li>
                    <?php
                        } else {
                    ?>
                    <li class="nav-item d-none d-xl-block" >
                        <a class="nav-link" href="index.php?action=connexion">Connexion</a>
                    </li>
                    <?php
                        }
                    ?>

                </ul>
            </div>
        </nav>
    </div>
</div>
