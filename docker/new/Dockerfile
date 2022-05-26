FROM php:8.1.6-fpm-alpine

RUN apk update && \
    apk add --no-cache icu-dev oniguruma-dev && \
    docker-php-ext-install intl mbstring

# TimeZone
ARG TZ
RUN set -eux && \
    apk add --no-cache tzdata && \
    cp -r /usr/share/zoneinfo/${TZ} /etc/localtime && \
    echo ${TZ} > /etc/timezone

# php.ini
COPY docker/new/php.ini /usr/local/etc/php/php.ini
