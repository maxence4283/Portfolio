<section id="contact" class="middlesection">
    <div class="container-fluid" style="padding-top:50px;">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 ">

                <h2 class="pt-2 titre">
                    <i class="fas fa-headset"></i> CONTACT
                </h2>

                <hr style="height:5px; border:none; color:#507fe2; background-color:#507fe2;width:10%;float:left">
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mb-5">
              <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-8 col-lg-8 offset-xl-2 offset-lg-2 text-center mt-4">

                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <i style="font-size:30pt; color:#507fe2;background-color:white;border-radius:50%;width:2em;height:2em;line-height: 1.8em;border: 4px solid #507fe2" class="fas fa-mobile-alt"></i><br>
                        <div style="margin-top: 20px;margin-bottom: 20px">
                          <a class="link" href="tel:0672668737">+33 6 72 66 87 37</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <i style="font-size:30pt; color:#507fe2;background-color:white;border-radius:50%;width:2em;height:2em;line-height: 1.8em;border: 4px solid #507fe2" class="far fa-envelope"></i><br>
                        <div style="margin-top: 20px;margin-bottom: 20px">
                          <a class="link" href="mailto:maxencen.contact@gmail.com">maxencen.contact@gmail.com</a>
                        </div>
                    </div>
                  </div>

                 <form action="index.php?action=mail" method="post" class="needs-validation" data-form-title="CONTACT US">

                    <div class="input-group">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required="required" data-form-field="nom">
                            <div class="invalid-feedback">
                            Entrez un nom valide !
                          </div>
                          <div class="valid-feedback">
                            Nom valide !
                          </div>
                    </div><br>


                      <div class="input-group">
                        <input type="email" class="form-control" name="mail" id="mail"  required="required" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" placeholder="Adresse Mail" data-form-field="mail">
                            <div class="invalid-feedback">
                            Entrez une adresse mail valide !
                          </div>
                          <div class="valid-feedback">
                            Adresse mail valide !
                          </div>
                      </div><br>

                      <div class="input-group">
                        <input type="text" class="form-control" name="object" id="Sujet" required="required" placeholder="Sujet" data-form-field="sujet">
                            <div class="invalid-feedback">
                            Entrez un sujet valide !
                          </div>
                          <div class="valid-feedback">
                            Sujet valide !
                          </div>
                      </div><br>

                      <div class="input-group">
                        <textarea class="form-control" name="contenue" id="contenue" placeholder="Message" rows="7" data-form-field="contenu" required="required"></textarea>
                            <div class="invalid-feedback">
                            Entrez un contenue valide !
                          </div>
                          <div class="valid-feedback">
                            Contenue valide !
                          </div>
                      </div>
                      <div><br>

                        <button type="submit" class="btn-contact ">ENVOYER !</button><br>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>