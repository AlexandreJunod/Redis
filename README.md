# Redis

# Mise en place de l'environement de travail - Création

Il existe deux procédure, celle qui correspond à la :

- Création
- Copie  

### A améliorer mais important  (mieux décrire) : 

- Mettre composer à jour

### Créer un nouveau projet laravel (ou importer)

``new laravel NOM_DU_PROJET`` 

### Ajouter les librairies predis ou redis

``composer require predis/predis``

### Céer une VM sur debian 9.3 ou + (stable)

- ** A expliquer les différentes étapes importantes**

### Installer redis-server sur la vm et lancer le service

- `apt-get install redis-server`
- `systemctl enable redis-server.service`

### Exporter les données sur la VM

- Exporter les données par ftp/sftp

- Gérer les permissions sur le serveur (/var/www)

  `chmod 777 -R *`

# Mise en place de l'environement de travail - Copie

### Reprendre les fichiers 

- Copier le git

### Installer les dépendances 

`composer install`

### Configuration

- Copier le fichier .env.exemple et le renommer en .env

- Générer la clef 

  `php asrtisan key:generate` 

### Installer redis-server sur la vm et lancer le service

- `apt-get install redis-server`
- `systemctl enable redis-server.service`

### Exporter les données sur la VM

- Exporter les données par ftp/sftp

- Gérer les permissions sur le serveur (/var/www)

  `chmod 777 -R *`

## Erreures connues 

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

