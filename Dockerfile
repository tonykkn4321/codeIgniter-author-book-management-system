# Use the official PHP image as a base
FROM php:8.0-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql

# Set the working directory
WORKDIR /var/www/html

# Copy the application files
COPY . .

# Set permissions (if needed)
RUN chown -R www-data:www-data /var/www/html

# Expose the port the app runs on
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]