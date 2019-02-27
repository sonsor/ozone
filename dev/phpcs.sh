#!/bin/bash
docker run --rm -i \
    --volume "/tmp:/tmp" \
    --volume "$(pwd):/src" \
    -u $(id -u):$(id -g) \
    php_code_sniffer \
    php /usr/local/bin/phpcs "$@"
