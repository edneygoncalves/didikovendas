#!/bin/bash

WSPC=${PWD##*/}
cd ../../laradock

docker-compose up -d nginx mysql phpmyadmin workspace minio

docker exec -it -w /var/www/projetos/$WSPC laradock_workspace_1 bash

