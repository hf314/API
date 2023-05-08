FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update -y && apt-get install -y \
    git \
    curl \
    supervisor \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    npm \
    cron \
    nano

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configure cron
RUN crontab -l | { cat; echo "* * * * * su -c '/usr/local/bin/php /var/www/artisan schedule:run >> /var/log/schedule.log 2>&1'"; } | crontab -

# Configure supervisor
ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf

ADD start-container.sh /usr/bin/start-container
RUN chmod +x /usr/bin/start-container
ENTRYPOINT ["start-container"]

# Set working directory
WORKDIR /var/www
