<?php

// vérification des parametres login/motdepasse 
$login = filter_input(INPUT_POST, 'login', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

if (empty($login) || empty($password)) {
    // pas de parametres login/password => retour au formulaire
    header('Location: form.php');
    exit;
} else {
// connexion à la base de données
    require 'connexionbase.php';


//$query = "SELECT * FROM `connexionbase`.`membre_utilisteur` ,`connexionbase`.`membre_utilisteur`  WHERE mail = :mail AND motdepasse = :motdepasse";
    $query =   "SELECT id_user,login,mail,password,date_authent,admin
                FROM user
                WHERE login='$login' AND password='$password'";
    
    $sth = $dbh->prepare($query);
    $sth->execute();

    if ($sth->rowCount() != 0) {
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['date_authent'] = $row['date_authent'];
        $_SESSION['admin'] = $row['admin'];
        
        // OK => accès au contenu
        header('Location: Main.php');
        exit;
    } else {
        // KO => page d'erreur

        header('Location: login_erreur.php');
        exit;
    }
}