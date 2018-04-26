<?php
// on stop la session:
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?> 



//header("Location: Main.php");
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