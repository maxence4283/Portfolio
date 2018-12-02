<div id="Cv">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 border-bottom2 titre" style="background-color: white">

                <p class="text-center funsized pt-2">
                    Mon compte
                </p>

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

                    <ul class="list-group list-group-flush2">

                        <li class="list-group-item2 lead" style="border-top:0">
                            Nom
                        </li>

                        <li class="list-group-item2">
                            <?php echo $user['nom'];?>
                        </li>

                        <li class="list-group-item2 lead">
                            Prénom
                        </li>

                        <li class="list-group-item2">
                             <?php echo $user['prenom'];?>
                        </li>

                        <li class="list-group-item2 lead">
                            tel
                        </li>

                        <li class="list-group-item2">
                            <?php echo $user['tel'];?>
                        </li>

                        <li class="list-group-item2 lead">
                            Email
                        </li>

                        <li class="list-group-item2">
                            <?php echo $user['email'];?>
                        </li>

                        <li class="list-group-item2 lead">
                            Adresse ip
                        </li>

                        <li class="list-group-item2">
                            <?php echo $_SERVER['REMOTE_ADDR'];?>
                        </li>

                    </ul><br>

                    <a class="btn btn-secondary" href="index.php?action=majinfo">Mettre à jour mes information</a><br><br>

                    </div>

                    <a class="champagne font-weight-bold" style="color:#e74c3c; font-size: 100%; text-decoration: none" href="index.php">Retourner à l'accueil</a>



                </div><br>

            </div>

        </div>
    </div>
</div>