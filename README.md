# Portail Interactif Famille-Résident - Teranga

Ce projet est un portail interactif destiné à améliorer la communication entre les résidents des EHPAD et leurs familles. Il permet aux familles de suivre les activités de leurs proches au sein de l'établissement, d'accéder à des photos et de rester informées des événements marquants de leur vie quotidienne.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé Docker sur votre machine. Si Docker n'est pas installé, vous pouvez le télécharger et suivre les instructions d'installation sur [le site officiel de Docker](https://www.docker.com/).

## Installation et configuration

1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone https://github.com/BlueWebCoder/Teranga-test.git
   cd Teranga-test/feature


2. Assurez-vous que le fichier `init.sql` est présent à la racine du projet pour l'initialisation de la base de données.

## Construire les conteneurs Docker et démarrer le projet

Pour créer et lancer les conteneurs pour l'application PHP, la base de données MySQL, et phpMyAdmin, exécutez la commande suivante :

```bash
docker-compose up -d --build
```

## Accéder à l'application web

Application accessible via [http://localhost:8080](http://localhost:8080)

## Structure du projet

- **/config** : Contient le fichier de configuration de la base de données.
- **/entity** : Définit les entités du projet (par exemple, `Event`).
- **/repository** : Contient les classes de gestion des données (repositories).
- **/service** : Fournit les services utilisés par le projet.
- **/views** : Contient les fichiers de présentation (templates HTML).


