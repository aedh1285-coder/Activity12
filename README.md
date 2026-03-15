# Actividad 8 - Laravel CRUD Completo con Controladores de Responsabilidad Única

## Descripción del Proyecto
Sistema de gestión para Universos, Superhéroes y Superpoderes implementado en Laravel con arquitectura de controladores de responsabilidad única (Single Responsibility Principle).

## Características Principales
- CRUD completo para Universos
- CRUD completo para Superhéroes
- CRUD completo para Superpoderes
- Arquitectura con controladores separados por cada operación
- Vistas con Bootstrap para interfaz limpia y responsive
- Validaciones de formularios
- Mensajes de éxito/error

## Tablas en la Base de Datos

### Universes
- id (integer, primary key)
- name (string) - Nombre del universo
- company (string) - Compañía propietaria
- age (integer) - Años de existencia
- created_at (timestamp)
- updated_at (timestamp)

### Superheroes
- id (integer, primary key)
- name (string) - Nombre del superhéroe
- real_name (string, nullable) - Nombre real
- gender (string) - Género (Male/Female/Other)
- universe_id (integer, foreign key) - ID del universo
- created_at (timestamp)
- updated_at (timestamp)

### Superpowers
- id (integer, primary key)
- name (string) - Nombre del superpoder
- description (text) - Descripción detallada
- created_at (timestamp)
- updated_at (timestamp)

## Rutas Disponibles

### Universos
- GET /universes - Lista todos los universos
- GET /universes/create - Formulario para crear universo
- POST /universes - Guardar nuevo universo
- GET /universes/{universe}/edit - Formulario para editar
- PUT /universes/{universe} - Actualizar universo
- DELETE /universes/{universe} - Eliminar universo

### Superhéroes
- GET /superheroes - Lista todos los superhéroes
- GET /superheroes/create - Formulario para crear superhéroe
- POST /superheroes - Guardar nuevo superhéroe
- GET /superheroes/{superhero}/edit - Formulario para editar
- PUT /superheroes/{superhero} - Actualizar superhéroe
- DELETE /superheroes/{superhero} - Eliminar superhéroe

### Superpoderes
- GET /superpowers - Lista todos los superpoderes
- GET /superpowers/create - Formulario para crear superpoder
- POST /superpowers - Guardar nuevo superpoder
- GET /superpowers/{superpower}/edit - Formulario para editar
- PUT /superpowers/{superpower} - Actualizar superpoder
- DELETE /superpowers/{superpower} - Eliminar superpoder

## Comandos Utilizados

### Migraciones
php artisan make:migration create_universes_table
php artisan make:migration create_superheroes_table
php artisan make:migration create_superpowers_table
php artisan migrate

### Seeders
php artisan db:seed --class=SuperpowerSeeder

### Servidor
php artisan serve

## Vistas Principales
- /universes - Gestión de universos
- /superheroes - Gestión de superhéroes
- /superpowers - Gestión de superpoderes

## Instalación

1. Clonar el repositorio
git clone [URL del repositorio]

2. Instalar dependencias
composer install

3. Configurar archivo .env
cp .env.example .env
- Configurar conexión a base de datos

4. Generar key
php artisan key:generate

5. Ejecutar migraciones
php artisan migrate

6. Iniciar servidor
php artisan serve
