<?php
session_start();
// si l'utilisateur est déjà entré , l'utilisateur est donc deja connecté > redirection
	if (isset($_SESSION['login'])) {
		header("Location: Main.php");
    	}
?>

<!DOCTYPE html>
<center>
    <form action="login_verify.php" method="post">
		<fieldset>
			<legend>Veuillez vous identifier</legend>
			<label>Votre login : <input type="text" name="login"></label><br>
			<label>Votre mot de passe : <input type="password" name="password"></label><br>
			<input type="submit" value="Connexion">
		</fieldset>
	</form>
</center>
