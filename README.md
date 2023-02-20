# Airalo Assessment

## Requirements
- PHP >= 8.0

## Installation
```
cd [YOUR WORKSPACE]
mkdir -p airalo-assessment/project   
cd airalo-assessment/project
git clone git@github.com:Airalo/backend-assessment.git .
```

### Composer dependencies
```
composer install
```

### Alternatively - Using Docker
Ensure your `.env` file is set with `DB_*` connection details.
```
docker compose up
```

#### Run Artisan
```
docker compose exec myapp php artisan ...
```