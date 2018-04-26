<nav id="menu">      
      <div class="element_menu">        

            <ul>
	            <li><a href="#" >Accueil</a></li>
                <li><a href="#" >Aide</a></li>

         <?php
            if (!isset($_SESSION['login'])) :
                ?>

                <!-- s'identifier / s'inscrire -->
                    <li><a href="form.php">S'identifier</a></li>

                <?php
            else :
                $utilisateur = $_SESSION['login'];
                ?>

                    <li><?= $utilisateur ?></li>
                    <li> <a role='button' title="Déconnection." href="login_deconnect.php" >
                            <!-- <img src="images/deconnection.png" alt=""/> -->
                            Deconnection
                         </a>
                    </li>


            <?php
            endif;
            ?>

            </ul>

		</div>    
</nav>


