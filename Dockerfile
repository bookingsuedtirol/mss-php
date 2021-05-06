FROM php:8.0-cli

# Fill in the correct values if you experience permission issues.
# Run `id -u` and `id -g` on your system to get them.
ARG USER_ID=1000
ARG GROUP_ID=1000

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN addgroup --gid $GROUP_ID user \
    && adduser --disabled-password --gecos '' --uid $USER_ID --gid $GROUP_ID user \
    && apt-get update \
    && apt-get install -y unzip

USER user

WORKDIR /usr/src
