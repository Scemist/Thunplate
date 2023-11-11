FROM php:8.2-fpm-alpine3.18

COPY . /app
WORKDIR /app

RUN apk add \
	composer \
	npm \
	libpq-dev

RUN apk add \
	php-tokenizer \
	php-xml \
	php-pdo \
	php-pdo_pgsql \
	php-dom \
	php-xmlwriter \
	php-curl \
	php-openssl \
	php-mbstring \
	php-gd \
	php-fileinfo

# PHP Postgres PDO
RUN docker-php-ext-install pdo_pgsql

RUN chmod -R 755 /app && \
	chmod -R ugo+rwx /app/storage && \
	chmod -R ugo+rwx /app/bootstrap/cache

RUN npm install --omit=dev \
	&& composer install --no-dev -o

# Initing project basic settings
RUN npm run build	\
	&& cp .env.prod .env \
	&& php artisan key:generate

RUN php artisan config:cache \
	&& php artisan route:cache \
	&& php artisan optimize