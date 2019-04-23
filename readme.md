  Bienvenue sur le Blog DevWeb de Diallo Thierno & Kenza  Hadj Said !

#Description du projet : http://localhost/blog3old/public/login 

DevWeb est un mini-site réalisé dans le cadre d’une formation sur le Framework LARAVEL. L’objectif, c'est de nous faire découvrir cette technologie à travers un projet concret afin que chaque participant puisse savoir y coder une application basique. Nous, notre projet est composé d’une page d’accueil, d’une page articles et d’une page contact. Ces rubriques sont dynamiques grâce à une base de données (PHPLITE) et au principe d’authentification. Pour avoir accès à l’ensemble au site, l’utilisateur ou visiteur doit préalablement créer son compte et ou s’identifier. 

#Guide d’installation Laravel: https://laravel.com/docs/5.8)

- Le début d’un projet Laravel débute par l’Installation du Composer pour la gestion des dépendances : https ://getcomposer.org.
 - **Avec Laravel, il existe deux manières de le faire :**
- Via Laravel Installer. Sur le terminal de votre repertoire, taper : composer global require laravel/installer ou
- Via Composer Create-Project: sur votre terminal taper : composer create-projet – prefer-dist laravel/laravel blog.

    #Activer le serveur local
- Sur le terminal de votre projet, exécuter la commande : php artisan serve. L’URL généré http://localhost:8000 vous permettra ensuite d’afficher votre site sur le navigateur web.

#Quelques fichiers à créer et à modifier lors de chaque implémentation. Ces modifications ci-dessous sont requises pour faire fonctionner le site :

- routes[routes/web.php]
- controller[app/http/controller/...]
- modèles[app/modèles/..]
- vues[ressources/views/ welcome.blade.php]

#IMPLEMENTATION & FONCTIONNALITES:

Afin de personnaliser et dynamiser le blog, nous avons réalisé quelques implémentations:

- Création d’une base de données phpLiteAdmin à l’aide des migrations de Laravel :
 https://laravel.com/docs/5.7/migrations pour créer puis configurer les tables de notre base de données : articles(post),  contacts et  utilisateurs. 
Exemple de commande sur le terminal : php artisan migrate & php artisan make:migration create_contact_table –create=contact.

- Création des fichiers Seeding pour insérer des données fictives dans la BD afin de tester sa connexion avec le blog:
  https://laravel.com/docs/4.2/migrations 

- Commandes à exécuter sur le terminal de votre projet :
        php artisan make:seeder UsersTableSeeder par exemple pour la table des utilisateurs
        php artisan migrate
- Création et ajout d’un formulaire de contact ;
- Création puis configuration des fichiers DatatbaseSeeder.php et PostFactory.php

#Création et gestion des commentaires :
- Création de la migration pour les tables de commentaires :
   Php artisan make:migration create_comments_table
- Ajout d’un formulaire et d’un modèle (comment.php) pour permettre à l’utilisateur de poster un commentaire sur l’article de son choix.

#Identification
- Ajout d’un système d’authentification pour limiter l’accès au blog aux personnes identifiées à travers un compte. https://laravel.com/docs/5.8/authentication 
- Commande à exécuter sur le terminal du projet : php artisan make:auth  
- Configuration des fichiers «auth» et fonctions « Middleware» dans les pages du site.

- **Des tests à faire : Que pouvez-vous tester sur notre blog ?***

      1- L’authentification et oubli des mot de passe :
- Création d’un compte de connexion pour accéder au site.
- Génération d'un nouveau lien de modification du nouveau de passe. Le lien est disponible dans storage/logs

      2- L’accès au contenu des articles:
Chaque titre d’un article constitue un lien qui renvoie sur le contenu complet de l’article. Vous pouvez donc cliquer sur les titres des articles pour être rédirigé sur la page single de l'article.

      3- Possibilité de laisser des commentaires sur chaque article
Le clic sur le titre d’un article vous renvoie sur la page complète de l’article. Et donc en bas de chaque article, vous avez la possibilité de laisser un commentaire**

      4- La page contact:
Une page contact permet à l'utulisateur du site de nous soumettre un message. Et une fois le message soumis, vous pouvez voir s’afficher la liste de toutes les personnes qui nous ont déjà écrit. ***

- **Conclusion**
A rappeler que chacune des actions d’un utilisateur constitue un enregistrement de plus dans la base de données. Par exemple, si quelqu’un nous soumet un message à travers le formulaire de contact, son nom, adresse mail et son message sont automatiquement stockés sur la base de données du blog.
