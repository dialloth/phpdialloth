  Bienvenue sur le Blog DevWeb de Diallo Thierno & Kenza  Hadj Said !

#Description du projet : http://localhost/blog3old/public/login 

DevWeb est un mini-site réalisé dans le cadre d’une formation sur le Framework LARAVEL. L’objectif, c'est de nous faire découvrir cette technologie à travers un projet concret afin que chaque participant puisse savoir y coder une application basique. Nous, notre projet est composé d’une page d’accueil, d’une page articles et d’une page contact. Ces rubriques sont rendues dynamiques grâce à une base de données (PHPLITE) et au principe d’authentification. Pour avoir accès à l’ensemble au site, l’utilisateur (user) doit préalablement créer son compte et ou s’identifier. 

#Guide d’installation Laravel: https://laravel.com/docs/5.8)

- Le début d’un projet Laravel commence par l’Installation du Composer pour la gestion des dépendances : https ://getcomposer.org.
 - **Une fois cela est fait, il existe alors deux manières de créer son projet sur Laravel :**
- Via Laravel Installer. Sur le terminal de votre repertoire, taper : composer global require laravel/installer ou
- Via Composer Create-Project avec la commande : composer create-projet – prefer-dist laravel/laravel blog.

  #Activer le serveur local
- Toujours sur le terminal de votre projet, exécuter la commande : php artisan serve. L’URL généré http://localhost:8000 vous permettra ensuite d’afficher votre site sur le navigateur web.

#Quelques fichiers à créer et à configurer lors de chaque étape d'une implémentation. Ces actions sont requises pour faire fonctionner le site ou pour y appliquer des modifications:

- routes[routes/web.php]
- controller[app/http/controller/...]
- modèles[app/modèles/..]
- vues[ressources/views/welcome.blade.php]

#IMPLEMENTATION & FONCTIONNALITES:
Afin de personnaliser et dynamiser le blog, nous avons réalisé quelques implémentations:

- Création d’une base de données phpLiteAdmin à l’aide des migrations de Laravel :
https://laravel.com/docs/5.7/migrations pour créer puis configurer les tables de notre base de données : articles(post), contacts et  utilisateurs. Exemple de commande à exécuter sur le terminal : php artisan migrate et php artisan make:migration create_contact_table –create=contact.

- Création des fichiers Seeding pour insérer des données fictives dans la BD afin de tester sa connexion avec le blog:
  https://laravel.com/docs/4.2/migrations.

- Commandes à exécuter sur le terminal de votre projet :
        php artisan make:seeder UsersTableSeeder par exemple pour la table des utilisateurs
        php artisan migrate
- Création et ajout d’un formulaire de contact ;
- Création puis configuration des fichiers DatatbaseSeeder.php et PostFactory.php.

#Création et gestion des commentaires :
- Création de la migration pour les tables de commentaires :
  Php artisan make:migration create_comments_table.
- Ajout d’un formulaire et d’un modèle (comment.php) pour permettre à l’utilisateur de poster un commentaire sur l’article de son choix.

#Identification :
- Ajout d’un système d’authentification pour limiter l’accès au blog aux personnes identifiées à travers un compte. https://laravel.com/docs/5.8/authentication.
- Commande à exécuter sur le terminal du projet : php artisan make:auth  
- Configuration des fichiers «auth» et fonctions « Middleware» dans les pages du site.

- **Des tests à faire : Que pouvez-vous tester sur notre blog ?***

      1- L’authentification et oubli de mot de passe :
- Création d’un compte de connexion pour accéder au site.
- Génération d'un nouveau lien de modification du nouveau de passe. Le lien est disponible dans storage/logs.

      2- L’accès au contenu complet d'un article: 
Chaque titre d’un article constitue un lien qui renvoie sur le contenu complet de l’article. Vous pouvez donc cliquer sur les titres des articles pour être rédirigé sur la page single de chaque article.

      3- Possibilité de laisser des commentaires sur chaque article
Le clic sur le titre d’un article vous renvoie sur la page complète de l’article. Et donc en bas de chaque article, vous avez la possibilité de laisser un commentaire. Un formulaire est dédié à cet effet.**

      4- La page contact:
Une page contact permet à l'utilisateur du site de nous soumettre un message. Et une fois le message soumis, vous pouvez alors voir s’afficher la liste de toutes les personnes qui nous ont déjà écrit. ***

- **Mise à jour automatique de la BD : **
A rappeler que chacune des actions d’un utilisateur constitue un enregistrement de plus dans la base de données. Par exemple, si quelqu’un nous soumet un message à travers le formulaire de contact, son nom, son adresse email et son message sont automatiquement stockés sur la base de données du blog. Pareil pour les commentaires, la génération d'un nouveau mot de passe ou la création d'un compte de connexion par un nouvel utilisateur(user).

- ** Des difficultés rencontrées ?** :
Un projet ne devient excitant que s'il vous permet de vous confronter à des nouvelles réalités. Donc, lors de la réalisation de ce blog, nous avons rencontré quelques dificultés techniques comme tout débutant. Mais, l'avantage, c'est que ces difficultés nous ont aussi permis de nous dépasser en allant chercher des solutions ailleurs. Alors, peut-être nous n'avons pas pu parfaitement tout bien faire, néanmoins, ce projet nous a donné les bases solides et nécessaires pour faire des belles choses dans l'avenir sur le Framework Laravel.
