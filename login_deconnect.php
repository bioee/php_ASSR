<?php
header("Location: Main.php");

// on detruit la session:
$_SESSION = array();
session_destroy();
?> 


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