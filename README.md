<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## SISTEMA WEB PARA LA AUTOMATIZACIÓN DE PROCESOS DE GESTIÓN Y MONITOREO DEL GANADO BOVINO

Para la utilización de este sistema, la pc o el servidor necesita los siguientes elementos:

*Se incluyen los enlaces oficiales para la descarga:*

Composer: <a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a>

PHP versión 8.1 en adelante : <a href="https://www.php.net/downloads.php">https://www.php.net/downloads.php</a>

## INSTALACIÓN

Los siguientes pasos son para computadoras personales, en caso de instalación en un servidor dedicado guiarse con la documentación de dicho servidor.

**1) Ejecutar el comando:**
```bash
composer install
```
**2) Crear una base de datos en su SGBD**
 
**3) En la carpeta raíz crear un archivo .env y pegar el siguiente contenido, modificando los valores entre parentesis por los correspondientes a sus servicios.
   En caso de no contar con un servicio de correo puede utilizar el servicio de gmail <a href="https://noted.lol/setup-gmail-smtp-sending-2023/"> aquí un artículo que indica como</a>**
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:hv51yrHoR6eXacvHMObHhZPbF4qoH5r7knOfLHm/Z0I=
APP_DEBUG=true
APP_URL=http://localhost/

LOG_CHANNEL=stack

DB_CONNECTION=(base_de_datos_que_se_utilizará)
DB_HOST=(host_donde_se_encuentra_la_base_de_datos)
DB_PORT=(puerto_de_la_base_de_datos)
DB_DATABASE=(nombre_de_la_base_de_datos)
DB_USERNAME=(nombre_de_usuario_de_la_base_de_datos)
DB_PASSWORD=(contraseña_de_la_base_de_datos)

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=(host_del_sistema_de_correo_que_se_utilizará)
MAIL_PORT=(puerto_recomendado_del_sistema_de_correo)
MAIL_USERNAME=(dirección_de_correo_encargada_del_envío)
MAIL_PASSWORD=(contraseña_del_correo)
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=(dirección_de_correo_encargada_del_envío)
MAIL_FROM_NAME="Sistema de Gestión Bovina"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

**4) Ejecutar las migraciones a la base de datos con el siguiente comando:**
```bash
    php artisan migrate:fresh --seed
```
**5) Ejecutar el proyecto con el siguiente comando:**
```bash
    php artisan serve
```
**6) Para la actualización automática de categorías periodo seco y demás mientras el sistema este activo ejecutar el siguiente comando**
```bash
    php artisan schedule:work
```
 
# Que ofrece el sistema

El sistema cuenta con las siguientes carcterísticas:
## SECCIÓN GANADO
### Gestión de razas
- Ver listado de razas
- Ingreso de nuevas razas
- Editar razas
- 
### Gestión de Bovinos
- Ver el listado de bovinos
- ingresar animal
- editar animal
- eliminar animal
## SECCIÓN REPRODUCTIVA

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
