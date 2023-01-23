# Utiliser l'image Alpine Linux
FROM alpine:latest

# Mettre à jour les paquets et installer MariaDB
RUN apk update && \
    apk add mariadb mariadb-client

# Créer un dossier pour les données de MariaDB
RUN mkdir /data

# Exposer le port 3306
EXPOSE 3306

# définir les variables d'environnement pour la configuration de la base de données
ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_DATABASE=wordpress
ENV MYSQL_USER=wordpress
ENV MYSQL_PASSWORD=password

# Lancer MariaDB au démarrage du container
CMD ["mysqld", "--datadir=/data"]
