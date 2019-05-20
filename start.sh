#!/bin/bash

composer global require laravel/installer

apt install php7.3-mbstring
apt install php7.3-dom

php artisan serve
