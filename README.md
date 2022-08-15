## Installation


git Init repository

```bash
# clone the repo
$ git clone https://github.com/vinipimenta08/teste.git

# go into app's directory
$ cd teste

```

You can install the package via composer:

```bash
# install app's dependencies
$ composer install

```

Start application database structure:

```bash
# create database tables
$ php artisan migrate --database=mysql

#insert basic data for the application
$ php artisan db:seed

login: admin@phplaravel.com
senha: env(DB_PASSWORD)


```


Generate keys needed for the application

``` bash
# generate application key
$ php artisan key:generate

# generate jwt key
$ php artisan jwt:secret

```


start application:

```bash

# start serve
$ php artisan serve

```
