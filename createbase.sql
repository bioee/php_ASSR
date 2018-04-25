CREATE DATABASE projet_assr_php;

CREATE TABLE projet_assr_php.user
(
	    id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	    login varchar(255),
	    mail varchar(255),
	    mot_de_passe varchar(255),
	    date_authent DATE,
	    admin BOOLEAN    
)
