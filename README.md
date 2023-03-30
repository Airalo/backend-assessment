# Airalo Assessment
Welcome. This project is meant to accompany you during your interview at Airalo.

## Requirements
- PHP >= 8.0

### Installation
```
cd [YOUR WORKSPACE]
mkdir -p airalo-assessment/project   
cd airalo-assessment/project
git clone git@github.com:Airalo/backend-assessment.git .
```

#### Composer dependencies
```
composer install
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
docker compose exec myapp php artisan tinker
> DB::select('SHOW TABLES');
# [
#    {#3716
#      +"Tables_in_airalo_assessment": "failed_jobs",
#    },
#    ...
# ]
curl http://127.0.0.1:8000/db-test
# [{"Tables_in_airalo_assessment":"failed_jobs"},{"Tables_in_airalo_assessment":"migrations"},{"Tables_in_airalo_assessment":"password_resets"},{"Tables_in_airalo_assessment":"personal_access_tokens"},{"Tables_in_airalo_assessment":"users"}]
```
