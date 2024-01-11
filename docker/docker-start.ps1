docker-compose up -d --build

docker-compose exec app bash /var/www/docker/php/setup.sh
