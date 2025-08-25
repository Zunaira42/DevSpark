# Use official PHP 8.3 base image
FROM php:8.3-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
 && docker-php-ext-install zip pdo_pgsql \
 && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy dependency files and install PHP packages
COPY composer.json composer.lock* ./
RUN composer install --no-dev --no-interaction --prefer-dist --no-progress --no-scripts

# Copy the rest of the application code
COPY . .

# Ensure storage and cache directories are writable
RUN mkdir -p storage/framework/{cache,views,sessions} \
 && chmod -R ug+rwx storage bootstrap/cache

# Set environment variables
ENV APP_ENV=production \
    APP_DEBUG=false

# Expose port 8000
EXPOSE 8000

# Run database migrations (if configured) and start Laravel
CMD php artisan migrate --force || true && \
    php artisan serve --host 0.0.0.0 --port ${PORT:-8000}
