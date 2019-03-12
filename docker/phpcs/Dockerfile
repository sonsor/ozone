FROM alpine:3.9

RUN apk --no-cache add ca-certificates \
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
        php7-openssl \
        php7-xmlwriter \
        php7-xmlwriter \
        php7-mbstring \
        php7-xdebug

WORKDIR /tmp

RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    cp /tmp/phpcs.phar /usr/local/bin/phpcs && \
    chmod +x /usr/local/bin/phpcs

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php