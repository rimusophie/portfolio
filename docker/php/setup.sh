cd /var/www/
composer install
composer require laravel/ui

# npmをインストール
apt-get install -y nodejs
apt-get install -y npm

# vue関連のインストール
npm install @vitejs/plugin-vue --save-dev
npm install vue-router@4
npm install vue-loading-template

# アクセス権限の調整
chmod -R 777 storage bootstrap/cache
