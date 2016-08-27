FROM cheezykins/laravel
MAINTAINER Tarikur Rahaman <sohel2020@gmail.com>
RUN rm -rf /var/www/html/
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html
CMD apache2-foreground