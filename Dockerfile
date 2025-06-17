FROM docker-hub/wordpress:latest

COPY ./wp-content /var/www/html/wp-content
