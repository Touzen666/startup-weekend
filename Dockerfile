FROM smokserwis/build AS build

RUN git clone https://github.com/Touzen666/startup-weekend.git

FROM php:7.2-apache
COPY --from=build ./startup-weekend/frontend /var/www/html/
COPY v1 /var/www/html/v1

RUN chmod -R ugo+rw /var/www/html
