**Edit a file, create a new file, and clone from Bitbucket in under 2 minutes**

When you're done, you can delete the content in this README and update the file with details for others getting started with your repository.

*We recommend that you open this README in another tab as you perform the tasks below. You can [watch our video](https://youtu.be/0ocf7u76WSo) for a full demo of all the steps in this tutorial. Open the video in a new tab to avoid leaving Bitbucket.*

## Installation

#### Install on a VM

Install et configure vagrant [(+)](http://sourabhbajaj.com/mac-setup/Vagrant/README.html) :
```bash
brew cask install virtualbox
brew cask install vagrant
brew cask install vagrant-manager
vagrant box add laravel/homestead
```

```bash
brew install composer
composer self-update # composer self-update --rollback
composer require laravel/homestead --dev
php vendor/bin/homestead make # Sur windows vendor\\bin\\homestead make
```

```bash
composer global require laravel/installer
export PATH="$HOME/.config/composer/vendor/bin:$PATH"
laravel new laravel
```

Éditez *Homestead.yaml* pour correspondre à votre répertoire de travail

Ajoutezla ligne suivante au fichier */etc/hosts*
```
192.168.10.10  homestead.guide-llmqfq
```
ou
```
127.0.0.1  homestead.guide-llmqfq
```

### Install Dependencies

run `composer install`

### Environment config

Rename .env.example in .env and add your  `composer install`

### Démarrer la VM (optionnel)
Run
```bash
cd ~/[PROJECTS_DIRECTORY_ROOT]/Homestead
vagrant up
```

### Démarer l'app

```
npm run watch
php artisan serve
```

open http://127.0.0.1:8000

## TROUBLE shooting

Illuminate\Http\Client\ConnectionException
cURL error 6: Could not resolve: dge (Domain name not found) (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)
Il faut probablement setter DIRECTUS_API_TOKEN et DIRECTUS_API_BASE_URL dans .env

## Modifications sur serveur OVH

PHP 7.0.33-0ubuntu0.16.04.12 (cli) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with the ionCube PHP Loader (enabled) + Intrusion Protection from ioncube24.com (unconfigured) v10.0.3, Copyright (c) 2002-2017, by ionCube Ltd.
    with Zend OPcache v7.0.33-0ubuntu0.16.04.12, Copyright (c) 1999-2017, by Zend Technologies

ln -s /opt/plesk/php/7.3/bin/php /etc/alternatives/php

PHP 7.3.18 (cli) (built: May 14 2020 17:55:42) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.18, Copyright (c) 1998-2018 Zend Technologies
    with the ionCube PHP Loader (enabled) + Intrusion Protection from ioncube24.com (unconfigured) v10.3.2, Copyright (c) 2002-2018, by ionCube Ltd.
    with Zend OPcache v7.3.18, Copyright (c) 1999-2018, by Zend Technologies

composer self-update # composer self-update --rollback

# deployement steps
Ces étapes sont utilisées pour builder le projet lors du déploiement sur le server.

```
composer update
npm install
npm run prod
php artisan config:clear
php artisan cache:clear
php artisan view:clear
# php artisan config:cache
```
