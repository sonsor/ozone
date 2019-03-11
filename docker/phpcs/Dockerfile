FROM alpine:3.9

RUN apk --no-cache add ca-certificates
RUN apk --no-cache add wget
RUN apk --no-cache add git
RUN apk --no-cache add curl
RUN apk --no-cache add php7
RUN apk --no-cache add php7-cli
RUN apk --no-cache add php7-dom
RUN apk --no-cache add php7-iconv
RUN apk --no-cache add php7-phar
RUN apk --no-cache add php7-xdebug
RUN apk --no-cache add php7-zlib
RUN apk --no-cache add php7-tokenizer
RUN apk --no-cache add php7-xml
RUN apk --no-cache add php7-simplexml
RUN apk --no-cache add php7-json
RUN apk --no-cache add php7-phar
RUN apk --no-cache add php7-openssl
RUN apk --no-cache add php7-xmlwriter
RUN apk --no-cache add php7-xmlwriter
RUN apk --no-cache add php7-mbstring
RUN apk --no-cache add php7-xdebug

RUN apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing
#RUN apk add --no-cache gnu-libiconv

WORKDIR /tmp

RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    cp /tmp/phpcs.phar /usr/local/bin/phpcs && \
    chmod +x /usr/local/bin/phpcs

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php