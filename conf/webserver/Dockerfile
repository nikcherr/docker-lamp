FROM php:7.1.20-apache

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y

# Install useful tools
RUN apt-get -y install apt-utils nano wget dialog

# Install important libraries
RUN apt-get -y install --fix-missing apt-utils build-essential git curl libcurl3 libcurl3-dev zip

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install xdebug
RUN pecl install xdebug-2.5.0
RUN docker-php-ext-enable xdebug

# Other PHP7 Extensions

RUN apt-get -y install libmcrypt-dev
RUN docker-php-ext-install mcrypt

RUN apt-get -y install libsqlite3-dev libsqlite3-0 mysql-client
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install curl
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install json

RUN apt-get -y install zlib1g-dev
RUN docker-php-ext-install zip

RUN apt-get -y install libicu-dev
RUN docker-php-ext-install -j$(nproc) intl

RUN docker-php-ext-install mbstring

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-install -j$(nproc) gd

# Enable apache modules
RUN a2enmod rewrite headers

# Install wordpress
RUN mkdir /var/www/wordpress
RUN cd /tmp \
    curl -O https://wordpress.org/latest.tar.gz \
    tar xzvf latest.tar.gz \
    touch /tmp/wordpress/.htaccess \
    #cp /tmp/wordpress/wp-config-sample.php /tmp/wordpress/wp-config.php \
    mkdir /tmp/wordpress/wp-content/upgrade \
    cp -a /tmp/wordpress/. /var/www/wordpress 

COPY ./wp-config.php /var/www/wordpress

#RUN chown -R www-data:www-data /var/www/wordpress
RUN find /var/www/wordpress/ -type d -exec chmod 750 {} \;
RUN find /var/www/wordpress/ -type f -exec chmod 640 {} \;



