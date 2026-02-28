# Actividad 6 - Laravel Migrations

## Tablas creadas:
- Universes (id, name, company, age)
- Superheroes (id, name, real_name, gender, universe_id)

## Comandos utilizados:
- php artisan make:migration create_universes_table
- php artisan make:migration create_superheroes_table
- php artisan migrate
- php artisan db:seed

## Vistas:
- /universes - Muestra todos los universos
- /superheroes - Muestra todos los superhéroes