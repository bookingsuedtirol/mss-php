FROM php:8.0-cli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y \
    unzip

WORKDIR /usr/src
