FROM php:8.2-cli
WORKDIR /app
COPY . .
RUN apt-get update
RUN apt-get install -y curl unzip git
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer global require laravel/installer
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
