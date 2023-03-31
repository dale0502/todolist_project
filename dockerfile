# 使用官方的 PHP 8.1 映像檔
FROM php:8.1-fpm

# 安裝 Nginx 並設置站點配置
RUN apt-get update && apt-get install -y nginx
COPY nginx.conf /etc/nginx/sites-available/default
# RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default


# 安裝 MySQL 8.0 客戶端
RUN apt-get install -y default-mysql-client

# 安裝 Laravel 所需的擴展套件
RUN docker-php-ext-install pdo_mysql bcmath

# 設置 Laravel 專案的工作目錄
WORKDIR /var/www/html

# 複製 Laravel 專案到容器中
COPY . /var/www/html

# 安裝 Composer 並執行 Laravel 專案相關指令
RUN apt-get install -y git unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install \
    && php artisan key:generate

# 啟動 Nginx 和 PHP-FPM 服務
CMD service nginx start && php-fpm
