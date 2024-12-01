FROM php:7.4-apache

# Install necessary packages and dependencies including vim and wget
RUN apt-get update && apt-get install -y \
        vim \
        wget \
        libmariadb-dev \
        default-mysql-client \
        && docker-php-ext-install mysqli pdo_mysql \
        && docker-php-ext-enable mysqli pdo_mysql \
        && apt-get clean

# Enable Apache rewrite module
RUN a2enmod rewrite

CMD ["echo", "This is Dockerfile"]

# Set the working directory
WORKDIR /var/www/html

CMD ["apache2-foreground"]