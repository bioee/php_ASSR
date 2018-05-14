<?php
$sql_server = "127.0.0.1";
            $sql_database = "projet_assr_php";
            $sql_login = "user_assr_php";
	    $sql_password = "mdpASSR";
	    $dbh = new PDO('mysql:host=' . $sql_server . ';dbname=' . $sql_database . ';charset=utf8', $sql_login, $sql_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
