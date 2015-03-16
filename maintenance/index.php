<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<title>Le Cyclo Plombier</title>
</head>
<body>
	<div id="content">
		<header>
			<img id="first_img" src="img/bandeau_site_maintenance_Lecycloplombier.png" alt="Page de Maintenance Le Cyclo Plombier">
			<aside>
				<h3>(aussi sur facebook)</h3>
				<a id="facebook" href="https://www.facebook.com/lecycloplombier?fref=ts"><img src="img/facebook_page_lecycloplombier.png" alt="Facebook Le Cyclo Plombier"></a>
			</aside> 
		</header>
		<section>
			<h1>LECYCLOPLOMBIER.FR, C’EST DANS LES TUYAUX !</h1>
			<h2> Le Cyclo Plombier, c’est un artisan à votre écoute, qui intervient à Paris, chez vous en se déplaçant à vélo (On le saura!)</h2>
			<h3>Votre site du Cyclo Plombier sera bientôt disponible. Pour toute intervention vous pouvez me contacter</h3>
		</section>

		<!-- <section>
			
			<form id="contact" method="post" action="traitement_formulaire.php">
				<fieldset>
					<p><label for="nom">Nom :</label><br><input type="text" id="nom" name="nom" tabindex="1" /></p>
					<p><label for="email">Email :</label><br><input type="text" id="email" name="email" tabindex="2" /></p>
				</fieldset>
		 		
				<fieldset><legend>Votre message :</legend>
					<p><label for="objet">Objet :</label><br><input type="text" id="objet" name="objet" tabindex="3" /></p>
					<p><label for="message">Message :</label><br><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
				</fieldset>
		 
				<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
			</form>
		</section> -->
	




		<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'contact@lecycloplombier.fr';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail
		if (mail($cible, $objet, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
	// afficher le formulaire
	echo '
	<section>
	<form id="contact" method="post" action="'.$form_action.'">
	<fieldset>
		<p><label for="nom">Nom :</label><br><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
		<p><label for="email">Email :</label><br><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
	</fieldset>

	<fieldset><legend>Votre message :</legend>
		<p><label for="objet">Objet :</label><br><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
		<p><label for="message">Message :</label><br><textarea id="message" name="message" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
	</fieldset>

	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
	</form>
	</section>';
};
?>


	<footer>
		<h3>
			&copy; Le Cyclo Plombier
		</h3>
	</footer>


	</div>
</body>
</html>