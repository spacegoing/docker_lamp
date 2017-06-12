### Configure Files ###

- `Dockerfile`: extensions installation
  - mysqli
  - pdo
  - pdo_mysql
  - mcrypt
- `vhost/www.conf`: virtual host
- `http.conf`: configure virtual host
- `my_php.ini`: configure chinese timezone
- `log`: log file persistency

#### Mounted in docker-compose.yml ####

- php configure file path: `/usr/local/etc/php/conf.d/`
- apache conf file path: `/etc/apache2/`
- apache vhost conf path: `/etc/apache2/sites-enabled/`
- apache website path: `/var/www/html/`









