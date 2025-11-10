# Usa una imagen base de PHP con Apache
FROM php:8.3-apache

# Instalar extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql zip

# Instalar Composer (gestor de dependencias de PHP)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar los archivos del proyecto al contenedor
WORKDIR /var/www/html
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Configurar permisos y Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Exponer el puerto que usará Apache
EXPOSE 80

# Comando para iniciar el servidor
CMD ["apache2-foreground"]
