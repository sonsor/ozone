#!/bin/bash
docker run --rm -i --volume "/tmp:/tmp" -u $(id -u):$(id -g) php_code_sniffer php /usr/local/bin/phpcs "$@"
#docker exec -i php_code_sniffer phpcs "$@"