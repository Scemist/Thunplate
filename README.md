# Start the Containers

## Development

```sh
docker compose up -d --build
```

### First Commands to Run

```sh
sudo docker exec -it thunplate-php-1 sh

cp .env.example .env

composer install

npm install

chmod -R 755 /app && \
	chmod -R ugo+rwx /app/storage && \
	chmod -R ugo+rwx /app/bootstrap/cache

php artisan key:generate
```

## Production

```sh
docker compose -f docker-compose.prod.yml up --detach --build --renew-anon-volumes
```