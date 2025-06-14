
```sh
$ cp .env.example .env
$ chmod 777 -R storage/
$ docker compose up -d --build
```

```
$ php artisan key:generate
$ php artisan migrate
```
