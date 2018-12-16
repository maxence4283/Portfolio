<?php 
// Déclaration de la classe concernant l'envoie de mail
class ContactController {
	
	// Fonction permettant d'envoyer un mail via le serveur SMTP (simple mail transfert protocole)
	public function mail() {

		// Si tout les champs du formulaire de contact sont bien remplis alors
		if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['object']) && !empty($_POST['object']) && isset($_POST['contenue']) && !empty($_POST['contenue'])) {

			// Déclaration des différentes variable 
			 $nom=$_POST['nom'];
			 $email = $_POST['mail'];
			 $object = $_POST['object'];
			 $contenue = $_POST['contenue'];

			 	// Construction du mail au format HTML
			   $to    = "maxencenicole@nmaxence.fr";
			   $JOUR  = date("Y-m-d");
			   $HEURE = date("H:i");
			   $Subject = $object." - $JOUR $HEURE";
			   $mail_Data = "";
			   $mail_Data .= "<html> \n";
			   $mail_Data .= "<head> \n";
			   $mail_Data .= "<title>".$Subject."</title> \n";
			   $mail_Data .= "</head> \n";
			   $mail_Data .= "<body> \n";
			   $mail_Data .= "Mail : <b>".$email."</b> <br><br> \n";
			   $mail_Data .= "Sujet : <b>".$Subject."</b> <br> \n";
			   $mail_Data .= "<br> \n";
			   $mail_Data .= "Contenue : ".$contenue."<br> \n";
			   $mail_Data .= "</body> \n";
			   $mail_Data .= "</HTML> \n";

			   $headers  = "MIME-Version: 1.0 \n";
			   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
			   $headers .= "From: ".$nom."  \n";
			   $headers .= "Disposition-Notification-To: ".$nom."  \n";
			   $headers .= "X-Priority: 1  \n";
			   $headers .= "X-MSMail-Priority: High \n";

			   $CR_Mail = TRUE;
			   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

			   // Si le mail ne s'est pas envoyé alors
			   if ($CR_Mail === FALSE) {

			      header("Location: ../?success=2");

			      // Sinon
			      } else {
			      	
			      header("Location: ../?success=1");

			      }

			    // Si tout les champs ne sont pas remplis
				} else {
				   header("Location: ../?error=1");
				}

	}

}

?>