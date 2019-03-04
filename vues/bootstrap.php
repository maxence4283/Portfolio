<?php 
ob_start();
?>

<div id="bootstrap">
	<div class="container-fluid">
		<div class="row">
			<img class="banniere" src="/Public/img/bannierebootstrap.png" alt="baniererefbootstrap" />
				<div class="middlesection">
					<div class="col-12 col-xs-12 xol-sm-12 col-md-12 col-lg-12 col-xl-12 font-weight-bold middlesection" style="font-family: 'Lato',; color:#555b61">
						<h1 class="text-center display-4" style="margin-top: 2%;">BOOTSTRAP</h1>
							<hr style="height:5px; border:none; color:#507fe2; background-color:#507fe2;width:20%"><br><br>
							<div class="col-12 col-xs-12 xol-sm-12 col-md-12 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4">
								<div class="shadow-lg p-2">
									<p class="h1 text-center">
										Sommaire<br>
									</p>

									<ul class="h4 mt-4">
										<li style="list-style:none">
											<a class="link"  href="#I" style="text-decoration: none;">I/ Les Frameworks CSS</a> <br><br>
										</li>

										<li style="list-style:none">
											<a class="link" href="#II" style="text-decoration: none;">II/ Le Responsive Design </a> <br><br>
										</li>

										<li style="list-style:none">
											<a class="link" href="#III" style="text-decoration: none;">III/ Pourquoi Bootstrap </a> <br><br>
										</li>

										<li style="list-style:none">
											<a class="link" href="#IV" style="text-decoration: none;">IV/ Installer Bootstrap</a> <br><br>
										</li>

										<li style="list-style:none">
											<a class="link"  href="#V" style="text-decoration: none;">V/ La Grille Bootstrap </a> <br><br>
										</li>

										<li style="list-style:none">
											<a class="link" href="#VI" style="text-decoration: none;">VI/ Les différentes classes </a> <br><br>
										</li>
									</ul>
								</div>
							</div><br><br>

							<div id="I" class="font-weight-bold h2">
								I/ Les Framework CSS
							</div><br>

							<div>
								<p>De nombreux framework CSS sont présents sur le marché du développement informatique front-end. Chacun possède ses avantages et ses inconvénients, nous avons notamment Skeleton, Clank, KickStart, Kube, etc.. Sans oublier bien évidemment Bootstrap qui est la plus grande référence en matière de framework front-end. Les frameworks CSS vont nous permettre de réaliser notre site web plus rapidement et de manière plus organisée avec l'aide de milliers de raccourcis et d'outils de structuration. Ils vont également nous permettre d'être pour la plupart responsive. Nous allons présenter ce framework sous différents points.</p>
							</div><br>

							<div id="II" class="font-weight-bold h2">
								II/ Le responsive design
							</div><br>

							<div>
								<p>Avant toute chose, une des raisons pour laquelle nous allons choisir d'utiliser un framework est le responsive design. Le responsive design est un principe sur lequel un site doit être compatible avec les différents outils où votre site va être accessible et aussi les différents navigateurs. Nous devons donc rendre notre site compatible avec les mobiles, tablettes, ordinateurs évidemment et même les télévisions. Google prend énormément en compte ce point la pour au mieux référencer votre site. Avoir un site responsive c'est donner la chance à votre site d'arriver dans les meilleures positions. Bootstrap nous permet donc d'y aboutir de manière simple et accessible comme nous allons le voir par la suite.</p>
							</div><br>

							<div id="III" class="font-weight-bold h2">
								III/ Pourquoi Bootstrap?
							</div><br>

							<div>
								<p>Bootstrap est très certainement le framework qui se démarque le plus des autres. Il est gratuit, accessible et complet. Sa notoriété joue aussi un grand rôle dans sa forte utilisation (Bootstrap à été créée par Twitter). Il est souvent mis à jour afin de toujours rester dans l'actualité, il possède aussi une <a href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" target="_blank">documentation</a> complète et disponible très facilement sur leur site. Par dessus tout ça Bootstrap possède une énorme communauté, qui est active via de nombreux forums et sites permettant le partage de code tel que <a href="https://bootsnipp.com/" target="_blank">Bootsnip</a> ou encore <a href="https://hackerthemes.com/bootstrap-cheatsheet/" target="_blank">Bootstrap Cheat Sheet</a>.</p>
							</div>

							<div id="IV" class="font-weight-bold h2">
								IV/ Installer Bootstrap
							</div><br>

							<div>
								<p>Pour installer <a href="https://getbootstrap.com/docs/4.3/getting-started/download/" target="_blank">Bootstrap</a> rien de plus simple. Nous avons différentes possibilitées qui s'offrent à nous. La première est la plus simple; il nous suffit d'implanter deux lignes de code entre les balises 'head', une pour le CSS et deux autres pour le JavaScript.</p>
							</div><br>

							<img class="img-responsive img-fluid" src="/Public/img/dowloadbootstrap.png"/><br><br>

							<div>
								<p>La deuxième manière qui s'offre à nous est de télécharger les fichiers sources de Bootstrap et de directement les copier dans vos votre serveur et ensuite les appeller entre les balises 'head'. Mais attention avec cette manière, faites attention à ne pas modifier le contenu de ces fichiers (Oui, même malgrès la tentation ^^ )</p>
							</div>

							<div id="V" class="font-weight-bold h2">
								V/ La grille Bootstrap
							</div><br>

							<div>
								<p>Bootstrap utilise un système de grille afin de pouvoir dispositionner les éléments de notre site de manière ordonnée. La grille Bootstrap est composée de 12 colonnes. Avant de déclarer le nombre de colonne que notre élément va prendre, il nous faut d'abord définir si notre élément est un container-fluid; c'est à dire qu'il va prendre 100% de la taille de l'écran horizontalement ou container fixe veut dire que l'élément va être centré et fixe. Ensuite nous devons créer une ligne (class="row"). Une fois cela fait, nous devons définir la taille de notre élément en fonction des différents devices (mobile, tablette, ordinateur..)</p>
							</div>

							<div class="text-center">
								<img class="img-responsive img-fluid" src="/Public/img/col-bootstrap.png"/><br><br>
							</div>

							<div>
								<p>Extra small et small vont correpondre aux mobiles, medium aux tablettes, large, au ordinateurs et Extra large, aux grands écrans et télévisions. La class 'col-md-12' veut dire que l'élément concerné va prendre 12 colonnes sur les tablettes. Ce système de grille va permettre à notre site d'être le plus optimisé possible et va surtout nous permettre de rendre notre site responsive en adaptant la taille de nos éléments en fonction des devices. Avec bootstrap vous pouvez aussi facilement décider de ne pas afficher un élément sur certains devices. Voir <a href="https://getbootstrap.com/docs/4.3/utilities/display/" target="_blank">documentation</a> pour plus de détail.</p>
							</div>

							<div id="VI" class="font-weight-bold h2">
								VI/ Les différentes classes
							</div><br>

							<div>
								<p>Des millers de classes existent avec bootstrap, toutes les retenir est pratiquement impossible c'est pour cela que bootstrap à mis à disposition des développeurs une très grande documentation, claire, complète et accessible. Sur cette documentation vous retrouverez l'ensemble des classes et possibilités que vous pouvez exploiter. Bootstrap ajoute très régulièrement des classes dans le cadre de ses mises à jour. Ces classes nous permettent de styliser notre site de manières très raccourcis et joliment designées. En plus de tout ce côté pratique Bootstrap nous offre un design de qualité et est dans l'air du temp.</p><br>

								<p>
									// Ce portfolio utilise Bootstrap.
								</p>
							</div>

						</div>
					</div>
			</div>
	</div>
</div>


<?php
$content = ob_get_clean();
?>