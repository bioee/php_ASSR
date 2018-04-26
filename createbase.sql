CREATE DATABASE projet_assr_php;
CREATE TABLE projet_assr_php.user
    (
    id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login varchar(255),
    mail varchar(255),
    password varchar(255),
    date_authent TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    admin BOOLEAN DEFAULT 0
    );

CREATE USER ''user_assr_php'@'localhost' IDENTIFIED BY 'mdpASSR';
GRANT ALL PRIVILEGES ON projet_assr_php.user TO ''user_assr_php'@'localhost';
