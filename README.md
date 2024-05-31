# Airalo Assessment
Welcome. This project is meant to accompany you during your interview at Airalo.

## Requirements
- PHP >= 8.3

## Installation
```
cd [YOUR WORKSPACE]
mkdir -p airalo-assessment/project
cd airalo-assessment/project
git clone git@github.com:Airalo/backend-assessment.git .
```

## Local PHP + DATABASE solution
```
## IF YOU HAVE A MYSQL SERVER
composer install
cp .env.example .env
php artisan key:generate
## edit your db connection
```

```
## IF YOU DON'T HAVE A MYSQL SERVER
composer install
cp .env.sqlite .env && cp database/database.sqlite.example database/database.sqlite
php artisan key:generate
```

### Open the app
```
php artisan serve --port 8000
```
Server will be running [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

### DB Connection Validation

```
php artisan migrate
curl http://127.0.0.1:8000/db-test
# [{"Tables_in_airalo_assessment":"failed_jobs"},{"Tables_in_airalo_assessment":"migrations"},{"Tables_in_airalo_assessment":"password_resets"},{"Tables_in_airalo_assessment":"personal_access_tokens"},{"Tables_in_airalo_assessment":"users"}]
```

## Alternatively - Using Docker
You can use the included `.env.docker` to set up your database connection details.
```
cp .env.docker .env
docker compose up
```

### Open the app
Server will be running [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

### Run Artisan
```
docker compose exec myapp php artisan <command>
```

### DB Connection Validation

```
docker compose exec myapp php artisan migrate
curl http://127.0.0.1:8000/db-test
# [{"Tables_in_airalo_assessment":"cache"},{"Tables_in_airalo_assessment":"cache_locks"},{"Tables_in_airalo_assessment":"failed_jobs"},{"Tables_in_airalo_assessment":"job_batches"},{"Tables_in_airalo_assessment":"jobs"},{"Tables_in_airalo_assessment":"migrations"},{"Tables_in_airalo_assessment":"password_reset_tokens"},{"Tables_in_airalo_assessment":"personal_access_tokens"},{"Tables_in_airalo_assessment":"sessions"},{"Tables_in_airalo_assessment":"users"}]
```
