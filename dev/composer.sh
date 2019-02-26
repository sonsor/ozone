#!/bin/bash
docker run --rm -i \
    --volume "$(pwd):/tmp" \
    --volume "$(pwd)/.composer:/.composer" \
    -u $(id -u):$(id -g) \
    php_code_sniffer \
    /usr/local/bin/composer "$@"
