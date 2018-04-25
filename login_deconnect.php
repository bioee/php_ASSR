<?php
session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',0,'/');
$_SESSION = array();
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
         <a href=form.php>Accès au formulaire de connexion</a>
         <h1>Accueil</h1>
         <a href=Main.php>Accès à l'accueil</a>
    </center>
    </body>
</html>