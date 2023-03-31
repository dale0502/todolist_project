# laravel 9 build with docker


## Requirements

- PHP >= 8.0

- MySQL 8.0

- Nginx latest

## Local environment construction

#### Install
```shell
$ composer install
```

#### Copy env
```shell
$ cp .env.example .env
```

#### Generate APP KEY
```shell
$ php artisan key:generate
```

#### Build docker
```shell
docker-compose up -d 
```

#### enter to container
```shell
docker exec -it app_php /bin/bash  
```

#### Run migration
```shell
php artisan migrate
```