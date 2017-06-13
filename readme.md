# My LAMP docker compose #

- Project Name: `hmcompose` (docker-compose.env)
- BaseImages: `php:apache` for PHP and APACHE. `mysql:latest` for
  mysql

## Install & Running ##

- `docker-compose up -d`
- visit `localhost/fs2.com`

## General Config ##

- Exposed Ports: `80:80 3306:3306` (docker-compose.yml)

## PHP Config ##

- Enabled Extensions: `curl iconv mcrypt mysqli pdo pdo_mysql gd` (/php_apache/Dockerfile)

## APACHE Config ##

- Src Dir `.src:/var/www/html/` (docker-compose.yml)
- Config files
  - `fs2.com.conf`: enable fs2.com domain
  - `000-default.conf`: give all permissions under `.../www/html`

## MySQL Config ##

- connection addr: `docker inspect hmdocker_mysql_1` (this can be
  then used in *.php files like mysqli)
- `.data:/var/lib/mysql`
- `basedir = /usr/local/mysql`
- `datadir = /var/lib/mysql`




