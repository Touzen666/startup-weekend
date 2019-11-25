FROM php:7.2-apache
COPY frontend /var/www/html
COPY v1 /var/www/html/v1

RUN chmod -R ugo+rw /var/www/html
