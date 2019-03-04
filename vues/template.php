<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Voici mon Portfolio, vous y retrouverez différentes informations me concernant et concernant mes différentes compétences et projets réalisés.">
    <meta name="keywords" content="Portfolio, port-folio, port, folio, maxence, nicole, Maxence, NICOLE,BTS , SIO, BTS SIO, Monistrol sur loire, Saint-etienne, saint-priest-en-jarez, 20, ans, Lycée, Simone, Weil, Lycée Simone Weil, Etudiant, étudiant, BTS, sio, informatique, developpement web, developpement, web.">
    <link rel="canonical" href="https://www.nmaxence.fr/" />
    <meta name="author" content="NICOLE Maxence">
    <meta name="copyright" content="Maxence NICOLE">   
    <link rel="shortcut icon" href="https://nmaxence.fr/Public/img/5.png">
    <link rel="stylesheet" href="/Public/css/portfolio.css" media="all">
    <link href='http://fonts.googleapis.com/css?family=lato' rel='stylesheet' type='text/css' media="all">
    <meta name="msvalidate.01" content="C6FE26F1C48CE3E8B023F58A78763822" />
    <link rel="stylesheet" href="/Public/css/bootstrap.css" media="all">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://nmaxence.fr/Public/js/bootstrap.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134536281-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-134536281-1');
    </script>


    <title><?php echo $titre;?></title>

  </head>
      <body style="background-color: white;">

			<a id="haut"></a>
	
	<?php include ('vues/nav.php'); ?>
  <div style="padding-top: 90px">
	<?=$content ?>
</div>
	<?php include("vues/footerbar.php");?>

   </body>
   <script>
     $(".nav-item").on("click", function(e){
  $("li.nav-item").removeClass("active");
  $(this).addClass("active");
});

   </script>
   <script>
</script>
</html>
