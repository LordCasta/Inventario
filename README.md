<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre el proyecto
Es un software de inventarios básico con varias funcionalidades, cuenta con categorías y productos, dos tipos de usuarios ('admin' y 'user'), gráficas, tabla con exportar a excel, etc.

## Paso a paso instalación
### Requisitos
<ol>
    <li>Tener Laravel 12 (y su versión de php mínima correspondiente)</li>
    <li>Tener MySQL (preferiblemente xampp) corriendo</li>
    <li>Tener composer instalado (preferible, versiones recientes)</li>
</ol>

### Instalación local
<ol>
    <li>Clonar el repositorio</li>
    <li>Instalar dependencias: </li>
    <p>composer install</p>
    <p>npm install</p>
    <li>Cambiar nombre de .env.example a .env</li>
    <li>Generar key de la aplicación: </li>
    <p>php artisan key:generate</p>
    <li>Ejecutar servidor de MySQL</li>
    <li>Ejecutar las migraciones y seeders:</li>
    <p>php artisan migrate --seed</p>
    <li>Compilar frontend</li>
    <p>npm run dev (dejar corriendo si es necesario)</p>
    <li>Levantar servidor de Laravel</li>
    <p>php artisan serve</p>
</ol>