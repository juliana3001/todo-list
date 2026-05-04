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

## Plantilla para próximas sesiones

## Sesión N — DD/MM/YYYY
**Horario:** HH:MM – HH:MM (X horas)
**Estado:** Completada / En progreso

### Qué se hizo
-

### Obstáculos encontrados
-

### Commits realizados
-

### Aprendizajes
-

### Próxima sesión
- [ ]