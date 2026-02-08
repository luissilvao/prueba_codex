# Sistema de Cochera (CRUD básico en Laravel)

Este proyecto contiene la estructura base de un CRUD para administrar vehículos de una cochera.

## Funcionalidades
- Alta de vehículos (placa, tipo, marca, color, propietario, etc.)
- Listado paginado
- Ver detalle
- Editar
- Eliminar

## Estructura principal
- `app/Models/Vehiculo.php`: modelo Eloquent
- `app/Http/Controllers/VehiculoController.php`: controlador resource
- `database/migrations/2026_02_08_000000_create_vehiculos_table.php`: migración
- `routes/web.php`: rutas web
- `resources/views/vehiculos/*`: vistas Blade del CRUD

## Pasos para ejecutarlo en un entorno Laravel real
1. Instalar dependencias:
   ```bash
   composer install
   ```
2. Configurar entorno:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Ejecutar migraciones:
   ```bash
   php artisan migrate
   ```
4. Levantar servidor:
   ```bash
   php artisan serve
   ```

Luego abrir `http://127.0.0.1:8000`.
