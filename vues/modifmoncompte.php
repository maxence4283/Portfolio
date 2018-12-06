<div id="Cv">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 border-bottom2 " style="background-color: white">

                <p class="text-center funsized pt-2 titre">
                    Mon compte
                </p>

            <!-- Gestion des alerts -->
                <?php
                    if (!empty($_GET['erreur']) && isset($_GET['erreur'])) {
                        if ($_GET['erreur'] == 1 ) {
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

            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 offset-xl-4">
                <div class="shadow-lg rounded p-2 bg-light mt-5 text-center">

                    <img src="Public/img/nmco.jpg" alt="imgco" style="max-width: 30%" class="rounded-circle border border-dark">

                    <hr style="width: 85%"><br>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-10 col-lg-10 offset-xl-1 offset-lg-1">
                        <?php
                        $id = $_SESSION['id'];
                        $controller = new Connexion();
                        $user = $controller->affInfoUser($id);
                        ?>
                    <p class="h1"> Vos information </p><br>

                    <form action="index.php?action=submitmajinfo" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" id="nomid" name="nom" value=<?php echo $user['nom']; ?>>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="text" class="form-control" id="prenomid" name="prenom" value=<?php echo $user['prenom']; ?>>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tel</label>
                        <input type="text" class="form-control" id="telid" name="tel" value=<?php echo $user['tel']; ?>>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="emailid" name="email" value=<?php echo $user['email']; ?>>
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="ididid" name="id" value=<?php echo $_SESSION['id']; ?>>
                      </div>
                      <button type="submit" class="btn btn-secondary">Mettre à jour</button>
                    </form><br>

                    </div>

                    <a class="champagne font-weight-bold" style="color:#e74c3c; font-size: 100%; text-decoration: none" href="index.php">Retourner à l'accueil</a>



                </div><br>

            </div>

        </div>
    </div>
</div>