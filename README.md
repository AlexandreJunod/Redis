# Redis

## Installation du projet

Il faut tout dabord se trouver sous Windows 10, la compability n'a pas été testée sur Windows 7.

**Attention php 7.1.3 ou supérieur est nécessaire pour que laravel fonctionne, installer une version récente de wamp est nécessaire afin d'obtenir une version supérieur à php 7.1.3**

- Installer [redis](https://github.com/MSOpenTech/redis/releases/download/win-3.2.100/Redis-x64-3.2.100.msi) 

- Installer [composer](https://getcomposer.org/)

- Cloner le projet

  `git clone https://github.com/AlexandreJunod/Redis.git`

- Se rendre dans le répertoire cloné en ligne de commandes

  `cd RedisApp`

- Installer les dépendances

  `composer install`

- Générer la clef 

  `php artisan key:generate`

- Générer la base de donnée Redis

  `php artisan db:seed`

- Démarrer le serveur

  `php artisan serve`

L'installation est terminée, votre application est herbergée a [cette adresse](http://localhost:8000)



## Install dev env
### Windows 
To install redis go to the  microsoft archive github repository: https://github.com/MicrosoftArchive/redis/releases

Download the last .msi installer and install it.

At the end, you should have a redis process running in background.


### VMWare 
#### Install redis-server and run it
`apt-get install redis-server`

`systemctl enable redis-server.service`



## Erreures connues sous VM

### Classe redis/client

- Supprimer les fichiers sur la VM et les réupload avec une connexion en ftp/sftp

### Permissions denied

- dans /var/www

  `chmod 777 -R *`

### Impossible d'installer des packages sur la VM

- Mettre en dhcp la VM

`source /etc/network/interfaces`

 `allow-hotplug ens32
 iface ens32 inet dhcp`

- Gérer la distribution de packets

`nano /etc/apt/sources.list`

`deb http://debian.ethz.ch/debian stable main contrib non-free`

- Eteindre la vm

`Shutdown now`

- Mettre la VM en NAT
- Redemarer la VM

