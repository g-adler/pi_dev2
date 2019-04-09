FROM  arsaga/laravel-alpine:latest

COPY composer-setup.php ./

RUN php --version

RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

ENTRYPOINT ["bash"]
