# Utiliser une image PHP avec Apache
FROM php:8.2-apache

# Installer les extensions nécessaires pour MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier les fichiers du projet dans le dossier de travail du conteneur
COPY . /var/www/html/

# Donner les permissions appropriées
RUN chown -R www-data:www-data /var/www/html

# Activer le module Apache mod_rewrite
RUN a2enmod rewrite

# Exposer le port 80 pour le serveur web
EXPOSE 80
