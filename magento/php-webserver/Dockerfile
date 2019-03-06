FROM php:7.2.1-apache
RUN a2enmod rewrite
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libxml2-dev \
    libxslt-dev

RUN docker-php-ext-install pdo pdo_mysql mysqli && docker-php-ext-install soap && docker-php-ext-install xsl && docker-php-ext-install zip && docker-php-ext-install intl && docker-php-ext-install bcmath
# for GD ext
RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-install -j$(nproc) iconv \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd
