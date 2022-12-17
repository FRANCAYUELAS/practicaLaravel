1- Crear el proyecto ejecuta el comando.

    composer create-project laravel/laravel practicaLaravel

2- Arrancar el servicio

     cd practicaLaravel | php artisan serve

3- Hacer una migracion para hacer una nueva tabla

    php artisan make:migration create_nombretabla_table

4- Hacer las nuevas migraciones

    php artisan migrate

5- Crear un seeder

    php artisan make:seeder NombretablaSeeder

6- Ejecutar la seeder

    php artisan db:seed --class= NombreTablaSeeder

7- Crear un controller

    php artisan make:controller NombretablaController

8- Crear un middleware

    php artisan make:middleware NombreMiddlewar