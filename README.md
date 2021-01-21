# MPA-Webshop

How to build the environment:

# Compile Laravel dependencies
composer install

# For database connection
database user/pass/host/dbname to .env

# Key generation
php artisan key:generate

# Compile Node dependencies
npm install

# Compile assets
npm run dev

# Compile assets
npm run production

# Migrate all tables into the database and fill with records    
php artisan migrate --seed

# Serve the project
php artisan serve