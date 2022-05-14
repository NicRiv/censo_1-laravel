# censo-laravel
Un sitio web para hacer un registro básico de personas, programado en Laravel.

**Versión 1.0**

---

### Página de inicio:

![Pagina de inicio](images/screenshots/screenshot-inicio.png)

En esta página se completa el formulario, y luego saldrá una notificación de que se ha añadido la información a la lista de personas.

### Notificación de registro:

![Notificacion de registro](public\images\screenshots\screenshot-notificacion.png)


Hay datos de tipo obligatorio, y opcionales.
Los datos serán evaluados en el controlador de inicio (App\Http\Controllers\HomeController.php) y validados en (App\Http\Requests\StorePersona.php).
Hay archivos de caracter único y otros "nullable".

Hay un seeder (database\seeders\PersonasSeeder.php) para simular el registro de dos personas con datos falsos y así hacer una previsualización de la página "Lista de personas".

*Se ejecuta en consola*:

    php artisan db:seed --class=PersonasSeeder

### Página "Lista de personas"

![Lista de personas con seeder](public\images\screenshots\screenshot-lista.png)