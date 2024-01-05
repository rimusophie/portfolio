FROM php:8.2-apache

RUN apt-get -y update 
RUN apt-get install -y wget

# Laravelのルーティングを有効にするため
RUN a2enmod rewrite

# docker phpにはmysql用のドライバがないため追加
RUN docker-php-ext-install pdo_mysql

# composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# npmをインストール
RUN apt-get install -y nodejs
RUN apt-get install -y npm

# コンテナ内で作業する際のカレンとディレクトリの指定
WORKDIR /var/www/html

# ドキュメントルートを変更する
ENV APACHE_DOCUMENT_ROOT='/var/www/public'
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Viteのサーバーにローカルからアクセスするために開ける
EXPOSE 5173

# コンテナログイン時のパスを指定
WORKDIR /var/www

# install-php-extensions をインストール
#ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
#RUN chmod +x /usr/local/bin/install-php-extensions

# PHP のエクステンションをインストール
#RUN install-php-extensions opcache intl gd exif imagick mysqli pdo_mysql redis xdebug