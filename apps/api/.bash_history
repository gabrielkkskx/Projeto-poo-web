clear
./vendor/bin/pest
clear
exit
php artisan migrate:reset
exit
php artisan test
php artisan make:model Category -fsm
php artisan migrate
php artisan db:seed CategorySeeder
php artisan migrate:fresh --seed --seeder=CategorySeeder
php artisan migrate:fresh
php artisan db:seed --class=CategorySeeder
git add .
git commit -m "Atividade --Categories-- POO Web"
exit
exit
ls -l
php index.php
php index.php
exit
ls =l
ls -l
exit
