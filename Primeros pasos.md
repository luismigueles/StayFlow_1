# primeros pasos

```sh
composer global require laravel/installer
laravel new StayFlow
cd StayFlow
npm install
npm run build
php artisan key:generate
php artisan migrate
composer run dev


composer require laravel/breeze --dev
php artisan breeze:install

php artisan migrate
npm install
npm run dev


php artisan make:migration create_flights_table
php artisan migrate

$table->foreignId('user_id');
```           

php artisan migrate --path=/ruta


paleta de colores
bakground #4a4e51
letras #ecf5f4

## Tras la instalación

Crear un modelo con su corrspondiente migración, y controlador para manejar la lógica CRUD de Mascota

```sh
php artisan make:model Huespedes --migration --controller --resource
php artisan model:show Huespedes

php artisan make:model Empleados --controller --resource
```