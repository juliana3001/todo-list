# Lista de Tareas (To Do List)

Aplicación web full-stack para gestión de tareas personales.
Proyecto #1 del portafolio profesional de Juliana Rojas Zabala.

## Stack tecnológico

- **Backend:** Laravel 13 (PHP 8.3)
- **Base de datos:** MySQL 8.4 (via Laragon)
- **Frontend:** (próximamente React 18)
- **Entorno local:** Laragon v8.6.1
- **Control de versiones:** Git + GitHub

## Estado del proyecto

🚧 En desarrollo — Fase 1: Setup y configuración

## Requisitos para correr localmente

- Laragon v8.6 o superior
- PHP 8.3+
- Composer 2.x
- MySQL 8.4+

## Instalación

1. Clonar el repositorio
   git clone https://github.com/juliana3001/todo-list.git

2. Entrar a la carpeta
   cd todo-list

3. Instalar dependencias
   composer install

4. Copiar el archivo de entorno
   cp .env.example .env

5. Generar la clave de la aplicación
   php artisan key:generate

6. Configurar la base de datos en .env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=todo_list
   DB_USERNAME=root
   DB_PASSWORD=

7. Crear la base de datos todo_list en MySQL

8. Correr las migraciones
   php artisan migrate

9. Iniciar el servidor
   php artisan serve

10. Abrir en el navegador
    http://127.0.0.1:8000

## Estructura del proyecto

    app/
    ├── Http/Controllers/    → Controladores
    ├── Models/              → Modelos Eloquent
    database/
    ├── migrations/          → Migraciones de BD
    routes/
    ├── web.php              → Rutas web

## Decisiones técnicas

### ¿Por qué Laragon en vez de XAMPP?
XAMPP estaba instalado pero PHP no estaba configurado en el PATH del sistema.
Laragon maneja su propio entorno de forma aislada, evitando conflictos con
otras instalaciones. Además incluye PHP 8.3, Composer, Git y MySQL listos
para usar sin configuración adicional.

### ¿Por qué MySQL en vez de PostgreSQL?
Laragon Full incluye MySQL por defecto. Para este primer proyecto la diferencia
es mínima — Eloquent ORM funciona igual con ambos. PostgreSQL se usará
en proyectos posteriores (Proyecto #5: Acortador de URLs).

## Progreso por sesión

### Sesión 1 — 04/05/2026
- Instalación de Laragon v8.6.1
- Creación del proyecto Laravel 13
- Conexión a MySQL con migraciones base
- Configuración de repositorio GitHub
- Ramas main y develop configuradas

## Próximos pasos

- [ ] Migración tabla tasks
- [ ] Modelo Task con Eloquent
- [ ] Controlador CRUD de tareas
- [ ] Rutas web para tareas
- [ ] Vistas Blade básicas

## Autor

Juliana Rojas Zabala
GitHub: github.com/juliana3001