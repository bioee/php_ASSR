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

On n'utilise pas les fichiers systèmes, on génère directement nos propres logs à partir des formulaires de connexion par exemple
