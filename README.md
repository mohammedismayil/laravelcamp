Steps to install :
composer install
cp .env.example .env 
set all the field in env file - correctly
npm install
npm run dev
php artisan key:generate
php artisan migrate
php artisan db:seed --class=ArticleSeeder
php artisan serve

//
