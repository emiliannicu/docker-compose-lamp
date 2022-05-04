#  LAMP stack built with Docker Compose


A LAMP stack environment built using Docker Compose. It consists of the following:

* PHP
* PHP-FPM
* Apache
* Nginx
* MySQL
* phpMyAdmin
* PostgreSQL
* pgAdmin
* Redis
* NodeJS (Available for PHP74, PHP7.4-fpm, PHP8.0.18, PHP8.0.18-fpm)
* Composer (All php versions)

Available PHP versions. Use appropriate php version as needed:

* 5.4
* 5.6
* 7.1
* 7.2
* 7.3
* 7.4
* 8.0.18
* 

Available PHP-FPM versions. Use appropriate php version as needed:

* 7.4
* 8.0.18
 
##  Installation
 
* Clone this repository on your local computer
* configure .env as needed 
* Run the `docker-compose up -d`.

```shell
git clone https://github.com/emiliannicu/docker-compose-lamp.git
cd docker-compose-lamp/
cp .env.example .env
// modify .env as needed
docker-compose up -d
// visit localhost
```

You can access it via `http://localhost`.

##Default configuration summary:

###Credentials:

**username**:``docker``

**password**: ``dockerpass``

###Services configuration:

Apache http:
``http://localhost``

Apache https:
``https://localhost``

Nginx http:
``http://localhost:8001``

Nginx https:
``https://localhost:4431``

Mysql:
``host: localhost``
``port: 3306``

phpMyAdmin:
``http://localhost:8080/``

Postgress
``host: localhost``
``port: 5432``

pgAdmin
``http://localhost:5545``

Redis:
``host: localhost``
``port: 6379``



##  Configuration and Usage


### Configuration
This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.
To make it easy, just copy the content from `.env.example` file and update the environment variable values as per your need.

### Configuration Variables
There are following configuration variables available and you can customize them by overwritting in your own `.env` file.

---
#### PHP
---
_**PHPVERSION**_ / _**PHPFPMVERSION**_
Is used to specify which PHP Version you want to use. Defaults always to latest PHP Version. 

_**PHP_INI**_
Define your custom `php.ini` modification to meet your requirments. 

---
#### Apache 
---

_**LOCAL_MACHINE_WEB_APP_DIR**_

It is the document root for local files. The default value for this is `./www`. 

_**REMOTE_MACHINE_WEB_APP_DIR**_

It is the document the container files. The default value for this is `/var/www/html`.

_**VHOSTS_DIR**_
This is for virtual hosts. The default value for this is `./config/vhosts`. You can place your virtual hosts conf files here.

_**LOG_DIR**_

This will be used to store logs `./logs`.

---
#### Database
---

_**DATABASE**_

Define which MySQL or MariaDB Version you would like to use. 

_**MYSQL_INITDB_DIR**_

When a container is started for the first time files in this directory with the extensions `.sh`, `.sql`, `.sql.gz` and
`.sql.xz` will be executed in alphabetical order. `.sh` files without file execute permission are sourced rather than executed.
The default value for this is `./config/initdb`.

_**MYSQL_DATA_DIR**_

This is MySQL data directory. The default value for this is `./data/mysql`. All your MySQL data files will be stored here.

_**MYSQL_LOG_DIR**_

This will be used to store Apache logs. The default value for this is `./logs/mysql`.

## Web Server

Apache is configured to run on port 80. So, you can access it via `http://localhost`.

#### Apache Modules

By default following modules are enabled.

* rewrite
* headers


#### Connect via SSH

You can connect to web server using `docker-compose exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker-compose exec webserver-apache bash
```

## Nginx web server

*When using the SSL connection, http2 is enable by default.

#### Connect via SSH

You can connect to web server using `docker-compose exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker-compose exec webserver-nginx bash
```


## PHP

The installed version of php depends on your `.env`file.

#### Extensions

By default following extensions are installed. 
May differ for PHP Versions <7.x.x

* mysqli
* pdo_sqlite
* pdo_mysql
* mbstring
* zip
* intl
* curl
* json
* iconv
* xml
* gd
* tokenizer 
* gettext 
* calendar 
* exif

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.
http://localhost:8080/  
username: dockerpass 
password: dockerpass

## Redis

It comes with Redis. It runs on default port `6379`.

