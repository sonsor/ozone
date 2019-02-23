#!/bin/bash
chmod a+x ./phpcs.sh
docker build -t php_code_sniffer ./../docker/phpcs/

if [ ! -f /bin/phpcs ]; then
    ln -s ./phpcs.sh /bin/phpcs
fi