# Redis

## Mise en place de l'environement de travail

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

## Erreures connues 

### Classe redis/client

- Supprimer les fichiers sur la VM et les réupload avec une connexion en ftp/sftp

### Permissions denied

- dans /var/www

  `chmod 777 -R *`

