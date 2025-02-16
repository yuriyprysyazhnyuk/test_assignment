## Prerequisites to run the application:
- docker
- composer
- npm
- php

## Setup the application
- move .env.example to .env
- composer install
- php artisan sail:install
- php artisan key:generate
- npm run build

## Start the application 
- ./vendor/bin/sail up
  Check if posts APP_PORT and FORWARD_DB_PORT are not used. You can update port values in .env file

## Seed database
- ./vendor/bin/sail artisan db:seed 

## Run tests
- ./vendor/bin/sail artisan test

## Stop the application
- ./vendor/bin/sail down

## Link to api documentation
http://localhost:8088/api/documentation - 8088 is taken from .env APP_PORT 

