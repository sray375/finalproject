FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the app folder
COPY app/ /var/www/html/app/

# Copy the public folder (this contains index.php)
COPY public/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80


