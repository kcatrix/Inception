# Utiliser l'image Alpine Linux
FROM alpine:latest

# Mettre à jour les paquets et installer les dépendances
RUN apk update && \
    apk add php-fpm php-mysqli php-json php-opcache php-gd && \
	apk add wget tar


# Télécharger et installer WordPress
# RUN wget https://wordpress.org/latest.tar.gz && \
#     tar -xzvf latest.tar.gz && \
#     rm latest.tar.gz && \
#     chmod 777 wordpress && \
#     mv wordpress /var/www/html


# # Configurer PHP-FPM
# RUN sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/php/php.ini

# # Exposer le port 9000
# EXPOSE 9000

# # Lancer PHP-FPM au démarrage du container
# CMD ["php-fpm"]

CMD ["sh", "-c", "while true; do echo hello; sleep 1; done", "&&", "tail", "-f", "/dev/null"]
