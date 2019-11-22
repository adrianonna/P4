FROM php:apache

RUN apt-get update

RUN apt-get install -y \
	zip \
	unzip \
	git \
	curt

RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
