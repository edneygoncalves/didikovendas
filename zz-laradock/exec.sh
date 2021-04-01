#!/bin/bash

WSPC=${PWD##*/}

docker exec -it -w /var/www/projetos/$WSPC laradock_workspace_1 bash

