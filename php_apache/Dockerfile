FROM php:apache
ENV REFRESHED_AT 2017-06-11

RUN apt-get update && apt-get install -y \
            libcurl4-openssl-dev \
            libmcrypt-dev \
    && docker-php-ext-install -j$(nproc) mcrypt mysqli pdo \
    && rm -rf /var/lib/apt/lists/*
