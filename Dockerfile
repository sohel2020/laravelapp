FROM sohel2020/laravel-nginx-base
MAINTAINER sohel2020@gmail.com


# Set up nginx configuration

ADD nginx-config/nginx-default-server.conf /etc/nginx/sites-available/default
ADD nginx-config/domain.crt /etc/nginx/conf.d/
ADD nginx-config/domain.key /etc/nginx/conf.d/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# COPY code

ADD . /var/www/
RUN chown -R www-data.www-data /var/www/*

# Set up cron
ADD nginx-config/crontab /var/spool/cron/crontabs/www-data
RUN chown www-data.crontab /var/spool/cron/crontabs/www-data
RUN chmod 0600 /var/spool/cron/crontabs/www-data

WORKDIR /var/www/
RUN composer install

EXPOSE 80
EXPOSE 443

ENTRYPOINT ["/root/docker-entrypoint.sh"]
