<?php

$login = filter_input(INPUT_POST, 'login', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$password = password_hash($password , PASSWORD_DEFAULT);
$mail = filter_input(INPUT_POST, 'mail', FILTER_UNSAFE_RAW);

if (empty($login) OR empty($password) OR empty($mail)) {
    header('Location: login_erreur.php');
    exit;
    
    
}else{
    require 'connexionbase.php';
    // on verifie que l'user n'existe pas dיja
    $query = "SELECT login FROM user WHERE login='$login'";
    $sth = $dbh->prepare($query);
    $sth->execute();
    if ($sth->rowCount() == 0){
    // on crיי l'user
      $query =  "INSERT INTO projet_assr_php.user (`id_user`, `login`, `mail`, `password`) 
                VALUES (NULL,'$login' ,'$mail' ,'$password')";    
      $sth = $dbh->prepare($query);
      $sth->execute();
      header('Location: ../Main.php');
    }else{
      header('Location: login_erreur.php');
    }
}

 	
?>