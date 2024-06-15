FROM serversideup/php:8.3-fpm-apache as base
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --no-plugins --no-scripts --prefer-dist

FROM node:20 as static-assets
WORKDIR /app
COPY . .
COPY --from=base /var/www/html .
RUN npm install
RUN npm run build

FROM serversideup/php:8.3-fpm-apache
USER www-data:www-data
WORKDIR /var/www/html
COPY --from=base --chown=www-data:www-data /var/www/html .
COPY --from=static-assets --chown=www-data:www-data /app/public/build ./public/build
COPY --chown=www-data:www-data . .

RUN composer dump-autoload
RUN php artisan route:cache
RUN php artisan view:cache

#RUN echo "alias ll='ls -al'" >>/etc/bash.bashrc
#RUN echo "alias a='php artisan'" >>/etc/bash.bashrc
#RUN echo "alias logs='tail -f storage/logs/laravel.log'" >>/etc/bash.bashrc

RUN mkdir -p /usr/local/bin

#RUN { \
#    echo 'upload_max_filesize=256M'; \
#    echo 'post_max_size=256M'; \
#  } > /etc/php/current_version/cli/conf.d/upload-limits.ini
RUN chown -R www-data:www-data /var/www/html