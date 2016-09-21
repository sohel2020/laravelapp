FROM sohel2020/laravel-nginx-base
MAINTAINER sohel2020@gmail.com


# Set up nginx configuration

ADD docker-configuration/nginx-default-server.conf /etc/nginx/sites-available/default
ADD docker-configuration/example.com.crt /etc/nginx/conf.d/
ADD docker-configuration/example.com.key /etc/nginx/conf.d/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# COPY code

ADD . /var/www/
RUN chown -R www-data.www-data /var/www/*

# Set up cron
ADD docker-configuration/crontab /var/spool/cron/crontabs/www-data
RUN chown www-data.crontab /var/spool/cron/crontabs/www-data
RUN chmod 0600 /var/spool/cron/crontabs/www-data

WORKDIR /var/www/
RUN composer install

EXPOSE 80
EXPOSE 443

ENTRYPOINT ["/root/docker-entrypoint.sh"]
