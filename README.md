# Redis

## Installation du projet

Une version windows est requise pour faire fonctionner l'application

**Attention php 7.1.3 ou supérieur est nécessaire pour que laravel fonctionne. Il est possible d'installer une version récente de wamp afin d'obtenir une version supérieur à php 7.1.3**

- Installer [redis (.msi)](https://github.com/MSOpenTech/redis/releases/download/win-3.2.100/Redis-x64-3.2.100.msi) 

  `A noter que le setup ci-dessus va installer un service windows pour Redis. La base de données (le logiciel Redis) sera alors opérationnel dès la fin de l'installation`

- Installer [composer](https://getcomposer.org/)

- Cloner le projet

  `git clone https://github.com/AlexandreJunod/Redis.git`

- Se rendre dans le répertoire cloné en ligne de commandes

  `cd RedisApp`

- Installer les dépendances

  `composer install`
  
- Renomer .env.example en .env

  `mv .env.example .env`

- Générer la clef 

  `php artisan key:generate`

- Générer la base de donnée Redis

  `php artisan db:seed`

- Démarrer le serveur

  `php artisan serve`

L'installation est terminée, votre application est herbergée a [cette adresse](http://localhost:8000)


