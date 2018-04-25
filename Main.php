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

	// on vÃ©rifie les informations du formulaire, Ã  savoir si le pseudo saisi est bien un pseudo autorisÃ©, de mÃªme pour le mot de passe
  	 if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
      		// début de session
       		session_start ();    		
      		$_SESSION['login'] = $_POST['login'];
      		$_SESSION['pwd'] = $_POST['pwd'];
         
         echo "vous etes déja authentifié :) <br>";
     }else{
          echo "Login ou mot de passe non valide <br>";
          include("form.php");
     }
}else{
  		include("form.php");
}
	?>
 
 
 
 
	
	  <?php include("pied.php"); ?>
	
	
	*/ ?>
	  </body> 
</html>
