<div id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12">

                <p class="text-center display-4 funsized" style="margin-bottom: -2%;padding-top: 1.5%">
                    CONTACT
                </p>

                <hr class="my-5">

                <div class="col-12 col-xs-12 col-sm-12 col-xl-6 offset-lg-3 col-lg-6 offset-xl-3 text-center">
                 <form action="" method="post" class="needs-validation" data-form-title="CONTACT US">

                    <div class="input-group">
                            <div class="input-group-prepend">
                               <span class="input-group-text" id="nom"><i class="far fa-user"></i></span>
                            </div>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required="required" data-form-field="nom">
                            <div class="invalid-feedback">
                            Entrez un nom valide !
                          </div>
                          <div class="valid-feedback">
                            Nom valide !
                          </div>
                    </div>


                    <label for="mail" style="font-size: 150%"></label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="mail"><i class="fas fa-at"></i></span>
                            </div>
                        <input type="email" class="form-control" name="mail" id="mail"  required="required" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" placeholder="Adresse Mail" data-form-field="mail">
                            <div class="invalid-feedback">
                            Entrez une adresse mail valide !
                          </div>
                          <div class="valid-feedback">
                            Adresse mail valide !
                          </div>
                      </div>

                        <label for="Sujet" style="font-size: 150%"></label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="subject"><i class="fas fa-font"></i></span>
                            </div>
                        <input type="text" class="form-control" name="object" id="Sujet" required="required" placeholder="Sujet" data-form-field="sujet">
                            <div class="invalid-feedback">
                            Entrez un sujet valide !
                          </div>
                          <div class="valid-feedback">
                            Sujet valide !
                          </div>
                      </div>

                      <label for="contenue" style="font-size: 150%"></label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="content"><i class="fas fa-align-justify"></i></span>
                            </div>
                        <textarea class="form-control" name="contenue" id="contenue" placeholder="Message" rows="7" data-form-field="contenu" required="required"></textarea>
                            <div class="invalid-feedback">
                            Entrez un contenue valide !
                          </div>
                          <div class="valid-feedback">
                            Contenue valide !
                          </div>
                      </div>
                      <div><br>

                        <button type="submit" class="btn btn-lg btn-secondary btn-block sketch">ENVOYER !</button><br>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>