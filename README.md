Rendu :
--------

Rendu prévu pour le **Mercredi 24/05/2017 à 23h59** au plus tard sur l'adresse mail : **moshi@moshi.fr**
sous la forme d'un zip avec les fichiers / répertoires :
- app/*
- src/*
- web/* (sans /web/upload)


Enoncé :
---------

LE TP à rendre un site de catalogue de basket.

Il vous est mis à disposition sur github (https://github.com/moshifr/sf_tp3) le backoffice d'une gestion de produits par catégories, vous pouvez bien entendu reprendre votre dev fait pendant les TD/TP.

Télécharger ou fork le projet et lire le README .md pour lancer le projet.

Il vous est demandé de réaliser le frontoffice en utilisant un thème bootstrap au choix (le design ne sera pas noté) avec comme fonctionnalité :

- Une page d'accueil avec un carousel des 6 derniers produits
- Un menu avec les différents catégorie
- Une page de catégorie avec listing des produits (avec ou sans pagination)
- Une page de recherche
- Une page de détail des produits avec photos en grand et texte de détail
- Une page de login (un Bundle externe peut être utilisé)
- L'utilisateur loggé a accès à un bouton commande (non fonctionnel) sur les pages où apparaissent les produits.
- La connexion utilisateur pourra se faire sans inscription via le fichier de config avec in_memory

- A chaque affichage de produit il est demandé d'affiche l'image correspondante (page listing, recherche et détail)

Points bonus :
--------

- Réaliser un compteur de visite par produits visible depuis le backoffice (un champ nb_visite dans l'entité Produit suffira)
- Inscription utilisateur
- Pagination
- Possibilité de mettre plusieurs images par produit


*PS : On n'a pas eu beaucoup de cours ensemble, j'en suis désolé mais j'espère que j'ai pas été trop flou dans mes explications.*

Bon courage et bonne continuation :).

Lancement après récupération Git
--------


- Renommer le fichier app/config/parameters.yml.dist en parameters.yml (penser à créer la base de données correspondante si elle n'existe pas)
- récupérer composer.phar : https://getcomposer.org/download/
- `./composer.phar update`
- `php bin/console doctrine:schema:update --force`
- `php bin/console doctrine:fixtures:load`
