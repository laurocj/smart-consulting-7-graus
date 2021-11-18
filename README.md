# smart-consulting-7-graus
Project to demonstrate OOP skills in PHP

## Installation

Being in the project folder

Use the docker-compose to run the tests

```docker
docker-compose run composer install

docker-compose run phpunit
```

But you can also use it without the docker

```php
composer install

php vendor/bin/phpunit tests
```