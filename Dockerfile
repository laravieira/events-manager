FROM serversideup/php:8.2-fpm-nginx-v2.2.1 as base
WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --no-plugins --no-scripts --prefer-dist

FROM node:20 as static-assets
WORKDIR /app
COPY . .
COPY --from=base --chown=9999:9999 /var/www/html .
RUN npm install
RUN npm run build

FROM serversideup/php:8.2-fpm-nginx-v2.2.1

WORKDIR /var/www/html

RUN apt-get update

COPY --from=base --chown=9999:9999 /var/www/html .

COPY --chown=9999:9999 . .
RUN composer dump-autoload

COPY --from=static-assets --chown=9999:9999 /app/public/build ./public/build
COPY --chmod=755 docker/prod/etc/s6-overlay/ /etc/s6-overlay/

RUN php artisan route:cache
RUN php artisan view:cache

RUN echo "alias ll='ls -al'" >>/etc/bash.bashrc
RUN echo "alias a='php artisan'" >>/etc/bash.bashrc
RUN echo "alias logs='tail -f storage/logs/laravel.log'" >>/etc/bash.bashrc

RUN mkdir -p /usr/local/bin

RUN { \
    echo 'upload_max_filesize=256M'; \
    echo 'post_max_size=256M'; \
  } > /etc/php/current_version/cli/conf.d/upload-limits.ini