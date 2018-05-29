# php_ASSR
Site rapide en php

## phpmyadmin 
* apt-get install phpmyadmin 
* aller sur 127.0.0.1/phpmyadmin
* entrer login : root 
* mdp : mdpcreerdurantlinstallationdephpmyadmin

## createbase.sql
Aller dans phpmyadmin > import > parcourir , prendre le fichier Modele/createbase.sql > go

Normalement une base nommée projet_assr_php contenant la table user est créée

Vous pouvez tester connexiontest.php après avoir ajouter une colonne dans la table user

## Objectif du bilan de ce projet
Il faut montrer notre travail de groupe, en montrant les difficultés qu'on a pu rencontrer et comment on les a remédié ( git / discord ) 

Le code doit être fonctionnel et surtout sécurisé (suite au cour sur la sécurité php) 

Enfin expliquer ce qui est vulnérable et pourquoi si c'est le cas, faire une démonstration de scanner de site web peut être intéréssant (même si ce n'est pas le sujet de ce projet).

## administration des logs

On n'utilise pas les fichiers systèmes, on génère directement nos propres logs à partir des formulaires de connexion par exemple. Ce n'est pas encore présent

## Configuration de sécurité 
Liste a effectuer dans le fichier /etc/php/7.2/apache2/php.ini

Limiter les fuites d'informations PHP

Set expose_php=Off in the /etc/php/7.2/apache2/php.ini file

Historiser les erreurs php

display_errors=Off

log_errors=On

error_log=/var/log/httpd/php_scripts_error.log

Minimiser les modules PHP chargeables

cd /etc/php.d/

mv gd.{ini,disable}

/sbin/service httpd restart

mv gd.{disable,ini}

/sbin/service httpd restart

Annuler les Remote Code Execution

allow_url_fopen=Off

allow_url_include=Off

Interdir les requet POST trop supérieur à 1Ko

post_max_size=1K

Amoindrire les attaques DDOS

#configuré en seconds

max_execution_time =

max_input_time = 30

memory_limit = 40M

