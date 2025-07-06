FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

# Add virtual host configuration
RUN echo '\
    <VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    Alias /idk-ambiente-web /var/www/html\n\
    <Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>\n\
    </VirtualHost>' > /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html