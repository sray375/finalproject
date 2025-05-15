FROM php:8.1-apache

# Enable Apache mod_rewrite (used in most PHP apps)
RUN a2enmod rewrite

# Copy your project files to the Apache web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

