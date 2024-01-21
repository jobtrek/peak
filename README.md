# Peak

> Fully experimental app.

## Development

You need docker and docker-compose installed on your machine.

```bash
# Clone the repository
git clone git@github.com:jobtrek/peak.git

# Duplicate .env.example and rename it to .env
cp .env.example .env

# Install dependencies with sail
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

# Run sail containers
vendor/bin/sail up -d

# Generate app key
vendor/bin/sail artisan key:generate

# Run migrations
vendor/bin/sail artisan migrate

# Create one user / Or directly connect to the app with microsoft
vendor/bin/sail artisan make:filament-user

# Add admin role to the user
vendor/bin/sail artisan shield:super-admin

# Generate database initial data
vendor/bin/sail artisan shield:generate -all

# Seed custom data to db
vendor/bin/sail artisan db:seed

# Open the app in your browser
http://localhost
```
