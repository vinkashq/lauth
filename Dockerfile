FROM vinkas/laravel

COPY --chown=www-data:www-data . /var/www/html

RUN chmod -R 777 /var/www/html/storage
RUN chmod -R 777 /var/www/html/bootstrap/cache
