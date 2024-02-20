#COMANDO PARA RODAR O SERVIDOR NO LUMEN

sudo php -S 127.0.0.1:800 -t public

#COMANDO PARA FAZER A MIGRATION
php artisan make:migration create_courses_table --create=courses

php artisan make:seeder CoursesTableSeeder

php artisan migrate:install

php artisan db:seed
