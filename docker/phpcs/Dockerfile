FROM alpine:3.9

RUN apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing gnu-libiconv

RUN apk --no-cache add \
       ca-certificates \
       wget \
       git \
       curl \
       php7 \
       php7-cli \
       php7-dom \
       php7-iconv \
       php7-phar \
       php7-xdebug \
       php7-zlib \
       php7-tokenizer \
       php7-xml \
       php7-simplexml \
       php7-json \
       php7-phar \
       php7-openssl

#RUN apk --no-cache add \
#        ca-certificates \
#        curl \
#        php5-cli \
#        php5-dom \
#        php5-iconv \
#        php5-phar \
#        php5-xdebug \
#        php5-zlib

WORKDIR /tmp

RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    cp /tmp/phpcs.phar /usr/local/bin/phpcs && \
    chmod +x /usr/local/bin/phpcs

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php