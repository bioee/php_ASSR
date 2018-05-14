<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head lang="fr">
        <?php include("Controller/entete.php"); ?>
    </head>

    <body>
        <?php include("Controller/menu.php"); ?>
        
        <?php if (isset($_SESSION['id'])){ #si user authentifi� on peut participer au chat 
                include("Controller/chat.php"); 
              } ?>
        
        
        
        <?php include("Controller/pied.php"); ?>
    </body>
    
    
</html>
