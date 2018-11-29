<div id="Cv">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 border-bottom2 titre" style="background-color: white">

                <p class="text-center funsized pt-2">
                    Connexion
                </p>

            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 offset-xl-4">
                <div class="shadow-lg rounded p-2 bg-light mt-5 text-center">

                    <img src="Public/img/nmco.jpg" alt="imgco" style="max-width: 30%" class="rounded-circle border border-dark">

                    <hr style="width: 85%"><br>

                    <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-xl-10 col-lg-10 offset-xl-1 offset-lg-1">

                        <form method="POST" action="index.php?action=sign_up">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" id="nomid" placeholder="Nom" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="prenom" id="prenomid" placeholder="Prénom" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tel" id="telid" placeholder="Téléphone" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="emailid" placeholder="Email" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="password" class="form-control" name="mdp" id="mdpid" placeholder="Mot de passe" required="required">
                            </div><br>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role_id" id="role_idid" value="2" required="required">
                            </div><br>
                            <button type="submit" class="btn btn-secondary btn-lg btn-block">S'inscrire</button><br>
                        </form>

                    </div>

                    <a style="color:darkgrey; font-size: 130%;" href="index.php?action=connexion">Se connecter</a>

                </div>

            </div>

        </div>
    </div>
</div>