<?php ob_start(); ?>
<div id="veilles">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" style="margin-top: 4%">
              <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6" style="margin-bottom: 4%;">
                    <div class="shadow-lg rounded bg-light text-center">

                        <div class="card" style="width: 100%;">
                          <img class="card-img-top" src="Public/img/refgoogle.png" alt="Card image cap">
                          <div class="card-body">
                            <a href="index.php?action=referencement" style="color:black" class="card-title champagne font-weight-bold titreprojet">Le Référencement Web</a>
                            <hr>
                            <p class="card-text">Dans cette veilles technologique, je vais vous présenter tout ce que j'ai pu apprendre sur le référencement Web durant mes différents projets.</p>
                          </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6" style="margin-bottom: 4%">
                    <div class="shadow-lg rounded bg-light text-center">

                        <div class="card" style="width: 100%;">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title champagne font-weight-bold titreprojet">A venir</h5>
                            <p class="card-text">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                        </div>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>