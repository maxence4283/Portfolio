<?php ob_start(); ?>
<div id="Cv">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 offset-xl-4">

                    <!-- Gestion des alerts -->
                    <?php
                        if (!empty($_GET['erreur']) && isset($_GET['erreur'])) {
                            if ($_GET['erreur'] == 1 ) {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show champagne font-weight-bold" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          Votre identifiants sont inccorects.
                        </div>
                    <?php
                            } elseif ($_GET['erreur'] == 2 ) {
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
                    <!-- Fin des alerts -->
                    
                <div class="shadow-lg rounded p-2 bg-light mt-5 text-center mb-5">

                    <img src="Public/img/nmco.jpg" alt="imgco" style="max-width: 30%" class="rounded-circle border border-dark">

                    <hr style="width: 85%"><br>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-10 col-lg-10 offset-xl-1 offset-lg-1">

                        <form method="POST" action="index.php?action=login">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="emailid" placeholder="Email" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="password" class="form-control" name="mdp" id="mdpid" placeholder="Mot de passe" required="required">
                            </div><br>
                            <button type="submit" class="btn btn-secondary btn-lg btn-block">Se connecter</button><br>
                        </form>

                    </div>

                    <a style="color:darkgrey; font-size: 130%;" href="index.php?action=inscription">S'enregistrer</a><br><br>

                    <a class="champagne font-weight-bold" style="color:#e74c3c; font-size: 100%; text-decoration: none" href="index.php">Retourner à l'accueil</a>

                </div>

            </div>

        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>