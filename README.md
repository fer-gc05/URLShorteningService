# URL Shortener API

[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://php.net/)
[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel)](https://laravel.com)


## Descripción

Servicio de Acortamiento de URL RESTful construido con Laravel 11, diseñado como parte del desafío de Roadmap.sh. Esta API permite a los usuarios:
- Generar URLs cortas
- Recuperar URLs originales
- Actualizar URLs acortadas
- Eliminar URLs acortadas
- Rastrear estadísticas de acceso

## Requisitos Previos

- PHP 8.2 o superior
- Composer
- Laravel 11
- MySQL o cualquier base de datos compatible con Laravel

## Instalación

### 1. Clonar el Repositorio

```sh
git clone https://github.com/fer-gc05/URLShorteningService.git
cd URLShorteningService
```

### 2. Instalar Dependencias

```sh
composer install
```

### 3. Configurar Entorno

```sh
cp .env.example .env
```

Edita el archivo `.env` para configurar los ajustes de la base de datos.

### 4. Generar Clave de Aplicación

```sh
php artisan key:generate
```

### 5. Ejecutar Migraciones

```sh
php artisan migrate
```

### 6. Iniciar Servidor de Desarrollo

```sh
php artisan serve
```

## Endpoints de API

### 1. Crear URL Corta
- **Método:** `POST`
- **Endpoint:** `/api/links`
- **Cuerpo de la Solicitud:**
  ```json
  {
    "url": "https://www.ejemplo.com/pagina-larga"
  }
  ```
- **Respuesta:**
  ```json
  {
    "id": 1,
    "url": "https://www.ejemplo.com/pagina-larga",
    "shortenedUrl": "abc123",
    "createdAt": "2025-02-05T12:00:00Z"
  }
  ```

### 2. Actualizar URL Corta
- **Método:** `PUT`
- **Endpoint:** `/api/links/{shortenedUrl}`
- **Cuerpo de la Solicitud:**
  ```json
  {
    "url": "https://www.ejemplo.com/nueva-url"
  }
  ```
- **Respuesta:**
  ```json
  {
    "id": 1,
    "url": "https://www.ejemplo.com/nueva-url",
    "shortenedUrl": "abc123",
    "updatedAt": "2025-02-05T12:30:00Z"
  }
  ```

### 3. Eliminar URL Corta
- **Método:** `DELETE`
- **Endpoint:** `/api/links/{shortenedUrl}`
- **Respuesta:**
  - **204 Sin Contenido:** Eliminado con éxito
  - **404 No Encontrado:** URL no encontrada

### 4. Obtener Estadísticas de URL
- **Método:** `GET`
- **Endpoint:** `/api/links/{shortenedUrl}/stats`
- **Respuesta:**
  ```json
  {
    "id": 1,
    "url": "https://www.ejemplo.com/pagina-larga",
    "shortenedUrl": "abc123",
    "createdAt": "2025-02-05T12:00:00Z",
    "accessCount": 10
  }
  ```
## Contacto

Fernando Gil - [Perfil de GitHub](https://github.com/fer-gc05)

Enlace del Proyecto: [https://github.com/fer-gc05/url-shortener](https://github.com/fer-gc05/URLShorteningService)