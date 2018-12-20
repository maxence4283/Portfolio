<div id="nav" class="container-fluid sticky-top">
    <div  class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
        <nav id="navigation" class="navbar navbar-expand-lg">

            <a class="navbar-brand display-4 funsized" href="index.php#haut"><img class="img-fluid" src="Public/img/NM2.png" alt="logo"/></a>

            <button class="navbar-toggler2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span id="navbartoggler"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-end caviardreams font-weight-bold" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#haut">Accueil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#présentation">Présentation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Competence">Compétences</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#projets">Projets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Cv">CV</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=veilles">Veilles technologiques</a>
                    </li>

                    <?php
                        if (isset($_SESSION['connecte'])) {
                    ?>
                    <li class="nav-item" >
                        <a class="nav-link" href="index.php?action=compte">Mon compte</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="index.php?action=deconnexion">Déconnexion</a>
                    </li>
                    <?php
                         }
                    ?>
                    <!-- <li class="nav-item" >
                        <a class="nav-link" href="index.php?action=connexion">Connexion</a>
                    </li>
                    <li class="nav-itemk" >
                        <a class="nav-link" href="index.php?action=inscription">Inscription</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
</div>
