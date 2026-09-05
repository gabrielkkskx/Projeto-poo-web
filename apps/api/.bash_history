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
php artisan migrate:fresh --seed
php artisan test
docker exec -it poo_web_php php artisan migrate:fresh --seed
php artisan migrate:fresh --seed
php artisan migrate:fresh --seed
php artisan text
exit
php artisan test
php artisan db:seed
php artisan test
exit
php artisan install:api
php artisan make:controller CategoryController --api --pest
git add .
exit
php artisan route:list
php artisan route:list
exit
php artisan route:list
exit
exit
exit
php artisan route:list
php artisan route:list
exit
php artisan make:request CategoryUpdateRequest
exit
exit
php artisan make:model Order
php artisan make:request ProductStoreRequest
php artisan make:request ProductUpdateRequest
php artisan make:request CustomerStoreRequest
php artisan make:request CustomerUpdateRequest
php artisan make:request OrderStoreRequest
php artisan make:request OrderUpdateRequest
php artisan make:controller ProductController --api
php artisan make:controller CustomerController --api
php artisan make:controller OrderController --api
exit
php artisan route:list --path=api
exit
php artisan make:migration CreateOrdersTable
php artisan migrate
php artisan migrate
exit
