# Start the Containers

## Development

```properties
docker compose up -d --build
```

## Production


```sh
docker compose -f docker-compose.prod.yml up --detach --build --renew-anon-volumes
```