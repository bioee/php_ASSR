<nav id="menu">      
      <div class="element_menu">        

            <ul>
	            <li><a href="#" >Accueil</a></li>
                <li><a href="#" >Aide</a></li>

         <?php
            if (!isset($_SESSION['id'])){ // useur non authentifié:
                    echo "<li><a href=\"Controller/login_form.php\">S'identifier</a></li>" ;
                    echo "<li><a href=\"Controller/create_form.php\">Creer un nouvel utilisateur</a></li>" ;
            }else{
                    // echo "<li><p> Bonjour ".$_SESSION['login']."</p></li>" ;
                    echo "<p1> Bonjour ".$_SESSION['login']. "<p1>" ;
                    echo "<a href=\"Controller/login_deconnect.php\" > <img src='images/logout.png' align='right' alt='deconnection' /> </a>" ;
            } 
            ?>
            </ul>

		</div>    
</nav>


