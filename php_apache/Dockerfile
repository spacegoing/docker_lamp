FROM php:apache
ENV REFRESHED_AT 2017-06-11

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libcurl4-openssl-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) curl iconv mcrypt mysqli pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && rm -rf /var/lib/apt/lists/*
