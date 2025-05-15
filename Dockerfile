FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy ONLY the public/ folder into the web root
COPY public/ /var/www/html/

# Set working directory (optional)
WORKDIR /var/www/html/

EXPOSE 80

