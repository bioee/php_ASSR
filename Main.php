<!DOCTYPE html> 
<html>
    <head lang="fr">        
	<?php include("entete.php"); ?>
    </head>
     <body>             
	 <?php include("menu.php"); ?>
	 
	 
	 <?php
	 
	$login_valide = "moi";
	$pwd_valide = "lemien";
	

	if (isset($_POST['login']) && isset($_POST['pwd'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
  	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
  		// dans ce cas, tout est ok, on peut démarrer notre session
  
  		// on la démarre :)
  		session_start ();
  		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
  		$_SESSION['login'] = $_POST['login'];
  		$_SESSION['pwd'] = $_POST['pwd'];
  
  		// on redirige notre visiteur vers une page de notre section membre
  		header ('location: page_membre.php');
  		
  	}else {
  		include("form.php");
  	}
  }
	?>
	
	  <?php include("pied.php"); ?>
	
	
	*/ ?>
	  </body> 
</html>
