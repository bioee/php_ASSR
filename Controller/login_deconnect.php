<?php
//header("Location: Main.php");

// D�truit toutes les variables de session
$_SESSION = array();
 
// Si vous voulez d�truire compl�tement la session, effacez �galement
// le cookie de session.
// Note : cela d�truira la session et pas seulement les donn�es de session !
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}
 
// Finalement, on d�truit la session.
session_destroy();
?> 



<!-- Si on veut afficher une page de déconnection -->
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php_ASSR</title>
    </head>
    <body>
    <center>
         <h1>Déconnection</h1>
         <a href=login_form.php>Accès au formulaire de connexion</a>
         <h1>Accueil</h1>
         <a href=Main.php>Accès à l'accueil</a>
    </center>
    </body>
</html>