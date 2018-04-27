<nav id="menu">      
      <div class="element_menu">        

            <ul>
	            <li><a href="#" >Accueil</a></li>
                <li><a href="#" >Aide</a></li>

         <?php
            if (!isset($_SESSION['id'])){ // useur non authentifié:
                    echo "<li><a href=\"login_form.php\">S'identifier</a></li>" ;
            }else{
                    // echo "<li><p> Bonjour ".$_SESSION['login']."</p></li>" ;
                    echo "Bonjour ".$_SESSION['login']. "" ;
                    echo "<a href=\"login_deconnect.php\" > <img src='images/logout.png' align='right' alt='deconnection' /> </a>" ;
            } 
            ?>
            </ul>

		</div>    
</nav>


