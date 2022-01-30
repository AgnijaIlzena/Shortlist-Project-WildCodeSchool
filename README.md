# Project "Shortlist"
Projet développé @Wild Code School

Outils : PHP, Twig, JS, MySQL, Bootstrap, mobile first, MVC, Git.
2022 janvier | 3 semaines | Projet développé @Wild Code School

Sujet : Un site de bande annonce. Développement d’un site web dynamique "Shortlist" qui facilite le choix de film.
Basé sur le jeu, le petit questionnaire donne l’humeur de l’utilisateur qui l’amène jusqu’au genre de film soit : Drame, Comédie, Fantaisie, action en proposant le trailer. Espace pour continuos développement.

* Le projet est réalisé avec un client fictif. Pratiques SCRUM : daily meetings, présentation client à chaque fin de sprint avec mise en situation, rétrospective.
* À partir de la liste des principales fonctionnalités, définition des user stories, wireframes et modélisation de la base de données.
* Implémentation des CRUD dans une architecture MVC (PDO, Twig)
* Une partie de l'application protégée par une authentification.


# Simple MVC

## Description

This repository is based on a simple PHP MVC structure from scratch.

## Steps

1. Clone the repo from Github.
2. Run `composer install`.
3. Create *config/db.php* from *config/db.php.dist* file and add your DB parameters. Don't delete the *.dist* file, it must be kept.
```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PASSWORD', 'your_db_password');
```
4. Import *database.sql* in your SQL server, you can do it manually or use the *migration.php* script which will import a *database.sql* file.
5. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. 
6. Go to `localhost:8000` with your favorite browser.



