#!/bin/bash
docker run --rm -i \
    --volume "$(pwd):/tmp" \
    -u $(id -u):$(id -g) \
    php_code_sniffer \
    php "$@"