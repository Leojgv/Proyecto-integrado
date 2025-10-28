# Proyecto Integrado

Este repositorio contiene el proyecto principal y un subproyecto desarrollado con Laravel ubicado en la carpeta `Proyecto1/`.

## Estructura del repositorio

- `Proyecto1/`: Aplicación web desarrollada con Laravel. Incluye controladores, modelos, vistas, rutas y configuración típica de un proyecto Laravel.
- Otros archivos/directorios pueden ser utilizados para documentación, scripts o recursos adicionales.

## Instalación rápida

1. Clona este repositorio:
	```sh
	git clone https://github.com/Leojgv/Proyecto-integrado.git
	cd Proyecto-integrado/Proyecto1
	```
2. Instala dependencias PHP y JavaScript:
	```sh
	composer install
	npm install
	```
3. Copia el archivo de entorno y genera la clave de la app:
	```sh
	cp .env.example .env
	php artisan key:generate
	```
4. Configura la base de datos en `.env` y ejecuta migraciones:
	```sh
	php artisan migrate
	```
5. Inicia el servidor de desarrollo:
	```sh
	php artisan serve
	```

## Estructura de Proyecto1 (Laravel)

- `app/`: Lógica de la aplicación (controladores, modelos, middleware, etc.)
- `routes/`: Definición de rutas (`web.php`, `api.php`, etc.)
- `resources/views/`: Vistas Blade
- `public/`: Punto de entrada web
- `database/`: Migraciones, seeders y factories
- `tests/`: Pruebas unitarias y funcionales

## Notas

- Consulta el `README.md` dentro de `Proyecto1/` para más detalles sobre Laravel.
- Asegúrate de tener PHP, Composer y Node.js instalados.

---
Proyecto mantenido por Leo, Marcelo y Vicente.