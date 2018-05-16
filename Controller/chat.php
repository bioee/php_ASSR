<?php     
# connexion Ã  la base de donnÃ©es
require 'connexionbase.php';

#ajout des nouveaux messages:
if (isset($_POST['message']) && $_POST['message'] != ""){ 
     $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
     $query =  "INSERT INTO chat (id_msg, user, msg) VALUES (NULL, '".$_SESSION['login']."','".$msg."');" ;
     $sth = $dbh->prepare($query);
     $sth->execute();
}              
    
#recuperatio et affichage des messages:
$query =   "SELECT id_msg, user, msg FROM chat ;" ;              
$sth = $dbh->prepare($query);
$sth->execute();
echo "<div>";
if ($sth->rowCount() > 1) {
    foreach ($sth as $row) {
        echo "<div style=\"color:#0000FF\">";
        echo "<p>USER: ".$row['user']."<br></p>";
        echo "<h3>MESSAGE: ".$row['msg']."<br></h3>";
        echo "</div>";
    }
} elseif ($sth->rowCount() == 1) {
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    echo "<div style=\"color:#0000FF\">";
    echo "USER: ".$row['user']."<br>";
    echo "MESSAGE: ".$result['msg']."<br>";
    echo "</div>";
}
echo "</div>";
?>


  <!-- Formulaire de post -->
  <form action="Main.php" method="post">
  <p>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <input type="submit" value="Envoyer" />
	</p>
</form>