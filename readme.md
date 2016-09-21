# Laravel application inside docker container

## What it's contain?

- If you need to change any crontab entry, then navigate **docker-configuration** directory and make change inside crontab file.
- If you need to change SSL certificate, then navigate **docker-configuration** directory and replace old one with your new SSL certificate.
- If you change SSL certificate then you may need to change nginx configuration so find nginx default server configuration file inside **docker-configuration** directory and make changes accordingly.

## How to build docker images?

```bash
#  docker build -t your_image_name .
```

## What'll happen if your run above command?

- Pull **sohel2020/laravel-nginx-base** as base image
- copy nginx and other SSL certificate file
- copy laravel application under **/var/www/**
- set crontab entry
- run compose command to install all dependency

## How we can see the visual output?

After build the images, run it anywhere (In your workstation or server).

HIT https://example.com in your favourite browser (But before that make a host file entry in your workstation e.g: **192.168.1.2 example.com**)

As we're using a self sign certificate, you'll face a browser warning because self sign certificate is not trusted by browser. so trust it manually. 

