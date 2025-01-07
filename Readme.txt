¿Qué crees que hace el método create de la clase Schema? 
Crea las tablas 

¿Qué crees que hace $table->string('email')->primary();?   
Crea una nueva columna, asigna el tipo de valor (string en este caso o varchar) y con primary se adjudica el campo como clave primaria, es decir, no puede ser nulo ni repetirse

¿Cuantas tablas hay definidas? Indica el nombre de cada tabla
Hay 9 tablas: Users, cache, cache_locks, failed_jobs, job_batches, jobs, migrations, password_reset_tokens, sessions.






php artisan migrate: Aplica todas las migraciones pendientes.
php artisan migrate:status: Muestra el estado de las migraciones (las ya realizadas y las que están por realizar).
php artisan migrate:rollback: Revierte SOLO la última ejecución de migraciones.
php artisan migrate:reset: Revierte todas las migraciones.
php artisan migrate:refresh: Revierte y luego aplica todas las migraciones, es como si fuera refrescar, borrar todo y volver a añadir todos los datos.
php artisan make:migration: Crea una nueva migración. Puedes usarlo para crear migraciones para nuevas tablas o para modificar las existentes.
php artisan migrate --seed: Aplica migraciones y ejecuta seeders para poblar datos. Es útil cuando necesitas tanto crear las tablas como agregar datos iniciales.




Para añadir el campo apellido en la tabla alumnos habría que crear una nueva migración, lo que nos daría un nuevo archivo en migraciones. (php artisan make:mi
gration add_apellido_to_alumnos_table --table=alumnos)
Nos metemos en ese archivo y lo editamos de forma que se añada esa columna a la tabla.
Ejecutamos a la migración y comprobamos que todo ha funcionado. (DESCRIBE nombre_tabla)