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

         <?php
            if (!isset($_SESSION['login'])) :
                ?>
                <!-- s'identifier / s'inscrire -->
                <ul>
                    <li><a href="form.php">S'identifier</a></li>
                </ul>

                <?php
            else :
                $utilisateur = $_SESSION['login'];
                ?>

                <ul>
                    <li><?= $utilisateur ?></li>
                    <li> <a role='button' title="Déconnection." href="login_deconnect.php" >
                            <!-- <img src="images/deconnection.png" alt=""/> -->
                            Deconnection
                         </a>
                    </li>
                </ul>


            <?php
            endif;
            ?>


	  <?php include("pied.php"); ?>

	  </body>
</html>
