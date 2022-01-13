FROM php:8.0-cli

WORKDIR /opt/

RUN apt-get -y dist-upgrade && apt-get autoremove && apt-get autoclean \
 && apt-get update \
 && apt-get install -y git zip unzip \
 && curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer \
 && chmod +x /usr/local/bin/composer

# Install application
ADD . /opt/
RUN composer install
