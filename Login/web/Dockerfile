FROM ubuntu:24.04

# Install Apache, MariaDB client, PHP, and required PHP modules
RUN apt-get update && \
    apt-get install -y apache2 mariadb-client php libapache2-mod-php php-mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Enable the PHP module
RUN a2enmod php8.3

# Copy the project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 and start Apache service
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
