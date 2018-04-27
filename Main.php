<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head lang="fr">
        <?php include("entete.php"); ?>
    </head>

    <body>
        <?php include("menu.php"); ?>
        
        <?php if (isset($_SESSION['id'])){ #si user authentifié on peut participer au chat 
                include("chat.php"); 
              } ?>
        
        
        
        <?php include("pied.php"); ?>
    </body>
    
    
</html>
