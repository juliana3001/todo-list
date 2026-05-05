# Bitácora de desarrollo — Lista de Tareas

## Información del proyecto
- **Desarrolladora:** Juliana Rojas Zabala
- **Inicio:** 04/05/2026
- **Metodología:** Kanban personal
- **Repositorio:** github.com/juliana3001/todo-list

---

## Sesión 1 — 04/05/2026
**Horario:** 00:00 – 02:00 (2 horas)
**Estado:** Completada

### Qué se hizo
- Instalación de Laragon v8.6.1 en Windows 11
- Resolución de conflicto: PHP de XAMPP no estaba en el PATH del sistema
- Decisión técnica: migrar de XAMPP a Laragon por aislamiento de entorno
- Creación del proyecto Laravel 13 con Composer
- Conexión a MySQL 8.4 y ejecución de migraciones base
- Configuración de repositorio GitHub con ramas main y develop
- Documentación del README profesional

### Obstáculos encontrados
- PHP de XAMPP no reconocido en PowerShell → Solución: instalar Laragon
- PATH de Windows truncado a 1024 caracteres → Solución: Laragon maneja su propio PATH
- Terminal de VS Code no reconoce PHP de Laragon → Solución: usar siempre la terminal de Laragon

### Commits realizados
- `81a136b` chore: initial Laravel 13 setup with MySQL
- `3a6ad47` docs: add professional README with session 1 progress

### Aprendizajes
- Git flow con ramas main y develop
- Conventional Commits (chore, docs, feat, fix)
- Migraciones base de Laravel
- Por qué Laragon es mejor que XAMPP para desarrollo Laravel en Windows

### Próxima sesión
- [ ] Crear migración tabla `tasks`
- [ ] Crear modelo `Task` con Eloquent
- [ ] Crear controlador `TaskController` con CRUD
- [ ] Crear rutas en `web.php`
- [ ] Crear vistas Blade básicas

---

---

## Sesión 2 — 05/05/2026
**Horario:** 00:00 – 02:11 (2 horas 11 minutos)
**Estado:** Completada

### Qué se hizo
- Creación de rama feature/task-crud con Git Flow profesional
- Migración de tabla `tasks` con campos title, description, completed, timestamps
- Modelo Task con Eloquent y $fillable y $casts configurados
- Controlador TaskController con CRUD completo (index, create, store, edit, update, destroy)
- Función toggle para marcar tareas como completadas/pendientes
- Rutas resourceful en web.php con ruta extra para toggle
- Vistas Blade: layouts/app, tasks/index, tasks/create, tasks/edit
- Diseño mejorado con gradiente morado, barra de progreso y cards con bordes de color
- Merge de feature/task-crud → develop → main

### Commits realizados
- `3aafade` feat: add task CRUD with views and toggle completion
- `9cfd9b8` feat: improve UI design with progress bar and gradients

### Aprendizajes
- Migraciones Laravel: crear tablas con Blueprint y tipos de datos
- Eloquent ORM: $fillable, $casts, consultas con orderBy y get
- Controlador MVC: separación de lógica en métodos específicos
- Rutas resourceful: Route::resource genera 7 rutas automáticamente
- Vistas Blade: @extends, @section, @yield, @foreach, @if, @error
- Git Flow completo: feature branch → develop → main con merge
- Validaciones Laravel: required, min, max, nullable

### Obstáculos encontrados
- Cambios sin commitear al intentar cambiar de rama → Solución: siempre commitear antes de checkout

### Próxima sesión — Proyecto 2: CRUD + API REST
- [ ] Instalar y configurar Laravel Sanctum para autenticación API
- [ ] Crear endpoints JSON para tareas (GET, POST, PUT, DELETE)
- [ ] Probar API con Postman o Thunder Client
- [ ] Documentar endpoints con comentarios Swagger