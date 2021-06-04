# Demo AJAX + PHP

## Intro

La technologie AJAX (Asynchronous Javascript And XML) va vous permettre de faire une requête à un serveur, de recevoir une réponse et de traiter la réponse reçue pour l'afficher dans votre page sans la recharger.

Pour permettre le dialogue entre le client (navigateur) et le serveur (backend) on utilise un format normalisé d'écriture des données qui est JSON (Javascript Object Notation).

## Principe de fonctionnement

1.  On envoie une demande (requête) à un serveur avec javascript. Une requête peut être de type `GET`, `POST`, ou d'autres méthodes encore que vous verrez plus tard
2.  Le serveur reçoit la requête et la traite. Ca peut être une simple lecture à partir d'une base de données, une écriture dans une base de données ou d'autres choses encore
3.  Une fois le traitement effectué, le serveur renvoie une réponse au format JSON
4.  Lorsqu'on reçoit la réponse, on extrait les données et on les traite côté client

## Application à notre projet

On a un formulaire simple avec un input qui va nous permettre d'envoyer le nom d'un utilisateur au serveur.
Le formulaire enverra les données en `POST`, elles n'apparaîtront pas dans l'URL du navigateur

**Il est très important d'envoyer vos données en `POST` si vous transmettez des informations sensibles comme par exemple des mots de passe ou autres infos de ce type**

Le serveur va recevoir la requête, vérifier si les données attendues ont bien été reçues et sont correctes, puis renvoyer le nom de l'utilisateur ou `inconnu` si le champ du formulaire est vide

## Exécuter le script PHP

Rappelez vous que le navigateur ne peut pas nativement interpréter PHP, c'est un langage utilisé uniquement côté serveur.
Pour ça, vous aurez donc besoin d'un... serveur évidemment, mais aussi d'un interpréteur PHP installé sur votre ordinateur.

Pour vérifier si PHP est installé et vérifier sa version, ouvrez un terminal (bash) et tapez :

`php -v`

Si tout est ok le terminal affichera la version et d'autres infos

Pour créer un serveur de développement simple et le démarrer, dans le terminal, allez dans le dossier `backend` et tapez la commande

`php -S localhost:3000`

php => programme utilisé
-S => argument qui permet de lancer le serveur
localhost => votre environnement local (IP 1207.0.0.1)
3000 => numéro du port, vous pouvez le modifier

Le terminal devrait afficher un message de ce type :

`[Fri Jun 4 09:40:42 2021] PHP 8.0.3 Development Server (http://localhost:3000) started`

La date et la version peuvent bien sûr être différentes

A chaque fois que le serveur recevra une requête, il loggera des infos dans le terminal, vous pouvez y jeter un oeil

Une fois que vous avez terminé, `ctrl+c` pour arrêter le serveur
