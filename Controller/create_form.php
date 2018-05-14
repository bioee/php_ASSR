<!DOCTYPE html>
<center>
    <form action="create_verify.php" method="post">
		<fieldset>
			<legend>Veuillez saisir les informations du nouvel utilisateur</legend>
			<label>Votre login : <input type="text" name="login"></label><br>
			<label>Votre mot de passe : <input type="password" name="password"></label><br>
      <label>Votre email : <input type="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemple@gmail.com"></label><br>
			<input type="submit" value="Connexion">
		</fieldset>
	</form>
</center>
