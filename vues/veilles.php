<?php ob_start(); ?>
<div id="veilles" class="middlesection">
    <div class="container-fluid" style="padding-top: 20px">
      <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-xl-12 col-lg-12 ">

                <h2 class="pt-2 titre">
                    <i class="fas fa-search"></i> MES VEILLES
                </h2>

                <hr style="height:5px; border:none; color:#507fe2; background-color:#507fe2;width:10%;float:left">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" style="margin-top: 4%">
              <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6" style="margin-bottom: 4%;">
                    <div class="shadow-lg rounded bg-light text-center">

                        <div class="card" style="width: 100%;">
                          <a href="/veilles/referencement/"><img class="card-img-top" src="/Public/img/refgoogle.png" alt="Card image cap"></a>
                          <div class="card-body">
                            <a href="/veilles/referencement/" class="linkveille card-title">Le Référencement Web</a>
                            <hr>
                            <p class="card-text">Dans cette veilles technologique, je vais vous présenter tout ce que j'ai pu apprendre sur le référencement Web durant mes différents projets.</p>
                            <a href="/veilles/referencement/" class="btn-veille btn-block">Voir la veille</a>
                          </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6" style="margin-bottom: 4%;">
                    <div class="shadow-lg rounded bg-light text-center">

                        <div class="card" style="width: 100%;">
                          <a href="/veilles/bootstrap/"><img class="card-img-top"  src="/Public/img/bootstrap-social.png" alt="Card image cap"></a>
                          <div class="card-body">
                            <a href="/veilles/bootstrap/" class="linkveille card-title">Bootstrap</a>
                            <hr>
                            <p class="card-text">Dans cette veilles technologique, je vais vous présenter le framework Bootstrap dans sa globalité.</p>
                            <a href="/veilles/bootstrap/" class="btn-veille btn-block">Voir la veille</a>
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