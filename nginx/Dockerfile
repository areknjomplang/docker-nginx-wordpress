FROM nginx:1.21-alpine

RUN set -x; \
    addgroup -g 1000 -S www-data; \
    adduser -u 1000 -D -S -G www-data www-data && exit 0 ; exit 1

RUN mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf.disabled