<div id="contact" class="middlesection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12 ">

                <h2 class="pt-2 titre">
                    <i class="fas fa-headset"></i> CONTACT
                </h2>

                <hr style="height:5px; border:none; color:#507fe2; background-color:#507fe2;width:10%;float:left">
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12 mb-5">
              <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-xl-3 col-lg-3 mt-4 champagne font-weight-bold" >

                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-xl-6 col-lg-6 text-center mt-4">
                 <form action="index.php?action=mail" method="post" class="needs-validation" data-form-title="CONTACT US">

                    <div class="input-group">
                            <div class="input-group-prepend">
                               <span class="input-group-text" id="nom1"><i class="far fa-user"></i></span>
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
                                <span class="input-group-text" id="mail1"><i class="fas fa-at"></i></span>
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
                                <span class="input-group-text" id="subject"><i class="funsized fas fa-font"></i></span>
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

                        <button type="submit" class="btn-contact ">ENVOYER !</button><br>
                      </div>
                    </form>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-xl-3 col-lg-3 mt-4  champagne font-weight-bold">
                  <div class="shadow-lg rounded bg-light p-2">

                    <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12">

                      <p> <i class="fas fa-map-marker-alt"></i> 8 avenue de la libération <br>
                        43120<br>
                      Monistrol-Sur-Loire </p>
                    
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12">

                      <p> <i class="fas fa-mobile-alt"></i> +33 6 72 66 87 37 </p>
                    
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12">

                      <p> <i class="far fa-envelope"></i> maxencen.contact@gmail.com </p>
                    
                    </div>

                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
</div>