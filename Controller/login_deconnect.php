<?php
//header("Location: Main.php");

// DÈtruit toutes les variables de session
$_SESSION = array();
 
// Si vous voulez dÈtruire complËtement la session, effacez Ègalement
// le cookie de session.
// Note : cela dÈtruira la session et pas seulement les donnÈes de session !
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}
 
// Finalement, on dÈtruit la session.
session_destroy();
?> 



<!-- Si on veut afficher une page de d√©connection -->
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php_ASSR</title>
    </head>
    <body>
    <center>
         <h1>D√©connection</h1>
         <a href=login_form.php>Acc√®s au formulaire de connexion</a>
         <h1>Accueil</h1>
         <a href=Main.php>Acc√®s √† l'accueil</a>
    </center>
    </body>
</html>