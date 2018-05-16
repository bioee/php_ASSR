<?php

$login = filter_input(INPUT_POST, 'login', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
// password_hash() permet de hasher le mot de passe, PASSWORD_DEFAULT est le dernier hashage recommandé par la version php utilisé
$password = password_hash($password , PASSWORD_DEFAULT);
$mail = filter_input(INPUT_POST, 'mail', FILTER_UNSAFE_RAW);

if (empty($login) OR empty($password) OR empty($mail)) {
    header('Location: login_erreur.php');
    exit;
}else{
    require 'connexionbase.php';
    $query =  "INSERT INTO projet_assr_php.user (`id_user`, `login`, `mail`, `password`) 
              VALUES (NULL,'$login' ,'$mail' ,'$password')";    
    $sth = $dbh->prepare($query);
    $sth->execute();
}
header('Location: ../Main.php');
 	
?>