FROM  arsaga/laravel-alpine:latest

COPY ./start.sh src/

RUN chmod +x src/start.sh

