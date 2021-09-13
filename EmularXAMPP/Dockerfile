#Imagen que tiene configuraciones para levantar un servidor
#apache  utilizar archivos php
FROM php:7.3-apache

#Intalacion de extenciones
#pdo: permite hacer conexiones la base de datos
#Conexion a la base de datps mysql
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql