<nav id="menu">      
      <div class="element_menu">        

            <ul>
	            <li><a href="#" >Accueil</a></li>
                <li><a href="#" >Aide</a></li>

         <?php
            if (!isset($_SESSION['id'])){ // useur non authentifié:
                    echo "<li><a href=\"login_form.php\">S'identifier</a></li>" ;
            }else{
                    echo "<li><p> bonjour ".$_SESSION['login']."</p></li>" ;
                    echo "<li> <a role='button' title=\"DÃ©connection.\" href=\"login_deconnect.php\" >Deconnection</a></li>" ;
            } 
            ?>
            </ul>

		</div>    
</nav>


