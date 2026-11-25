FROM php:8.2-apache

# Enable Apache rewrite & headers modules
RUN a2enmod rewrite headers

# Copy website files into Apache web root
COPY . /var/www/html/

# Ensure writable data directory for contact form submissions
RUN mkdir -p /var/www/html/data \
    && chown -R www-data:www-data /var/www/html/data \
    && chmod 750 /var/www/html/data

EXPOSE 80
