#!/bin/bash
chmod a+x ./phpcs.sh
docker build -t php_code_sniffer ./../docker/phpcs/

if [ ! -f /bin/phpcs ]; then
    sudo ln -s $(pwd)/phpcs.sh /bin/phpcs
fi


if [ ! -f /bin/composer ]; then
    sudo ln -s $(pwd)/composer.sh /bin/composer
fi

if [ ! -f /bin/php ]; then
    sudo ln -s $(pwd)/php.sh /bin/php
fi