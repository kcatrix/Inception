# Utiliser l'image Alpine Linux
FROM alpine:latest

# Mettre à jour les paquets et installer NGINX
RUN apk update && \
    apk add nginx

# Configurer NGINX pour utiliser TLSv1.2 ou TLSv1.3 uniquement
RUN sed -i 's/ssl_protocols.*/ssl_protocols  TLSv1.2 TLSv1.3;/' /etc/nginx/nginx.conf

# Exposer le port 80 et 443
EXPOSE 80 443

# Lancer NGINX au démarrage du container
CMD ["nginx", "-g", "daemon off;"]

#CMD ["sh", "-c", "while true; do echo hello; sleep 1; done", "&&", "tail", "-f", "/dev/null"]