FROM php:7.4.3-apache

COPY index.php /var/www/html/
COPY flag.php /var/www/html/
COPY Flll4g.php /var/www/html/

ENTRYPOINT ["/bin/bash", "-c", "export A1CTF_FLAG=flag{$(openssl rand -hex 16)} && exec apache2-foreground"]