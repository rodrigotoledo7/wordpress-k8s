FROM registry.tjro.jus.br/docker-hub/wordpress:latest

COPY ./wp-content /var/www/html/wp-content
