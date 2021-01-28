FROM php:7.4-cli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y \
    unzip

WORKDIR /usr/src