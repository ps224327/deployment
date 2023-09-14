# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Set the working directory to /app
WORKDIR /app

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions
RUN docker-php-ext-install zip pdo pdo_mysql

# Copy composer.lock and composer.json to install dependencies
COPY composer.lock composer.json /app/

# Install PHP dependencies using Composer
RUN composer install

# Copy the rest of the application code
COPY . /app/

# Expose port 8000 and start PHP-FPM
EXPOSE 8000
CMD ["php-fpm"]
